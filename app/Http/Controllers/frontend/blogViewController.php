<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuBlog;

class blogViewController extends Controller
{
    public function view($id = null)
    {
        // Fetch resource with its category
        $resource = MenuBlog::with('category')->find($id);

        // Fetch all categories for trendings Blogs
        $trendings = Category::where('category_type','blog')->latest()->take(5)->get();

        // Check if resource exists or not
        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.blog-view', ['resource' => $resource, 'trendings' => $trendings]);
        } 
       
    }

    public function trendingResourceView($id = null)
    {

        $resource = MenuBlog::with('category')->where('category_id', $id)->first();

        // Fetch all categories for trendings Resources
        $trendings = Category::where('category_type','blog')->latest()->take(5)->get();

        // Fetch the category
        $category = Category::findOrFail($id);

        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.blog-view', ['resource' => $resource, 'trendings' => $trendings, 'category' => $category]);
        } else{
            return view('frontend.blog-view', [ 'trendings' => $trendings, 'category' => $category]);

        }
       
}
}



