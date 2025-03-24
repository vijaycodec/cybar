<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuBlog;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class cnInsightController extends Controller
{
    public function index()
    {
        // $TrendingBlogs = Category::with('blogs')->where('category_type','blog')->get();
        $TrendingBlogs = MenuBlog::with('category')
        ->latest() // Fetch latest blogs
        ->limit(6) // Limit to 6 blogs
        ->get();

        $NewsLetters = Category::with('newsletters')->where('category_type','Newsletter')->get();
        
        $Events = Category::with('events')->where('category_type','event')->get();

        return view('frontend.cn-insight',compact('TrendingBlogs','NewsLetters','Events'));
    }
}
