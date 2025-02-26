<?php

namespace App\Repositories;

use App\Models\L3Category;
use App\Repositories\Interfaces\L3CategoryRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class L3CategoryRepository implements L3CategoryRepositoryInterface
{
    public function getL3Categories($pageId, $categoryId, $subcategoryId)
    {
        return L3Category::whereHas('contentInfos', function ($query) use ($pageId, $categoryId, $subcategoryId) {
            $query->where('page_category_id', $pageId)
                ->where('category_id', $categoryId)
                ->where('sub_category_id', $subcategoryId);
        })
        ->with([
            'contentInfos' => function ($query) {
                $query->with([
                    'overviewSubDescriptions',
                    'significanceCategory',
                    'significance_title',
                    'coursefeatureCategory',
                    'coursefeature_title',
                    'cyberwindCategory',
                    'industryCategory',
                    'blogCategory',
                    'testimonials',
                    'faqCategory.faqSubCategory',
                    'programCategory.programSubCategories',
                ]);
            }
        ])
        ->get();
    }
}
