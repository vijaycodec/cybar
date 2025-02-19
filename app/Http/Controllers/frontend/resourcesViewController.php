<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;

class resourcesViewController extends Controller
{
    public function view($id = null)
    {
       
        // Fetch resource with its category
        $resource = Resource::with('category')->find($id);

        // Fetch all categories for trendings Resources
        //   $trendings = Category::all();
        $trendings = Category::latest()->take(5)->get();


        // Fetch the category (even if no resource is found)
        $category = Category::findOrFail($id);

        // Check if resource exists or not
        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.resources-view', ['resource' => $resource, 'trendings' => $trendings]);
        } 
        // else {
        //     // Resource not found, fallback to category
        //     return view('frontend.resources-view', ['trendings' => $trendings, 'category' => $category]);
        // }
    }

    // $resourceview= Resource::where('category_id', $id)
    // ->orderBy('id')  // Ensuring the first record is selected
    // ->first();

    public function trendingResourceView($id = null)
    {

        $resource = Resource::with('category')->where('category_id', $id)->first();

        // Fetch all categories for trendings Resources
        $trendings = Category::latest()->take(5)->get();

        // Fetch the category
        $category = Category::findOrFail($id);

        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.resources-view', ['resource' => $resource, 'trendings' => $trendings, 'category' => $category]);
        } else{
            return view('frontend.resources-view', [ 'trendings' => $trendings, 'category' => $category]);

        }
       
}
}

