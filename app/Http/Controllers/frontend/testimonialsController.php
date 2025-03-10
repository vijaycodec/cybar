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

        $seoDetails = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();
        // dd($seoData);
    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoDetails->page_name ?? 'Testimonial page',
            'category_name'   => $seoDetails->category_name ?? 'General Testimonial Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'General Testimonial Subcategory',
            'template_name'   => $seoDetails->template_name ?? 'default-template',
            'seo_title'       => $seoDetails->seo_title ?? 'Default Testimonial Title',
            'seo_description' => $seoDetails->seo_description ?? 'Default Testimonial Description',
            'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,Testimonial keywords',
        ];

        if (!empty($seoDetails->google_analytics)) {

            $seoData['google_analytics'] = $seoDetails->google_analytics;
        }

        

        return view('frontend.testimonials', compact('categories', 'trendings','seoData'));
    }
       
}
