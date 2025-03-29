<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuEvent;
use Illuminate\Http\Request;

class eventViewController extends Controller
{
    public function view($slug)
    {
        // dd($id);
        // Fetch resource with its category
        $category = Category::where('slug', $slug)->firstOrFail(); // Fetch category using slug
        $events = MenuEvent::where('category_id', $category->id)->get(); // Fetch events related to this category
        $slug=$category->slug;
        // $categories=Category::findOrFail($id);
        $categories = Category::where('slug', $slug)->firstOrFail(); // Fetch category using slug

        // Check if resource exists or not
        if ($events) {
            // Resource found, pass resource data to view
            return view('frontend.events-view', ['events' => $events,'categories'=>$categories,'slug' => $slug]);
        } 
       
    }


}
