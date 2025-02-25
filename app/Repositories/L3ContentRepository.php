<?php
namespace App\Repositories;

use App\Models\L3ContentInfo;
use App\Models\PageDetail;
use App\Models\SignificanceCategory;
use App\Models\CourseFeatureCategory;
use App\Models\CyberwindCategory;
use App\Models\IndustryCategory;
use App\Models\FaqCategory;
use App\Models\BlogCategory;
use App\Models\L3Category;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\L3ContentRepositoryInterface;

class L3ContentRepository implements L3ContentRepositoryInterface
{
    public function getAllL3Contents()
    {
        return L3ContentInfo::all();
    }

    public function getCreateData()
    {
        return [
            'page_categories' => PageDetail::all(),
            'significanceCategories' => SignificanceCategory::all(),
            'courseFeatureCategories' => CourseFeatureCategory::all(),
            'cyberwindCategories' => CyberwindCategory::all(),
            'industryCategories' => IndustryCategory::all(),
            'faqCategories' => FaqCategory::all(),
            'blogCategories' => BlogCategory::all(),
            'programCategories' => ProgramCategory::all(),
        ];
    }

    public function getL3Categories(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'page_category_id' => 'required|integer',
            'sub_category_Id' => 'required|integer',
        ]);

        return L3Category::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();
    }
}
