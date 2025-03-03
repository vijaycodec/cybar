<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Career;
use Illuminate\Http\Request;

class careerViewController extends Controller
{
    public function view($id = null)
    {
        // Fetch career with its category
        $careers = Career::with('category')->find($id);

        // Fetch all categories for trendings Resources


        // Check if career exists or not
        if ($careers) {
            // Resource found, pass career data to view
            return view('frontend.careers-view', ['careers' => $careers]);
        } 
       
    }

}
