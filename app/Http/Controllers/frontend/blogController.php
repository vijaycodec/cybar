<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\MenuBlogCategory;
use App\Models\Seo;

class blogController extends Controller
{
    public function index()
    {
        $category = null; 

        $sub_category = null;

        $page_name='Blogs';

        $categories = Category::with('blogs')->where('category_type','blog')->get();

        $trendings = Category::where('category_type','blog')->latest()->take(5)->get();

        $seoDetails = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();
        // dd($seoData);
    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoDetails->page_name ?? 'Blogs page',
            'category_name'   => $seoDetails->category_name ?? 'General Blogs Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'General Blogs Subcategory',
            'template_name'   => $seoDetails->template_name ?? 'default-template',
            'seo_title'       => $seoDetails->seo_title ?? 'Default Blogs Title',
            'seo_description' => $seoDetails->seo_description ?? 'Default Blogs Description',
            'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,Blogs keywords',
        ];

        // Include google_analytics only if it's not empty or null
if (!empty($seoDetails->google_analytics)) {

    $seoData['google_analytics'] = $seoDetails->google_analytics;
}

        return view('frontend.blog', compact('categories', 'trendings','seoData'));
    }
}
