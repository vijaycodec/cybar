<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Podcast;
use App\Models\Seo;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function podcast(Request $request){
        $category = null; 

        $sub_category = null;

        $page_name='Podcast';

        $categories = Category::with('prodcasts')->where('category_type','podcast')->get();


        $seoDetails = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();
    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoDetails->page_name ?? 'Podcast page',
            'category_name'   => $seoDetails->category_name ?? 'General Podcast Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'General Podcast Subcategory',
            'template_name'   => $seoDetails->template_name ?? 'default-template',
            'seo_title'       => $seoDetails->seo_title ?? 'Default Podcast Title',
            'seo_description' => $seoDetails->seo_description ?? 'Default Podcast Description',
            'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,Podcast keywords',
        ];

        // Include google_analytics only if it's not empty or null
if (!empty($seoDetails->google_analytics)) {

    $seoData['google_analytics'] = $seoDetails->google_analytics;
}

        return view('frontend.podcast',compact('categories','seoData'));
       }
}
