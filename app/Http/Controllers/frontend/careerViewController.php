<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Career;
use Illuminate\Http\Request;

class careerViewController extends Controller
{
    public function view($category_slug, $slug)
    {
        // Fetch career with its category
        $careers = Career::with('category')
            ->where('slug', $slug)
            ->whereHas('category', function ($query) use ($category_slug) {
                $query->where('slug', $category_slug);
            })
            ->first();
    
        // Handle case when no record is found
        if (!$careers) {
            abort(404, 'Career not found');
        }
    
        $category_slug = $careers->category->name ?? null;
        $slug = $careers->subcategory;
    
        // Return the view with data
        return view('frontend.careers-view', [
            'careers' => $careers, 
            'slug' => $slug, 
            'category_slug' => $category_slug
        ]);
    }
    

}
