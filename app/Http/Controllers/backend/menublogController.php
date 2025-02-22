<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
//use App\Models\Category;
use App\Models\MenuBlogCategory;
use App\Models\MenuBlog;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
// use Intervention\Image\Laravel\Facades\Image;

class menublogController extends Controller
{
    public function index()
    {
        // Retrieve resources with their related category, ordered by ID, and paginated

        $blogs = MenuBlog::with('category')->orderBy('id', 'ASC')->paginate(10);

        return view('backend.menublog.index', compact('blogs'));
    }

    public function getShortDescription($description)
    {
        // Remove HTML tags and split the description into words
        $words = explode(' ', strip_tags($description));

        // If there are more than 20 words, truncate and add "..."
        if (count($words) > 19) {

            return implode(' ', array_slice($words, 0, 19)) . '...';
        }

        return implode(' ', $words);  // Return as is if less than or equal to 20 words
    }

    public function create()
    {
        // Retrieve all categories from the Category model
        $categories = Category::where('category_type', 'blog')->get();

        // Return the 'create' view with the categories data passed as a variable
        return view('backend.menublog.create', compact('categories'));
    }


    public function store(Request $request)
    {
        // Using Validator::make to validate the request data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'sub_category' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            $blog = new MenuBlog();
            $blog->category_id = $request->category_id; 
            $blog->sub_category = $request->sub_category;
            $blog->short_desc = $request->short_desc;
            $blog->description = $request->description;

            // Check if an image was uploaded
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'mimes:png,jpg,jpeg|max:2048'
                ]);
        
                // Remove the old image from the upload folder if it exists
                if ($blog->images && file_exists(public_path('uploads/backend/blog/' . $blog->images))) {
                    unlink(public_path('uploads/backend/blog/' . $blog->images)); // Remove old image
                }

                $image = $request->file('image');
                $file_extension = $image->extension();
                $file_name = Carbon::now()->timestamp . '.' . $file_extension;
                $image->move(public_path('uploads/backend/blog'), $file_name);

                // Store the new image path in the database
                $blog->images= $file_name;
            }

            $blog->save();
            return redirect()->route('menublog.list')->with('success', 'Record has been added successfully !');

        } catch (\Exception $e) {
            // Catch any exceptions and log the error
            return redirect()->back()->with('error', 'An error occurred while adding the blog: ' . $e->getMessage());
        }
    }
   

    
    public function edit($id)
    {
        $all_categories = Category::where('category_type', 'blog')->get();

        $blogs = MenuBlog::with('category')->findOrFail($id);

        return view('backend.menublog.edit', compact('blogs', 'all_categories'));
    }

    // Update Menu Blog

    public function update(Request $request, $id)
    {
       
        // Validate other fields
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_category' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
           
        ]);
        $blog = MenuBlog::findOrFail($id);

        $blog->category_id = $request->category_id; 
        $blog->sub_category = $request->sub_category;
        $blog->short_desc = $request->short_desc;
        $blog->description = $request->description;
        // Check if a new image is provided
        if ($request->hasFile('image')) {
            // Validate the image
            $request->validate([
                'image' => 'mimes:png,jpg,jpeg|max:2048'
            ]);

            // Remove the old image from the upload folder if it exists
            if ($blog->images && file_exists(public_path('uploads/backend/blog/' . $blog->images))) {
                unlink(public_path('uploads/backend/blog/' . $blog->images)); // Remove old image
            }

            // Handle the image upload if a new image is selected
            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;

            // Save the new image
            $image->move(public_path('uploads/backend/blog'), $file_name);

            // Store the new image path in the database
            $blog->images = $file_name;
        }
        // Save the updated category data
        $blog->save();

        return redirect()->route('menublog.list')->with('success', 'Blog updated successfully!');

    }

    public function destroy($id)
    {
        $blog = MenuBlog::find($id);
        if ($blog) {
            $blog->delete();
            return response()->json([
                'message' => 'Blog deleted successfully!',
                'redirect' => route('menublog.list') // Include the redirect URL
            ], 200);
        }
    }


}