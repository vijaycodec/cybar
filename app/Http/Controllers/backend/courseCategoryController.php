<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\PageDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class courseCategoryController extends Controller
{
    public function index()
    {
        $categories = CourseCategory::with('pageCategory')
        ->orderBy('id', 'ASC')
        ->get();
        //dd($categories);
        return view('backend.courseCategory.index', compact('categories'));
    }

    public function create()
    {
        $categories = PageDetail::all();
        // dd($categories);
        return view('backend.courseCategory.create',compact('categories'));
    }

    public function store(Request $request)
    {
    //   dd($request->all());
        try {
            // Validate input using Validator::make
            $validator = Validator::make($request->all(), [
                'category_id' => 'required',
                'name' => 'required',  
                'title' => 'required',  
                'slug' => 'required',
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput(); // Return old input for user convenience
            }

            // Save the new category
            $category = new CourseCategory();
            $category->page_category = $request->category_id;
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->title = $request->title;
            
            // Save the updated category data

            $category->save();

            return redirect()->route('course-category.list')->with('success', 'Category Added successfully!');
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return redirect()->back()
                ->withErrors(['error' => 'Something went wrong. Please try again later.'])
                ->withInput();
        }
    }

    
    public function show($id)
    {
        $category = CourseCategory::findOrFail($id);

        return response()->json([
            'page_category' => $category->pages_category,
            'name' => $category->name,
            'created_at' => $category->created_at->format('d M, Y')
        ]);
    }

    // Show form for editing a category
    public function edit($id)
    {
        $courseCategory = CourseCategory::findOrFail($id);
        $categories = PageDetail::all(); // Fetch all page categories
        return view('backend.courseCategory.edit', compact('courseCategory', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validate input data
        $request->validate([
            'category_id' => 'required',
                'name' => 'required',  
                'title' => 'required', 
                'slug' => 'required',
        ]);

        // Find the service or return 404
        $courseCategory = CourseCategory::findOrFail($id);

        // Update fields
        $courseCategory->page_category = $request->category_id;
        $courseCategory->name = $request->name;
        $courseCategory->slug = $request->slug;
        $courseCategory->title = $request->title;
        // Save changes
        $courseCategory->save();

        return redirect()->route('course-category.list')->with('success', 'Record has been updated successfully!');
    }


    public function destroy($id)
    {
        $categories = CourseCategory::find($id);
        if ($categories) {
            $categories->delete();
            return response()->json([
                'message' => 'Category deleted successfully!',
                'redirect' => route('course-category.list') // Include the redirect URL
            ], 200);
        }else{
            return response()->json([
                'message' => 'No Category Found! ',
                'redirect' => route('course-category.list') // Include the redirect URL
            ], 404); 
        }
    }

}
