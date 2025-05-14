<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuBlog;
use App\Models\Podcast;
use App\Models\Seo;
use Illuminate\Http\Request;

class cnInsightController extends Controller
{
    public function index()
    {

        $page_name = 'CNinsight';

        // Fetch latest blogs
        // $TrendingBlogs = MenuBlog::with('category')->latest()->take(6)->get();
        $TrendingBlogs = MenuBlog::with('category')->orderBy('created_at', 'asc')->take(6)->get();


        // Fetch newsletters
        $NewsLetters = Category::with('newsletters')
            ->where('category_type', 'Newsletter')
            ->get();

        // Fetch events (single query for both trending and all events)
        $EventsQuery = Category::with('events')
            ->where('category_type', 'event');

        $Events = $EventsQuery->get();
        $TrendingEvents = $EventsQuery->take(6)->get(); // Reuse the query

        // Fetch latest trending podcasts
        $Trendingpodcast = Podcast::with('category')->latest()->limit(6)->get();

        $seoDetails = Seo::where('page_name', $page_name)
            ->where('category_name', null)
            ->where('sub_category_name', null)
            ->first();

        // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoDetails->page_name ?? 'CNInsight page',
            'category_name'   => $seoDetails->category_name ?? 'General CNInsight Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'General CNInsight Subcategory',
            'template_name'   => $seoDetails->template_name ?? 'default-template',
            'seo_title'       => $seoDetails->seo_title ?? 'Default CNInsight Title',
            'seo_description' => $seoDetails->seo_description ?? 'Default CNInsight Description',
            'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,CNInsight keywords',
        ];

        if (!empty($seoDetails->google_analytics)) {

            $seoData['google_analytics'] = $seoDetails->google_analytics;
        }

        return view('frontend.cn-insight', compact('TrendingBlogs', 'NewsLetters', 'Events', 'TrendingEvents', 'Trendingpodcast'));
    }
}
