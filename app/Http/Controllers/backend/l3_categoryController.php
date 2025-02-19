<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\L3Category;
use App\Models\OurServices;
use App\Models\PageDetail;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class l3_categoryController extends Controller
{
    public function index()
    {
        $l3Categories = L3Category::with(['pageCategory', 'category', 'subCategory'])
        ->orderBy('id', 'ASC')
        ->paginate(10);
       //dd($l3Categories);
        return view('backend.l3-category.index', compact('l3Categories'));
    }
    
    public function create()
    {
        $page_categories = PageDetail::all();
        
        return view('backend.l3-category.create',compact('page_categories'));
    }

        // Fetch Categories based on Page Category ID
        public function l3GetCategories(Request $request)
        {
        //   dd('working');
            $categories = CourseCategory::where('page_category', $request->page_category_id)->get();
            return response()->json($categories);
        }
    
        // Fetch Sub-Categories based on Category ID And Page_id
        public function l3GetSubCategories(Request $request)
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

        // dd($request->all());
        // Using Validator::make to validate the request data
        $validator = Validator::make($request->all(), [
            'page_category_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'l3_category_name'=>'required'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
                // Check if the combination already exists
                $existingCategory = L3Category::where('page_category_id', $request->page_category_id)
                ->where('category_id', $request->category_id)
                ->where('sub_category_id', $request->sub_category_id)
                ->where('l3_category', $request->l3_category_name)
                ->first();

            if ($existingCategory) {
                return redirect()->back()->with('error', 'This L3-category already exists!');
            }

            $l3category = new L3Category();
            $l3category->page_category_id = $request->page_category_id;
            $l3category->category_id = $request->category_id;
            $l3category->sub_category_id = $request->sub_category_id;
            $l3category->l3_category = $request->l3_category_name;
            
                $l3category->save();
                return redirect()->route('l3-category.list')->with('success', 'Record has been added successfully !');
            
        } catch (\Exception $e) {
            // Catch any exceptions and log the error
            return redirect()->back()->with('error', 'An error occurred while adding the l3 category: ' . $e->getMessage());
        }
    }
    
    public function edit($id)
    {
        // Find the L3 Category or return 404
        $l3Category = L3Category::findOrFail($id);

        // Fetch related data for dropdowns
        $page_categories = PageDetail::all();
        $categories = CourseCategory::where('page_category', $l3Category->page_category_id)->get();
        $subCategories = SubCategory::where('category_id', $l3Category->category_id)->get();

        return view('backend.l3-category.edit', compact('l3Category', 'page_categories', 'categories', 'subCategories'));
    }

    public function update(Request $request, $id)
    {
        // Validate input data
        $request->validate([
            'page_category_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'l3_category_name' => 'required',
        ]);
        // Find the L3 Category or return 404
        $l3Category = L3Category::findOrFail($id);
        $l3Category->page_category_id = $request->page_category_id;
        $l3Category->category_id = $request->category_id;
        $l3Category->sub_category_id = $request->sub_category_id;
        $l3Category->l3_category = $request->l3_category_name;
        
        $l3Category->save();

            return redirect()->route('l3-category.list')->with('success', 'Record has been update successfully !');
       
    }
    public function destroy($id)
    {
        $l3Category = L3Category::find($id);
        if ($l3Category) {
            $l3Category->delete();
            return response()->json([
                'message' => 'Category deleted successfully!',
                'redirect' => route('l3-category.list') // Include the redirect URL
            ], 200);
        }
    }
}
 


