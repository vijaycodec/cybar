<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuBlog;
use App\Models\Seo;

class blogViewController extends Controller
{
    public function view($category_slug, $slug)
    {
        $page_name = 'Blogs';
        // Fetch the blog post with its category and subcategory in one query
        $resource = MenuBlog::with(['category']) // Ensure subCategory is a valid relation
            ->where('slug', $slug)
            ->whereHas('category', fn($query) => $query->where('slug', $category_slug))
            ->firstOrFail(); // Automatically returns 404 if not found

        // Fetch trending blogs efficiently
        $trendings = MenuBlog::with('category')->latest()->limit(5)->get();

        $seoDetails = Seo::where([
            ['page_name', $page_name],
            ['category_name', $resource->category->name], 
            ['sub_category_name', $resource->sub_category]
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
    
        return view('frontend.blog-view', [
            'resource'       => $resource,
            'trendings'      => $trendings,
            'category_slug'  => $resource->category->name ?? null,
            'slug'           => $resource->sub_category ?? null ,
            'seoData'       => $seoData,
        ]);
    }
    
    public function trendingResourceView($id = null)
    {

        $resource = MenuBlog::with('category')->where('category_id', $id)->first();

        // Fetch all categories for trendings Resources
        $trendings = Category::where('category_type', 'blog')->latest()->take(5)->get();

        // Fetch the category
        $category = Category::findOrFail($id);

        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.blog-view', ['resource' => $resource, 'trendings' => $trendings, 'category' => $category]);
        } else {
            return view('frontend.blog-view', ['trendings' => $trendings, 'category' => $category]);
        }
    }
}
