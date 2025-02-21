<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\MenuBlogCategory;


class blogController extends Controller
{
    public function index()
    {
        // $categories1 = MenuBlogCategory::pluck('name');

        $categories = Category::with('blogs')->where('category_type','blog')->get();

        $trendings = Category::where('category_type','blog')->latest()->take(5)->get();

        return view('frontend.blog', compact('categories', 'trendings'));
    }
}
