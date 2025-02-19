<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class resourcesController extends Controller
{

    public function index()
    {
        // Retrieve resources with their related category, ordered by ID, and paginated

        $resources = Resource::with('category')->orderBy('id', 'ASC')->paginate(10);

        // Process descriptions for each resource

        foreach ($resources as $resource) {

            // Add the short description attribute for each resource

            $resource->short_description = $this->getShortDescription($resource->description);
        }

        // Return the 'index' view with resources data
        return view('backend.resources.index', compact('resources'));
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
        $categories = Category::all();

        // Return the 'create' view with the categories data passed as a variable
        return view('backend.resources.create', compact('categories'));
    }


    public function store(Request $request)
    {
        // Using Validator::make to validate the request data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            $resource = new Resource();
            $resource->category_id = $request->category_id;
            $resource->short_desc = $request->short_desc;
            $resource->description = $request->description;

            // Check if an image was uploaded
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $file_extension = $image->extension();
                $file_name = Carbon::now()->timestamp . '.' . $file_extension;

                // Generate thumbnail image
                $this->GenerateResourceThumbnailImage($image, $file_name);
                $resource->images = $file_name;
                // Save the resource to the database     
                $resource->save();
                return redirect()->route('resources.list')->with('success', 'Record has been added successfully !');
            }
        } catch (\Exception $e) {
            // Catch any exceptions and log the error
            return redirect()->back()->with('error', 'An error occurred while adding the resource: ' . $e->getMessage());
        }
    }
    public function GenerateResourceThumbnailImage($image, $file_name)
    {
        // Define the destination path for the thumbnail
        $destinationPath = public_path('uploads/backend/resources/');

        $img = Image::read($image->path());

        // Save the image without any quality loss (for PNG or JPEG, no compression applied)
        $img->save($destinationPath . $file_name, 100); // '100' ensures no compression is applied

        // If you need to generate a thumbnail, you can use a smaller size, but make sure to use high quality
        // e.g., resizing with an aspect ratio preserved, without reducing the image's quality
        $img->resize(124, 124, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize(); // Prevent upscaling of smaller images
        });

        // Save the resized image with the same high quality
        $img->save($destinationPath . 'thumb_' . $file_name, 100);
    }
    public function destroy($id)
    {
        $resource = Resource::find($id);
        if ($resource) {
            $resource->delete();
            return response()->json([
                'success' => 'Records deleted successfully',
                'redirect' => route('resources.list') // Include the redirect URL
            ], 200);
        }
    }

    public function show($id)
    {
        $resource = Resource::findOrFail($id);
        $category_name = Category::where('id', $resource->category_id)->pluck('name');

        return response()->json([
            'resource_name' => $category_name,
            'short_desc' => $resource->short_desc,
            'description' => $resource->description,
            'created_at' => $resource->created_at->format('d M, Y')
        ]);
    }
    public function edit($id)
    {
        $all_categories = Category::all();
        $resources = Resource::with('category')->findOrFail($id);

        return view('backend.resources.edit', compact('resources', 'all_categories'));
    }

    public function update(Request $request, $id)
    {
       
        // Validate other fields
        $validated = $request->validate([
            'category_id' => 'required',
            'short_desc' => 'required|string',
            'description' => 'required',

        ]);

        $resources = Resource::findOrFail($id);

        $resources->category_id = $request->category_id;
        $resources->short_desc = $request->short_desc;
        $resources->description = $request->description;
        // Check if a new image is provided
        if ($request->hasFile('image')) {
            // Validate the image
            $request->validate([
                'image' => 'mimes:png,jpg,jpeg|max:2048'
            ]);

            // Remove the old image from the upload folder if it exists
            if ($resources->images && file_exists(public_path('uploads/backend/resources/' . $resources->images))) {
                unlink(public_path('uploads/backend/resources/' . $resources->images)); // Remove old image
            }

            // Handle the image upload if a new image is selected
            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;

            // Save the new image
            $image->move(public_path('uploads/backend/resources'), $file_name);

            // Store the new image path in the database
            $resources->images = $file_name;
        }
        // Save the updated category data
        $resources->save();

        return response()->json(['message' => 'Resources updated successfully!']);
    }
}
