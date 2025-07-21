<?php

namespace App\Repositories;

use App\Models\CourseCategory;
use App\Models\L3Category;
use App\Models\PageDetail;
use App\Models\SubCategory;
use App\Repositories\Interfaces\L3CategoryRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class L3CategoryRepository implements L3CategoryRepositoryInterface
{

    // public function getL3Categories($pageId, $categoryId, $subcategoryId)
    // {
    //     return L3Category::whereHas('contentInfos', function ($query) use ($pageId, $categoryId, $subcategoryId) {
    //         $query->where('page_category_id', $pageId)
    //             ->where('category_id', $categoryId)
    //             ->where('sub_category_id', $subcategoryId);
    //     })
    //     ->with([
    //         'contentInfos' => function ($query) {
    //             $query->with([
    //                 'overviewSubDescriptions',
    //                 'significanceCategory',
    //                 'significance_title',
    //                 'coursefeatureCategory',
    //                 'coursefeature_title',
    //                 'cyberwindCategory',
    //                 'industryCategory',
    //                 'blogCategory',
    //                 'testimonials',
    //                 'faqCategory.faqSubCategory',
    //                 'programCategory.programSubCategories',
    //             ]);
    //         }
    //     ])
    //     ->get();
    // }


        public function getL3Categories($pageId, $categoryId, $subcategoryId)
    {
        return L3Category::whereHas('contentInfos', function ($query) use ($pageId, $categoryId, $subcategoryId) {
            $query->where('page_category_id', $pageId)
                  ->where('category_id', $categoryId)
                  ->where('sub_category_id', $subcategoryId);
        })
        ->with([
            'contentInfos' => function ($query) use ($subcategoryId, $pageId) {
                $query->with([
                    'overviewSubDescriptions',
                    'overview2Descriptions', // <-- Add this line
                    'overview2SubDescriptions',
                    'industry2Title', 
                    'overview15s',
                    // 'significance2s',
                    // 'significance2Category',
                    'significanceCategory',
                    'significance_title',
                    'coursefeatureCategory',
                    'coursefeature_title',
                    'cyberwindCategory',
                    'industryCategory',
                    'blogCategory',
                    'blog_title',
                    'testimonials',
                    'faq2Category',
                    'faq2_title',
                    // 'faqCategory.faqSubCategory',
                    'programCategory' => function ($query) use ($subcategoryId, $pageId) {  
                        $query->with(['programSubCategories' => function ($subQuery) use ($subcategoryId, $pageId) {
                            $subQuery->where('page_id', $pageId)  // Match page_id
                                     ->where('sub_category_id', $subcategoryId); // Match subcategory_id
                        }]);
                    },

                    'faqCategory' => function ($query) use ($subcategoryId, $pageId) {
                        $query->with(['faqSubCategory' => function ($subQuery) use ($subcategoryId, $pageId) {
                            $subQuery->where('page_id', $pageId)
                                     ->where('sub_category_id', $subcategoryId);
                        }]);
                    },

                    'significance2Category' => function ($query) use ($subcategoryId, $pageId) {
                        $query->with(['Significance2SubCategory' => function ($subQuery) use ($subcategoryId, $pageId) {
                            $subQuery->where('page_id', $pageId)
                                     ->where('sub_category_id', $subcategoryId);
                        }]);
                    },
                ]);
            }
        ])
        ->get();
    }



    // public function getL3Categories($page_name, $category_name, $sub_category_name)
    // {
    //     // Retrieve page ID
    //     $page = PageDetail::where('page_name', $page_name)->first();
    //     if (!$page) {
    //         return collect(); // Return empty collection instead of JSON response
    //     }
    //     $pageId = $page->id;
    
    //     // Retrieve category ID
    //     $category = CourseCategory::where('page_category', $pageId)
    //         ->where('slug', $category_name)
    //         ->first();
    //     if (!$category) {
    //         return collect(); // Return empty collection instead of JSON response
    //     }
    //     $categoryId = $category->id;
    
    //     // Retrieve subcategory ID
    //     $subcategory = SubCategory::where('page_category_id', $pageId)
    //         ->where('category_id', $categoryId)
    //         ->where('slug', $sub_category_name)
    //         ->first();
    //     if (!$subcategory) {
    //         return collect(); // Return empty collection instead of JSON response
    //     }
    //     $subcategoryId = $subcategory->id;
    
    //     // Retrieve L3 Categories
    //     return L3Category::whereHas('contentInfos', function ($query) use ($pageId, $categoryId, $subcategoryId) {
    //         $query->where('page_category_id', $pageId)
    //             ->where('category_id', $categoryId)
    //             ->where('sub_category_id', $subcategoryId);
    //     })
    //     ->with([
    //         'contentInfos' => function ($query) use ($subcategoryId, $pageId) { // Pass variables properly
    //             $query->with([
    //                 'overviewSubDescriptions',
    //                 'significanceCategory',
    //                 'significance_title',
    //                 'coursefeatureCategory',
    //                 'coursefeature_title',
    //                 'cyberwindCategory',
    //                 'industryCategory',
    //                 'blogCategory',
    //                 'testimonials',
    //                 'programCategory' => function ($query) use ($subcategoryId, $pageId) {
    //                     $query->with(['programSubCategories' => function ($subQuery) use ($subcategoryId, $pageId) {
    //                         $subQuery->where('page_id', $pageId)  // Match page_id
    //                             ->where('sub_category_id', $subcategoryId); // Match subcategory_id
    //                     }]);
    //                 },
    //                 'faqCategory' => function ($query) use ($subcategoryId, $pageId) {
    //                     $query->with(['faqSubCategory' => function ($subQuery) use ($subcategoryId, $pageId) {
    //                         $subQuery->where('page_id', $pageId)
    //                             ->where('sub_category_id', $subcategoryId);
    //                     }]);
    //                 },
    //             ]);
    //         }
    //     ])
    //     ->get();
    // }
    
}
