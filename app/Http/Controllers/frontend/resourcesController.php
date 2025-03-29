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

        // $trendings = Category::where('category_type','resources')->latest()->take(5)->get();
        $trendings = Resource::with('category')->latest()->take(5)->get();

        $seoDetails = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();

    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoDetails->page_name ?? 'Resources page',
            'category_name'   => $seoDetails->category_name ?? 'General Resources Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'General Resources Subcategory',
            'template_name'   => $seoDetails->template_name ?? 'default-template',
            'seo_title'       => $seoDetails->seo_title ?? 'Default Resources Title',
            'seo_description' => $seoDetails->seo_description ?? 'Default Resources Description',
            'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,Resources keywords',
        ];

        if (!empty($seoDetails->google_analytics)) {

            $seoData['google_analytics'] = $seoDetails->google_analytics;
        }

        return view('frontend.resources', compact('categories', 'trendings','seoData'));
    }

}
