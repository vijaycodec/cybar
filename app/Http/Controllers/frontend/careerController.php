<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class careerController extends Controller
{
    public function index()
    {
        dd('ok');
        $categories = Category::with('careers')->where('category_type','careers')->get();

        $trendings = Category::where('category_type','careers')->latest()->take(5)->get();

        return view('frontend.careers', compact('categories', 'trendings'));
    }
}
