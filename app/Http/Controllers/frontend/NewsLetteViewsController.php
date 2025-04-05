<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsLetter;
use App\Models\Seo;

class NewsLetteViewsController extends Controller
{
    public function newLetterView($category_slug, $slug)
    {
        $page_name = 'Newsletter';

        // Fetch the newsletter with its category while ensuring the category slug matches
        $resource = NewsLetter::with('category')
            ->where('slug', $slug)
            ->whereHas('category', function ($query) use ($category_slug) {
                $query->where('slug', $category_slug);
            })
            ->firstOrFail(); // Automatically returns 404 if not found

        // Preserve the existing variable names used in the Blade file
        $category_slug = $resource->category->name ?? null;
        $slug = $resource->sub_category ?? null;

        // Fetch trending newsletters with their categories (avoiding lazy loading)
        $trendings = NewsLetter::with('category')
            ->latest()
            ->limit(5)
            ->get();

        // Fetch SEO details
        $seoDetails = Seo::where([
            ['page_name', $page_name],
            ['category_name', $category_slug],
            ['sub_category_name', $slug]
        ])->first();

        // Define SEO data with default values
        $seoData = [
            'page_name'         => $seoDetails->page_name ?? 'News Letter',
            'category_name'     => $seoDetails->category_name ?? 'News Letter Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'News Letter Subcategory',
            'template_name'     => $seoDetails->template_name ?? 'default-template',
            'seo_title'         => $seoDetails->seo_title ?? 'News Letter Title',
            'seo_description'   => $seoDetails->seo_description ?? 'News Letter Description',
            'seo_keywords'      => $seoDetails->seo_keywords ?? 'News Letter keywords',
            'google_analytics'  => $seoDetails->google_analytics ?? null,
        ];

        return view('frontend.newsletter-view', compact('resource', 'trendings', 'slug', 'category_slug', 'seoData'));
    }


    public function trendingNewsLetterView($id = null)
    {

        $resource = NewsLetter::with('category')->where('category_id', $id)->first();

        // Fetch all categories for trendings Resources
        $trendings = Category::where('category_type', 'newsletter')->latest()->take(5)->get();

        // Fetch the category
        $category = Category::findOrFail($id);

        if ($resource) {
            // Resource found, pass resource data to view
            return view('frontend.newsletter-view', ['resource' => $resource, 'trendings' => $trendings, 'category' => $category]);
        } else {
            return view('frontend.newsletter-view', ['trendings' => $trendings, 'category' => $category]);
        }
    }
}
