<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\PageDetail;
use App\Models\Seo;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class seoController extends Controller
{
    public function index()
    {
        $seodetails = Seo::with(['seopageCategory', 'seocategory', 'seosubCategory'])

            ->orderBy('id', 'ASC')
            ->get();
        //dd($seodetails->first()->seopageCategory->page_name);
        return view('backend.seo-details.index', compact('seodetails'));
    }

    public function create()
    {
        $page_categories = PageDetail::all();

        return view('backend.seo-details.create', compact('page_categories'));
    }

    // Fetch Categories based on Page Category ID
    public function SeoGetCategories(Request $request)
    {
        //    dd($request->page_category_id);

        //  $name = PageDetail::where('page_category', $request->page_category_id)->get('name');


        $categories = CourseCategory::where('page_category', $request->page_category_id)->get();
        return response()->json($categories);
    }

    // Fetch Sub-Categories based on Category ID And Page_id
    public function SeoGetSubCategories(Request $request)
    {

        $categoryId = $request->category_id;

        $pageCategoryId = $request->page_category_id;

        $subcategories = SubCategory::where('category_id', $categoryId)
            ->where('page_category_id', $pageCategoryId)
            ->get();
        // dd( $subcategories);
        return response()->json($subcategories);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'page_category_id'   => 'required|integer',
            'category_id'        => 'nullable|integer',
            'sub_category_id'    => 'nullable|integer',
            'template_name'      => 'required|string|max:255',
            'seo_title'          => 'required|string|max:255',
            'seo_description'    => 'required|string|max:500',
            'seo_keywords'       => 'required|string|max:255',
            'google_analytics'   => 'nullable|string',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        try {
            // Initialize variables to NULL to avoid "undefined variable" errors
            $page_name = null;
            $category_name = null;
            $subcategory_name = null;
            $category_id = null;
            $sub_category_id = null;
    
            // Fetch Page Name if page_category_id is provided
            if ($request->filled('page_category_id')) {
                $page_data = PageDetail::where('id', $request->page_category_id)->first();
                if ($page_data) {
                    $page_name = $page_data->page_name;
                }
            }
    
            // Fetch Category Name if category_id is provided
            if ($request->filled('category_id')) {
                $category_data = CourseCategory::where('page_category', $request->page_category_id)
                    ->where('id', $request->category_id)->first();
    
                if ($category_data) {
                    $category_id = $category_data->id;
                    $category_name = $category_data->name;
                }
            }
    
            // Fetch Subcategory Name if sub_category_id is provided
            if ($request->filled('sub_category_id') && $category_id !== null) {
                $subcategory_data = SubCategory::where('page_category_id', $request->page_category_id)
                    ->where('category_id', $category_id)
                    ->where('id', $request->sub_category_id)
                    ->first();
    
                if ($subcategory_data) {
                    $sub_category_id = $subcategory_data->id;
                    $subcategory_name = $subcategory_data->sub_category;
                }
            }
    
            // Save SEO Details
            $seodetails = new Seo();
            
            $seodetails->page_name = $page_name;
            $seodetails->category_name = $category_name;
            $seodetails->sub_category_name = $subcategory_name;
    
            // Store IDs ensuring NULL if not found
            $seodetails->page_category_id = $request->page_category_id;
            $seodetails->category_id = $category_id;
            $seodetails->sub_category_id = $sub_category_id;
    
            $seodetails->template_name = $request->template_name;
            $seodetails->seo_title = $request->seo_title;
            $seodetails->seo_keywords = $request->seo_keywords;
            $seodetails->seo_description = $request->seo_description;
            $seodetails->google_analytics = $request->google_analytics;
    
            $seodetails->save();
    
            return redirect()->route('seo-details.list')->with('message', 'Record has been added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the SEO Details: ' . $e->getMessage());
        }
    }
    

    public function edit($id)
    {
        $seoDetail = Seo::findOrFail($id);
        $page_categories = PageDetail::all();
        $categories = CourseCategory::where('page_category', $seoDetail->page_category_id)->get();
        $subCategories = SubCategory::where('category_id', $seoDetail->category_id)->get();

        return view('backend.seo-details.edit', compact('seoDetail', 'page_categories', 'categories', 'subCategories'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'page_category_id'   => 'required|integer',
            'category_id'        => 'nullable|integer',
            'sub_category_id'    => 'nullable|integer',
            'template_name'      => 'required|string|max:255',
            'seo_title'          => 'required|string|max:255',
            'seo_description'    => 'required|string|max:500',
            'seo_keywords'       => 'required|string|max:255',
            'google_analytics'   => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Find the existing SEO record
            $seoDetail = Seo::findOrFail($id);

            // Initialize variables
            $page_name = null;
            $category_name = null;
            $subcategory_name = null;

            // Fetch Page Name if page_category_id is provided
            if ($request->filled('page_category_id')) {
                $page_data = PageDetail::where('id', $request->page_category_id)->first();
                if ($page_data) {
                    $page_name = $page_data->page_name;
                }
            }

            // Fetch Category Name if category_id is provided
            if ($request->filled('category_id')) {
                $category_data = CourseCategory::where('page_category', $request->page_category_id)
                    ->where('id', $request->category_id)
                    ->first();
                if ($category_data) {
                    $category_name = $category_data->name;
                }
            }

            // Fetch Subcategory Name if sub_category_id is provided
            if ($request->filled('sub_category_id')) {
                $subcategory_data = SubCategory::where('page_category_id', $request->page_category_id)
                    ->where('category_id', $request->category_id)
                    ->where('id', $request->sub_category_id)
                    ->first();
                if ($subcategory_data) {
                    $subcategory_name = $subcategory_data->sub_category;
                }
            }

            // Update the SEO details
            $seoDetail->page_name = $page_name;
            $seoDetail->category_name = $category_name;
            $seoDetail->sub_category_name = $subcategory_name;

            // Update IDs
            $seoDetail->page_category_id = $request->page_category_id;
            $seoDetail->category_id = $request->category_id;
            $seoDetail->sub_category_id = $request->sub_category_id;

            // Update other fields
            $seoDetail->template_name = $request->template_name;
            $seoDetail->seo_title = $request->seo_title;
            $seoDetail->seo_keywords = $request->seo_keywords;
            $seoDetail->seo_description = $request->seo_description;
            $seoDetail->google_analytics = $request->google_analytics;

            // Save changes
            $seoDetail->save();

            return redirect()->route('seo-details.list')->with('message', 'SEO details updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the SEO details: ' . $e->getMessage());
        }
    }

    public function destroy($id)
{
    try {
        // Find the SEO record
        $seoDetail = Seo::findOrFail($id);

        // Delete the record
        $seoDetail->delete();

        return redirect()->route('seo-details.list')->with('message', 'SEO record deleted successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred while deleting the SEO record: ' . $e->getMessage());
    }
}
}
