<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use App\Models\Seo;

class resourcesViewController extends Controller
{
    public function view($category_slug, $slug)
    {
        $page_name = 'Resources';

        // Fetch the resource with its category while ensuring the category slug matches
        $resource = Resource::with('category')
            ->where('slug', $slug)
            ->whereHas('category', function ($query) use ($category_slug) {
                $query->where('slug', $category_slug);
            })
            ->firstOrFail(); // Automatically returns 404 if not found

        // Set category and subcategory with default values if missing
        $category_name = $resource->category->name ?? 'Unknown Category';
        $sub_category_name = $resource->sub_category ?? 'Unknown Subcategory';

        // Fetch trending resources with their categories (avoiding lazy loading)
        $trendings = Resource::with('category')
            ->latest()
            ->limit(5)
            ->get();

        // Fetch SEO details
        $seoDetails = Seo::where([
            ['page_name', $page_name],
            ['category_name', $category_name],
            ['sub_category_name', $sub_category_name]
        ])->first();

        // Define SEO data with default values
        $seoData = [
            'page_name'         => $seoDetails->page_name ?? 'Resources',
            'category_name'     => $seoDetails->category_name ?? 'Resources Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'Resources Subcategory',
            'template_name'     => $seoDetails->template_name ?? 'default-template',
            'seo_title'         => $seoDetails->seo_title ?? 'Resources Title',
            'seo_description'   => $seoDetails->seo_description ?? 'Resources Description',
            'seo_keywords'      => $seoDetails->seo_keywords ?? 'Resources keywords',
            'google_analytics'  => $seoDetails->google_analytics ?? null,
        ];

        return view('frontend.resources-view', [
            'resource' => $resource,
            'trendings' => $trendings,
            'category_slug' => $category_name,
            'slug' => $sub_category_name,
            'seoData' => $seoData
        ]);
    }

    public function trendingResourceView($id = null)
    {

        $resource = Resource::with('category')->where('category_id', $id)->first();

        // Fetch all categories for trendings Resources
        $trendings = Category::where('category_type', 'resources')->latest()->take(5)->get();

        // Fetch the category
        $category = Category::findOrFail($id);

        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.resources-view', ['resource' => $resource, 'trendings' => $trendings, 'category' => $category]);
        } else {
            return view('frontend.resources-view', ['trendings' => $trendings, 'category' => $category]);
        }
    }
}
