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
        $page_name = 'Blogs';
    
        // Fetch categories with related blogs in one query
        $categories = Category::with('blogs')
            ->where('category_type', 'blog')
            ->get();
    
        // Fetch trending blog categories (latest 5)
        $trendings = Category::where('category_type', 'blog')
            ->latest()
            ->limit(5) // `limit()` is the standard way to limit results
            ->get();
    
        // Fetch SEO details for the Blogs page
        $seoDetails = Seo::where([
            ['page_name', $page_name],
            ['category_name', null], 
            ['sub_category_name', null]
        ])->first();
    
        // Define default SEO values using the null coalescing operator (??)
        $seoData = [
            'page_name'         => $seoDetails->page_name ?? 'Blogs ',
            'category_name'     => $seoDetails->category_name ?? 'Blogs Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'Blogs Subcategory',
            'template_name'     => $seoDetails->template_name ?? 'default-template',
            'seo_title'         => $seoDetails->seo_title ?? 'Blogs Title',
            'seo_description'   => $seoDetails->seo_description ?? 'Blogs Description',
            'seo_keywords'      => $seoDetails->seo_keywords ?? 'Blogs keywords',
            'google_analytics'  => $seoDetails->google_analytics ?? null, // Only set if available
        ];
    
        return view('frontend.blog', compact('categories', 'trendings', 'seoData'));
    }
    
}
