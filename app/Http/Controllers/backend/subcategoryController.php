<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\PageDetail;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class subcategoryController extends Controller
{
    public function index()
    {
        // Use eager loading to fetch related data to minimize queries
        $subCategories = SubCategory::with(['pageCategory', 'category'])
            ->orderBy('id', 'ASC')
            ->paginate(3); // Paginate results for better performance
        
        return view('backend.sub_category.index', compact('subCategories'));
    }

    public function create()
    {
        $page_categories = PageDetail::all();
 
        return view('backend.sub_category.create',compact('page_categories'));
    }

        // Fetch Categories based on Page Category ID
        public function getCategories(Request $request)
        {
            $categories = CourseCategory::where('page_category', $request->page_category_id)->get();
            return response()->json($categories);
        }
    
        // Fetch Sub-Categories based on Category ID
        // public function getSubCategories(Request $request)
        // {
        // //dd($request->all());
        //     $subCategories = SubCategory::where('category_id', $request->category_id)->get();
        //     // dd($subCategories);
        //     return response()->json($subCategories);
        // }


        public function store(Request $request)
    {

        // Using Validator::make to validate the request data
        $validator = Validator::make($request->all(), [
            'page_category_id' => 'required',
            'category_id' => 'required',
            'sub_category' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            $subCategories = new SubCategory();
            $subCategories->page_category_id = $request->page_category_id;
            $subCategories->category_id = $request->category_id;
            $subCategories->sub_category = $request->sub_category;
            

                $subCategories->save();
                return redirect()->route('sub-category.list')->with('success', 'Record has been added successfully !');
            
        } catch (\Exception $e) {
            // Catch any exceptions and log the error
            return redirect()->back()->with('error', 'An error occurred while adding the resource: ' . $e->getMessage());
        }
    }
   
}
