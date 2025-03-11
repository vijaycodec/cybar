<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\backend\seoController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Seo;

class eventController extends Controller
{
    public function index()
    {

        $category = null; 

        $sub_category = null;

        $page_name='Event';

        $categories = Category::with('events')->where('category_type','event')->get();

        $trendings = Category::where('category_type','event')->latest()->take(5)->get();

        $seoDetails = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();
        
        // dd($seoData);
    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoDetails->page_name ?? 'Event page',
            'category_name'   => $seoDetails->category_name ?? 'General Event Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'General Event Subcategory',
            'template_name'   => $seoDetails->template_name ?? 'default-template',
            'seo_title'       => $seoDetails->seo_title ?? 'Default Event Title',
            'seo_description' => $seoDetails->seo_description ?? 'Default Event Description',
            'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,Event keywords',
        ];

        if (!empty($seoDetails->google_analytics)) {

            $seoData['google_analytics'] = $seoDetails->google_analytics;
        }

        return view('frontend.events', compact('categories', 'trendings','seoData'));
    }
}
