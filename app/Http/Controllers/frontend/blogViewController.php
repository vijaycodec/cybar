<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuBlog;

class blogViewController extends Controller
{
    public function view($slug)
    {   
        // dd($slug);
        // Fetch resource using the slug instead of the ID
        $resource = MenuBlog::with('category')->where('slug', $slug)->first();
        $slug=$resource->sub_category;
        // Fetch all categories for trending blogs
        // $trendings = Category::where('category_type', 'blog')->latest()->take(5)->get();
        $trendings = MenuBlog::with('category')->latest()->take(5)->get();

        // Check if resource exists
        if ($resource) {
            return view('frontend.blog-view', ['resource' => $resource, 'trendings' => $trendings,'slug'=>$slug]);
        }
    
        // If not found, show a 404 page
  
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



