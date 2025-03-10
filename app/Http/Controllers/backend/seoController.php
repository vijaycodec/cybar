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
        $seodetails = Seo::with(['pageCategory', 'category', 'subCategory'])
        ->orderBy('id', 'ASC')
        ->paginate(10);
       //dd($l3Categories);
        return view('backend.seo-details.index', compact('seodetails'));
    }

    public function create()
    {
        $page_categories = PageDetail::all();
        
        return view('backend.seo-details.create',compact('page_categories'));
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
             'google_analytics'   => 'nullable|string', // Allowing script as a string
         ]);
     
         // Check if validation fails
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
     
         try {
             // Initialize variables
            //  $page_name = null;
             $category_name = null;
             $subcategory_name = null;
     
             // Fetch Page Name only if page_category_id is provided
             if ($request->filled('page_category_id')) {
                 $page_name = PageDetail::where('id', $request->page_category_id)->value('page_name');
             }

             // Fetch Category Name only if category_id is provided
             if ($request->filled('category_id')) {
                 $category_name = CourseCategory::where('id', $request->category_id)->value('name');
             }

             // Fetch Subcategory Name only if sub_category_id is provided
             if ($request->filled('sub_category_id')) {
                 $subcategory_name = SubCategory::where('id', $request->sub_category_id)->value('sub_category');
             }
     
             // Save SEO Details
             $seodetails = new Seo();
             $seodetails->page_name = $page_name; // Null allowed
             $seodetails->category_name = $category_name; // Null allowed
             $seodetails->sub_category_name = $subcategory_name; // Null allowed
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
     
     
}
