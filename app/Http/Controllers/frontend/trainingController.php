<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CorporateTraining;
use App\Repositories\Interfaces\ServicesRepositoryInterface;
use App\Models\Seo;
use Illuminate\Support\Facades\Cache;


class trainingController extends Controller
{
    protected $servicesRepository;

    public function __construct(ServicesRepositoryInterface $servicesRepository)
    {
        $this->servicesRepository = $servicesRepository;
    }

    public function get_training($category = null, $sub_category = null)
    {
        $page_id = 2;
        $page_name = 'training';

        // $services = CorporateTraining::with('course_category', 'subcategory')->get();
        $services= CorporateTraining::with(['course_category', 'subcategory'])
            ->get()
            ->sortBy(function ($item) {
                return $item->subcategory->ordering ?? 9999; // Null-safe fallback
            })
            ->values(); // reset keys


        // Get categories data filtered by page_category (no cache)
        $categories = CourseCategory::with('training')
            ->where('page_category', $page_id)
            ->orderBy('ordering')
            ->get();

        $seoDetails = Seo::where('page_name', $page_name)
            ->where('category_name', $category)
            ->where('sub_category_name', $sub_category)
            ->first();

        // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoDetails->page_name ?? 'Training Page',
            'category_name'   => $seoDetails->category_name ?? 'General Training Category',
            'sub_category_name' => $seoDetails->sub_category_name ?? 'General Training Subcategory',
            'template_name'   => $seoDetails->template_name ?? 'default-template',
            'seo_title'       => $seoDetails->seo_title ?? 'Default Service Title',
            'seo_description' => $seoDetails->seo_description ?? 'Default Training Description',
            'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,Training keywords',
        ];

        if (!empty($seoDetails->google_analytics)) {

            $seoData['google_analytics'] = $seoDetails->google_analytics;
        }

        return view('frontend.services', compact('categories', 'services', 'page_id', 'seoData'));
    }
}
