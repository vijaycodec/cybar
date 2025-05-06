<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\PageDetail;
use App\Models\Seo;
use App\Models\SubCategory;
use App\Repositories\Interfaces\L3CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;


class l3templateController extends Controller
{

    protected $l3CategoryRepository;

    public function __construct(L3CategoryRepositoryInterface $l3CategoryRepository)
    {
        $this->l3CategoryRepository = $l3CategoryRepository;
    }

    // public function getl3 ($category_name=null, $sub_category_name=null)
    // {

    //         $page_name = 'services';
    //         $l3Categories = $this->l3CategoryRepository->getL3Categories($page_name, $category_name, $sub_category_name);

    //         if ($l3Categories->isEmpty()) {
    //             abort(404, 'No L3 categories found.');
    //         }
    //         $contentInfos = $l3Categories->flatMap->contentInfos;

    //         return view('frontend.l3-template', compact('l3Categories', 'contentInfos'));

    // }

    public function getL3(Request $request)
    {
        try {
            $pageId = $request->query('pg');
            $categoryId = $request->query('ct');
            $subcategoryId = $request->query('sb');

            // Retrieve Page Name
            $page = PageDetail::where('id', $pageId)->first();
            $pageName = $page->page_name;

            // Retrieve category Name
            $category = CourseCategory::where('page_category', $pageId)->where('id', $categoryId)->first();
            $categoryName = $category->name;

            // Retrieve subcategory ID
            $subcategory = SubCategory::where('page_category_id', $pageId)
                ->where('category_id', $categoryId)
                ->where('id', $subcategoryId)
                ->first();
            $subcategoryname = $subcategory->sub_category;

            $l3Categories = $this->l3CategoryRepository->getL3Categories($pageId, $categoryId, $subcategoryId);
            if ($l3Categories->isEmpty()) {
                abort(404, 'No L3 categories found.');
            }
            $contentInfos = $l3Categories->flatMap->contentInfos;

            $seoDetails = Seo::where([
                ['page_name', $pageName],
                ['category_name', $categoryName],
                ['sub_category_name', $subcategoryname]
            ])->first();

            // Define SEO data with default values
            $seoData = [
                'page_name'         => $seoDetails->page_name ?? 'L3',
                'category_name'     => $seoDetails->category_name ?? 'L3 Category',
                'sub_category_name' => $seoDetails->sub_category_name ?? 'L3 Subcategory',
                'template_name'     => $seoDetails->template_name ?? 'default-template',
                'seo_title'         => $seoDetails->seo_title ?? 'L3 Title',
                'seo_description'   => $seoDetails->seo_description ?? 'L3 Description',
                'seo_keywords'      => $seoDetails->seo_keywords ?? 'L3 keywords',
                'google_analytics'  => $seoDetails->google_analytics ?? null,
            ];


            return view('frontend.l3-template', compact('l3Categories', 'contentInfos', 'pageName', 'categoryName', 'subcategoryname', 'seoData'));
        } catch (Exception $e) {
            Log::error('Error in getL3: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
