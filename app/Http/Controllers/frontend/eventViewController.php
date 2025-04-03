<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuEvent;
use App\Models\Seo;
use Illuminate\Http\Request;

class eventViewController extends Controller
{
    public function view($slug)
    {

        $page_name = 'events';
        // Fetch resource with its category
        $category = Category::where('slug', $slug)->firstOrFail(); // Fetch category using slug
        $events = MenuEvent::where('category_id', $category->id)->get(); // Fetch events related to this category
        $slug = $category->slug;

        $categories = Category::where('slug', $slug)->firstOrFail(); // Fetch category using slug
        $seoDetails = Seo::where([
            ['page_name', $page_name],
            ['category_name', $category->name]
        ])->first();


        // Define SEO data with default values
        $seoData = [
            'page_name'         => $seoDetails->page_name ?? 'careers',
            'category_name'     => $seoDetails->category_name ?? 'careers Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'careers Subcategory',
            'template_name'     => $seoDetails->template_name ?? 'default-template',
            'seo_title'         => $seoDetails->seo_title ?? 'careers Title',
            'seo_description'   => $seoDetails->seo_description ?? 'careers Description',
            'seo_keywords'      => $seoDetails->seo_keywords ?? 'careers keywords',
            'google_analytics'  => $seoDetails->google_analytics ?? null,
        ];
        // Check if resource exists or not
        if ($events) {
            // Resource found, pass resource data to view
            return view('frontend.events-view', ['events' => $events, 'categories' => $categories, 'slug' => $slug, 'seoData' => $seoData]);
        }
    }
}
