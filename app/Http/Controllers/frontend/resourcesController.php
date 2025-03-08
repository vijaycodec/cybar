<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use App\Models\Seo;
use Illuminate\Http\Request;

class resourcesController extends Controller
{
    public function index()
    {
        $category = null; 

        $sub_category = null;

        $page_name='Resources';

        $categories = Category::with('resources')->where('category_type','resources')->get();

        $trendings = Category::where('category_type','resources')->latest()->take(5)->get();

        $seoData = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();

    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoData->page_name ?? 'Resources page',
            'category_name'   => $seoData->category_name ?? 'General Resources Category',
            'sub_category_name' => $seoData->sub_category_name ?? 'General Resources Subcategory',
            'template_name'   => $seoData->template_name ?? 'default-template',
            'seo_title'       => $seoData->seo_title ?? 'Default Resources Title',
            'seo_description' => $seoData->seo_description ?? 'Default Resources Description',
            'seo_keywords'    => $seoData->seo_keywords ?? 'default,Resources keywords',
            'google_analytics' => $seoData->google_analytics ?? 'Resources google analytics',
        ];

        return view('frontend.resources', compact('categories', 'trendings','seoData'));
    }

}
