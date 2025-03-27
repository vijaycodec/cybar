<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\MenuBlog;
use App\Models\MenuEvent;
use App\Models\NewsLetter;
use App\Models\Podcast;
use Illuminate\Http\Request;

class cnInsightController extends Controller
{
    public function index()
    {
        // Fetch latest blogs with validation
        $TrendingBlogs = MenuBlog::with('category')
            ->latest()
            ->limit(6)
            ->get();
        
        if ($TrendingBlogs->isEmpty()) {
            $TrendingBlogs = collect(); // Return an empty collection if no data found
        }
    
        // Fetch newsletters with validation
        $NewsLetters = Category::with('newsletters')
            ->where('category_type', 'Newsletter')
            ->get();
        
        if ($NewsLetters->isEmpty()) {
            $NewsLetters = collect();
        }
    
        // Fetch events with validation
        $Events = Category::with('events')
            ->where('category_type', 'event')
            ->get();
        
        if ($Events->isEmpty()) {
            $Events = collect();
        }
    
        // Fetch latest trending events with validation
        $TrendingEvents = Category::with('events')
        ->where('category_type', 'event')
        ->limit(6) // Fetch only 3 categories
        ->get();
    
        if ($TrendingEvents->isEmpty()) {
            $TrendingEvents = collect();
        }
    
        // Fetch trending podcasts with validation
        $Trendingpodcast = Podcast::with('category')
            ->latest()
            ->limit(6)
            ->get();
        
        if ($Trendingpodcast->isEmpty()) {
            $Trendingpodcast = collect();
        }
    
        return view('frontend.cn-insight', compact('TrendingBlogs', 'NewsLetters', 'Events', 'TrendingEvents', 'Trendingpodcast'));
    }
    
}
