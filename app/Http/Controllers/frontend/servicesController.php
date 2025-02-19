<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\OurServices;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function getServices()
    {
             $page_id=1;

             $services = OurServices::with('course_category','subcategory')->get();
                          $groupedServices = $services->groupBy('category_id');


             $categories = CourseCategory::with('services')
             
             ->where('page_category', $page_id)
             ->get();

            return view('frontend.services', compact('categories','services','page_id','groupedServices'));
        }

    }

