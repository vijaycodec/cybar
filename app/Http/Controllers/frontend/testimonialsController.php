<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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
        $categories = $this->testimonialRepository->getAllCategories();
        $trendings = $this->testimonialRepository->getTrendingCategories();

        return view('frontend.testimonials', compact('categories', 'trendings'));
    }
       
}
