<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Category;
use App\Models\Seo;

class careerController extends Controller
{
    public function index()
    {

        $category = null; 

        $sub_category = null;

        $page_name='Careers';

        $categories = Category::with('careers')->where('category_type','careers')->get();

        // $trendings = Category::where('category_type','careers')->latest()->take(5)->get();

        $trendings = Career::whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)') // OR MAX(id) for latest record
                  ->from('careers')
                  ->groupBy('category_id');
        })
            ->get();

            // dd($trendings);

            $seoDetails = Seo::where('page_name', $page_name)
            ->where('category_name', $category)
            ->where('sub_category_name', $sub_category)
            ->first();
            // dd($seoData);
        // Define default values if any field is NULL
            $seoData = [
                'page_name'       => $seoDetails->page_name ?? 'Careers page',
                'category_name'   => $seoDetails->category_name ?? 'General Careers Category',
                'sub_category_name' => $seoDetails->sub_category_name ?? 'General Careers Subcategory',
                'template_name'   => $seoDetails->template_name ?? 'default-template',
                'seo_title'       => $seoDetails->seo_title ?? 'Default Careers Title',
                'seo_description' => $seoDetails->seo_description ?? 'Default Careers Description',
                'seo_keywords'    => $seoDetails->seo_keywords ?? 'default,Careers keywords',
            ];

            if (!empty($seoDetails->google_analytics)) {

                $seoData['google_analytics'] = $seoDetails->google_analytics;
            }
   
        return view('frontend.careers', compact('categories', 'trendings','seoData'));
    }
}
