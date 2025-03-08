<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CorporateTraining;
use App\Models\Seo;

class trainingController extends Controller
{
    public function get_training($category = null, $sub_category = null)
    {
        $page_id=2;
        $page_name = 'training';

        $trainings = CorporateTraining::with('course_category','subcategory')->get();
        //dd($services);
        $categories = CourseCategory::with('training')
        
        ->where('page_category', $page_id)
        ->get();

        $seoData = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();
// dd( $seoData );
    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoData->page_name ?? 'Training Page',
            'category_name'   => $seoData->category_name ?? 'General Training Category',
            'sub_category_name' => $seoData->sub_category_name ?? 'General Training Subcategory',
            'template_name'   => $seoData->template_name ?? 'default-template',
            'seo_title'       => $seoData->seo_title ?? 'Default Service Title',
            'seo_description' => $seoData->seo_description ?? 'Default Training Description',
            'seo_keywords'    => $seoData->seo_keywords ?? 'default,Training keywords',
            'google_analytics' => $seoData->google_analytics ?? 'Training google analytics',
        ];
        return view('frontend.training', compact('categories','trainings','page_id', 'seoData'));
    }
}
