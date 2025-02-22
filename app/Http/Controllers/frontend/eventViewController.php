<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuEvent;
use Illuminate\Http\Request;

class eventViewController extends Controller
{
    public function view($id = null)
    {
        // dd($id);
        // Fetch resource with its category
        $events = MenuEvent::where('category_id',$id)->get();

        $categories=Category::findOrFail($id);

        // Check if resource exists or not
        if ($events) {
            // Resource found, pass resource data to view
            return view('frontend.events-view', ['events' => $events,'categories'=>$categories]);
        } 
       
    }


}
