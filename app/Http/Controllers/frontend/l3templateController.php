<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\L3Category;
use App\Models\L3ContentInfo;
use Illuminate\Http\Request;

class l3templateController extends Controller
{
    public function getl3(Request $request)
    {

        $subcategoryId = $request->query('sub_category_id'); // Fetch query string parameter
        $pageId = $request->query('pageid');
        $categoryId = $request->query('category_id');

        // dd($sub_category_id, $pageid, $category_id);

        $l3Categories = L3Category::whereHas('contentInfos', function ($query) use ($pageId, $categoryId, $subcategoryId) {
            $query->where('page_category_id', $pageId)
                ->where('category_id', $categoryId)
                ->where('sub_category_id', $subcategoryId);
        })
            ->with([
                'contentInfos' => function ($query) {
                    $query->with('overviewSubDescriptions'); // Ensure it loads sub descriptions
                },
                'contentInfos.significanceCategory',
                'contentInfos.significance_title',
                'contentInfos.coursefeatureCategory',
                'contentInfos.coursefeature_title',
                'contentInfos.cyberwindCategory',
                'contentInfos.industryCategory',
                'contentInfos.blogCategory',
                'contentInfos.testimonials', // Fetch class style
                'contentInfos.faqCategory.faqSubCategory',
                'contentInfos.programCategory.programSubCategories',
            ]) 
            ->get();
          
            // dd($l3Categories->toArray());

            $contentInfos = $l3Categories->flatMap->contentInfos; // 

 return view('frontend.l3-template', compact('l3Categories','contentInfos'));
    }
}
