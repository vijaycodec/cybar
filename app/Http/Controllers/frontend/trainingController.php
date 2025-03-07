<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CorporateTraining;

class trainingController extends Controller
{
    public function get_training()
    {
        $page_id=2;

        $trainings = CorporateTraining::with('course_category','subcategory')->get();
        //dd($services);
        $categories = CourseCategory::with('training')
        
        ->where('page_category', $page_id)
        ->get();
        return view('frontend.training', compact('categories','trainings','page_id'));
    }
}
