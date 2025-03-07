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
        // Using Validator::make to validate the request data
        $validator = Validator::make($request->all(), [
           'page_category_id' => 'required',
             'category_id' => 'required',
             'sub_category_id' => 'required',
             'template_name' => 'required',
             'seo_title' => 'required',
             'seo_description' => 'required',
             'seo_keywords' => 'required',
             'google_analytics' => 'required',
        ]);

        $page_id = $request->page_category_id;

        $page_name = PageDetail::where('id', $page_id)->get('page_name')->first();
 
        $c_id = $request->category_id;

        $category_name = CourseCategory::where('id', $c_id)->get('name')->first();

        $sub_id = $request->category_id;

        $subcategory_name = SubCategory::where('id', $sub_id)->get('sub_category')->first();

        // return response()->json($cateogry);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            $seodetails = new Seo();
            $seodetails->page_name = $page_name->page_name;
            $seodetails->category_name = $category_name->name;
            $seodetails->sub_category_name = $subcategory_name->sub_category;
            $seodetails->template_name = $request->template_name;
            $seodetails->seo_title = $request->seo_title;
            $seodetails->seo_keywords = $request->seo_keywords;
            $seodetails->seo_description = $request->seo_description;
            $seodetails->google_analytics = $request->google_analytics;
            

            // Check if an image was uploaded
           
            $seodetails->save();
            return redirect()->route('seo-details.list')->with('success', 'Record has been added successfully !');
        } catch (\Exception $e) {
            // Catch any exceptions and log the error
            return redirect()->back()->with('error', 'An error occurred while adding the SEO Details: ' . $e->getMessage());
        }
    }
}
