<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;


class eventController extends Controller
{
    public function index()
    {
        $categories = Category::with('events')->where('category_type','event')->get();

        $trendings = Category::where('category_type','event')->latest()->take(5)->get();

        return view('frontend.events', compact('categories', 'trendings'));
    }
}
