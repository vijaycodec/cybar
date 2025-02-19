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
        $categories1 = Category::pluck('name');

        $categories = Category::with('resources')->get();

        // $trendings = Category::all();
        $trendings = Category::latest()->take(5)->get();

        return view('frontend.resources', compact('categories', 'categories1', 'trendings'));
    }

}
