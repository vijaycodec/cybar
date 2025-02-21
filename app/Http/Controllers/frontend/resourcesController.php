<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;

class resourcesController extends Controller
{
    public function index()
    {
        $categories = Category::with('resources')->where('category_type','resources')->get();

        $trendings = Category::where('category_type','resources')->latest()->take(5)->get();

        return view('frontend.resources', compact('categories', 'trendings'));
    }

}
