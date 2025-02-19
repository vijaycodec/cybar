<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Intervention\Image\Laravel\Facades\Image;

class resourcesCategoriesController extends Controller
{

    public function index()
    {

        $categories = Category::orderBy('id', 'ASC')->paginate(10);

        return view('backend.category.index', compact('categories'));
    }


    public function create()
    {

        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        try {
            // Validate input using Validator::make
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'title' => 'required',
                'image' => 'mimes:png,jpg,jpeg|max:2048'
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput(); // Return old input for user convenience
            }

            // Save the new category
            $category = new Category();
            $category->name = $request->name;
            $category->title = $request->title;
            if ($request->hasFile('image')) {
                // dd('dfgredj');
                // Handle the image upload if a new image is selected
                $image = $request->file('image');
                $file_extension = $image->extension();
                $file_name = Carbon::now()->timestamp . '.' . $file_extension;

                // Save the new image
                $image->move(public_path('uploads/backend/category'), $file_name);

                // Store the new image path in the database
                $category->images = $file_name;
                // Redirect with a success message
            }

            // Save the updated category data

            $category->save();

            return redirect()->route('resources-category.list')->with('success', 'Category Added successfully!');
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return redirect()->back()
                ->withErrors(['error' => 'Something went wrong. Please try again later.'])
                ->withInput();
        }
    }

    
    public function show($id)
    {
        $category = Category::findOrFail($id);

        return response()->json([
            'name' => $category->name,
            'title' => $category->title,
            'created_at' => $category->created_at->format('d M, Y')
        ]);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Validate other fields
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);

        // Update the category name and title
        $category->name = $request->name;
        $category->title = $request->title;

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
        $categories = Category::find($id);
        if ($categories) {
            $categories->delete();
            return response()->json([
                'message' => 'Category deleted successfully!',
                'redirect' => route('resources-category.list') // Include the redirect URL
            ], 200);
        }
    }
}
