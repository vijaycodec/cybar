<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Career;
use App\Models\Seo;
use Illuminate\Http\Request;

class careerViewController extends Controller
{
    public function view($category_slug, $slug)
    {
        $page_name = 'Careers';

        // Fetch career with its category while ensuring the category slug matches
        $careers = Career::with('category')
            ->where('slug', $slug)
            ->whereHas('category', function ($query) use ($category_slug) {
                $query->where('slug', $category_slug);
            })
            ->firstOrFail(); // Automatically returns 404 if not found

        // Preserve variable names as in Blade
        $category_slug = $careers->category->name ?? null;
        $slug = $careers->subcategory ?? null;

        // Fetch SEO details
        $seoDetails = Seo::where([
            ['page_name', $page_name],
            ['category_name', $category_slug],
            ['sub_category_name', $slug]
        ])->first();

        // Define SEO data with default values
        $seoData = [
            'page_name'         => $seoDetails->page_name ?? 'Careers',
            'category_name'     => $seoDetails->category_name ?? 'Careers Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'Careers Subcategory',
            'template_name'     => $seoDetails->template_name ?? 'default-template',
            'seo_title'         => $seoDetails->seo_title ?? 'Careers Title',
            'seo_description'   => $seoDetails->seo_description ?? 'Careers Description',
            'seo_keywords'      => $seoDetails->seo_keywords ?? 'Careers keywords',
            'google_analytics'  => $seoDetails->google_analytics ?? null,
        ];

        // Return the view with data
        return view('frontend.careers-view', compact('careers', 'slug', 'category_slug', 'seoData'));
    }
}
