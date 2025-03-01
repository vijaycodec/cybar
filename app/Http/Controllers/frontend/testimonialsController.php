<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class testimonialsController extends Controller
{
    public function index()
    {
        $categories = Category::with('testimonials')->where('category_type','testimonials')->get();

        $trendings = Category::where('category_type','testimonials')->latest()->take(10)->get();
        return view('frontend.testimonials', compact('categories', 'trendings'));
    }
}
