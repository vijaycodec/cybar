<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Category;

class careerController extends Controller
{
    public function index()
    {
        $categories = Category::with('careers')->where('category_type','careers')->get();

        // $trendings = Category::where('category_type','careers')->latest()->take(5)->get();

        $trendings = Career::whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)') // OR MAX(id) for latest record
                  ->from('careers')
                  ->groupBy('category_id');
        })
            ->get();

            // dd($trendings);
   
        return view('frontend.careers', compact('categories', 'trendings'));
    }
}
