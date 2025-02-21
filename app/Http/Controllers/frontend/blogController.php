<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuBlogCategory;


class blogController extends Controller
{
    public function index()
    {
        // $categories1 = MenuBlogCategory::pluck('name');

        $categories = MenuBlogCategory::with('blogs')->get();

        $trendings = MenuBlogCategory::latest()->take(5)->get();

        return view('frontend.blog', compact('categories', 'trendings'));
    }
}
