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

        $categories = CourseCategory::orderBy('id', 'ASC')->paginate(10);

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

    public function edit($id)
    {
        $category = CourseCategory::findOrFail($id);

        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Validate other fields
        $validated = $request->validate([
            'page_category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        $category = CourseCategory::findOrFail($id);

        // Update the category name and title
        $category->page_category = $request->page_category;
        $category->name = $request->name;
        // Check if a new image is provided
        if ($request->hasFile('image')) {
            // Validate the image
            $request->validate([
                'image' => 'mimes:png,jpg,jpeg|max:2048'
            ]);

            // Remove the old image from the upload folder if it exists
            if ($category->images && file_exists(public_path('uploads/backend/category/' . $category->images))) {
                unlink(public_path('uploads/backend/category/' . $category->images)); // Remove old image
            }

            // Handle the image upload if a new image is selected
            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;

            // Save the new image
            $image->move(public_path('uploads/backend/category'), $file_name);

            // Store the new image path in the database
            $category->images = $file_name;
        }

        // Save the updated category data
        $category->save();

        return response()->json(['message' => 'Category updated successfully!']);
    }


    public function destroy($id)
    {
        $categories = CourseCategory::find($id);
        if ($categories) {
            $categories->delete();
            return response()->json([
                'message' => 'Category deleted successfully!',
                'redirect' => route('resources-category.list') // Include the redirect URL
            ], 200);
        }
    }

}
