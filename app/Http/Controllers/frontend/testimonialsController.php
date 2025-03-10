<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;

class testimonialsController extends Controller
{
    protected $testimonialRepository;

    public function __construct(TestimonialRepositoryInterface $testimonialRepository)
    {
        $this->testimonialRepository = $testimonialRepository;
    }
    public function index()
    {
        $category = null; 

        $sub_category = null;

        $page_name='Testimonial';

        $categories = $this->testimonialRepository->getAllCategories();
        $trendings = $this->testimonialRepository->getTrendingCategories();

        $seoData = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();
        // dd($seoData);
    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoData->page_name ?? 'Testimonial page',
            'category_name'   => $seoData->category_name ?? 'General Testimonial Category',
            'sub_category_name' => $seoData->sub_category_name ?? 'General Testimonial Subcategory',
            'template_name'   => $seoData->template_name ?? 'default-template',
            'seo_title'       => $seoData->seo_title ?? 'Default Testimonial Title',
            'seo_description' => $seoData->seo_description ?? 'Default Testimonial Description',
            'seo_keywords'    => $seoData->seo_keywords ?? 'default,Testimonial keywords',
            'google_analytics' => $seoData->google_analytics ?? 'Testimonial google analytics',
        ];

        return view('frontend.testimonials', compact('categories', 'trendings','seoData'));
    }
       
}
