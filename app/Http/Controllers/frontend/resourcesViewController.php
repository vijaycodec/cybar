<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;

class resourcesViewController extends Controller
{
    public function view($id = null)
    {
        // Fetch resource with its category
        $resource = Resource::with('category')->find($id);

        // Fetch all categories for trendings Resources
        $trendings = Category::where('category_type','resources')->latest()->take(5)->get();

        // Check if resource exists or not
        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.resources-view', ['resource' => $resource, 'trendings' => $trendings]);
        } 
       
    }

    public function trendingResourceView($id = null)
    {

        $resource = Resource::with('category')->where('category_id', $id)->first();

        // Fetch all categories for trendings Resources
        $trendings = Category::where('category_type','resources')->latest()->take(5)->get();

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

