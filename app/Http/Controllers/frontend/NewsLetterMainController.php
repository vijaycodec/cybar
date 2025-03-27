<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsLetter;
use App\Models\Seo;
use Illuminate\Http\Request;

class NewsLetterMainController extends Controller
{
    public function index(){
        $category = null; 

        $sub_category = null;

        $page_name='Newsletter';

        $categories = Category::with('newsletters')->where('category_type',$page_name)->get();
        // dd($categories );

        $trendings = Category::where('category_type',$page_name)->latest()->take(5)->get();

        $seoDetails = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();
        // dd($seoData);
       // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoDetails->page_name ?? 'News Letter page',
            'category_name'   => $seoDetails->category_name ?? 'General News Letter Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'General News Letter Subcategory',
            'template_name'   => $seoDetails->template_name ?? 'default-template',
            'seo_title'       => $seoDetails->seo_title ?? 'Default News Letter Title',
            'seo_description' => $seoDetails->seo_description ?? 'Default News Letter Description',
            'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,News Letter keywords',
        ];

        // Include google_analytics only if it's not empty or null
if (!empty($seoDetails->google_analytics)) {

    $seoData['google_analytics'] = $seoDetails->google_analytics;
}

        return view('frontend.news-letter', compact('categories', 'trendings','seoData'));
    }
}

