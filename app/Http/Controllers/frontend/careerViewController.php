<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Career;
use Illuminate\Http\Request;

class careerViewController extends Controller
{
    public function view($slug)
    {
        // Fetch career with its category
        // $careers = Career::with('category')->find($id);
        $careers = Career::with('category')->where('slug', $slug)->first();
        $slug=$careers->subcategory;

        // Fetch all categories for trendings Resources

        // Check if career exists or not
        if ($careers) {
            // Resource found, pass career data to view
            return view('frontend.careers-view', ['careers' => $careers, 'slug' => $slug]);
        } 
       
    }

}
