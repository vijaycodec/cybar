<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseFeatureTitle;
use App\Models\CyberwindTitle;
use App\Models\FaqSubCategory;
use App\Models\IndustryTitle;
use App\Models\L3ContentInfo;
use App\Models\L3OverviewSubDescription;
use App\Models\ProgramSubCategory;
use App\Models\SignificanceTitle;
use App\Models\TestimonialDetails;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\L3ContentRepositoryInterface;
use Illuminate\Support\Facades\Storage;


use function Laravel\Prompts\select;

class l3_contentController extends Controller
{

    protected $l3ContentRepository;

    public function __construct(L3ContentRepositoryInterface $l3ContentRepository)
    {
        $this->l3ContentRepository = $l3ContentRepository;
    }

    public function index()
    {
        $l3Contents = $this->l3ContentRepository->getAllL3Contents();
        return view('backend.l3-content.index', compact('l3Contents'));
    }

    public function create()
    {
        $data = $this->l3ContentRepository->getCreateData();

        $page_categories = $data['page_categories'];
        $significanceCategories = $data['significanceCategories'];
        $courseFeatureCategories = $data['courseFeatureCategories'];
        $cyberwindCategories = $data['cyberwindCategories'];
        $industryCategories = $data['industryCategories'];
        $faqCategories = $data['faqCategories'];
        $blogCategories = $data['blogCategories'];
        $programCategories = $data['programCategories'];

        return view('backend.l3-content.create', compact(
            'page_categories',
            'significanceCategories',
            'courseFeatureCategories',
            'cyberwindCategories',
            'industryCategories',
            'faqCategories',
            'blogCategories',
            'programCategories'
        ));
    }

    public function l3GetL3Categories(Request $request)
    {
        $l3categories = $this->l3ContentRepository->getL3Categories($request);
        return response()->json($l3categories);
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $rules = [
            'page_category_id' => 'required',
            'category_id'      => 'required',
            'sub_category_id'  => 'required',
            'l3_category_id'   => 'required',
        ];

        switch ($request->l3_category_type) {
            case 'overview':
                $rules['overview_title'] = 'required|String';
                $rules['overview_description'] = 'required|string';
                break;

            case 'significance':
                $rules['significance_description'] = 'required|string';
                $rules['significance_type'] = 'required|integer';
                break;

            case 'coursefeatures':
                $rules['course_feature_description'] = 'required|string';
                $rules['coursefeature_type'] = 'required|integer';
                break;

            case 'cyberwind':
                $rules['cyberwind_description'] = 'required|string';
                $rules['cyberwind_type'] = 'required|integer';
                break;

            case 'industries':
                $rules['industries_description'] = 'required|string';
                $rules['industries_type'] = 'required|integer';
                break;

            case 'faqs':
                $rules['faq_category_id'] = 'required|exists:faq_categories,id';
                break;

            case 'blog':
                $rules['blog_category_type'] = 'required|integer';
                $rules['blog_description'] = 'required|string';
                break;

            case 'incidents':
                $rules['incident_title'] = 'required|String';
                $rules['Video_link'] = 'required|string';
                $rules['incident_description'] = 'required|string';
                break;
            case 'cehkit':
                // $rules['main_title'] = 'required|String';
                $rules['kit_title'] = 'required|string';
                $rules['ceh_description'] = 'required|string';
                break;
            case 'program':
                $rules['program_category_id'] = 'required|exists:program_categories,id';
                break;
        }

        $request->validate($rules);

        try {
            $this->l3ContentRepository->store($request);
            return redirect()->route('l3-content.create')->with('success', 'Form data saved successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data = $this->l3ContentRepository->getl3contentById($id);
        return view('backend.l3-content.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // dd($request->program_subcategory);
        // $l3Content = L3ContentInfo::findOrFail($id);
        $rules = [
            'page_category_id' => 'required',
            'category_id'      => 'required',
            'sub_category_id'  => 'required',
            'l3_category_id'   => 'required',
        ];

        switch ($request->l3_category_type) {
            case 'overview':
                $rules['overview_title'] = 'required|string';
                $rules['overview_description'] = 'required|string';
                break;
            case 'significance':
                $rules['significance_description'] = 'required|string';
                $rules['significance_type'] = 'required|integer';
                break;
            case 'coursefeatures':
                $rules['course_feature_description'] = 'required|string';
                $rules['coursefeature_type'] = 'required|integer';
                break;
            case 'cyberwind':
                $rules['cyberwind_description'] = 'required|string';
                $rules['cyberwind_type'] = 'required|integer';
                break;
            case 'industries':
                $rules['industries_description'] = 'required|string';
                $rules['industries_type'] = 'required|integer';
                break;
            case 'faqs':
                $rules['faq_category_id'] = 'required|exists:faq_categories,id';
                break;
            case 'blog':
                $rules['blog_category_type'] = 'required|integer';
                $rules['blog_description'] = 'required|string';
                break;
            case 'incidents':
                $rules['incident_title'] = 'required|string';
                $rules['Video_link'] = 'required|string';
                $rules['incident_description'] = 'required|string';
                break;
            case 'cehkit':
                $rules['kit_title'] = 'required|string';
                $rules['ceh_description'] = 'required|string';
                break;
            case 'program':
                $rules['program_category_id'] = 'required|exists:program_categories,id';
                break;
        }

        try {
            $validated = $request->validate($rules); // Validate input
            $this->l3ContentRepository->updatel3content($id, $validated, $request);
            return redirect()->route('l3-content.list')->with('success', 'Content updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            // Find the L3Content record
            $l3ContentInfo = L3ContentInfo::find($id);
            // dd( $l3ContentInfo);

            if (!$l3ContentInfo) {
                return response()->json([
                    'error' => 'L3Content not found or already deleted.'
                ], 404);
            }

            // Delete associated images if they exist
            if ($l3ContentInfo->images) {
                $this->deleteImage($l3ContentInfo->images, 'significance');
            }

            // Delete associated records (example: program_subcategories, faqs, etc.)
            // ProgramSubCategory::where('l3_content_info_id', $id)->delete();
            // FaqSubCategory::where('l3_content_info_id', $id)->delete();
            // 

            // L3OverviewSubDescription::where('l3_content_info_id', $id)->delete();
            if (isset($l3ContentInfo) && !empty($l3ContentInfo->overview_title)) {
                L3OverviewSubDescription::where('l3_content_info_id', $id)->delete();
            } elseif (!empty($l3Content->program_category_id) && !empty($l3Content->program_category_id)) {
                ProgramSubCategory::where('l3_content_info_id', $id)->delete();
            } elseif (!empty($testimonialData->l3_content_info_id) && !empty($testimonialData->l3_content_info_id)) {
                TestimonialDetails::where('l3_content_info_id', $id)->delete();
            }

            // Finally, delete the main L3Content record
            $l3ContentInfo->delete();

            return response()->json([
                'message' => 'L3Content deleted successfully!',
                'redirect' => route('resources-category.list')
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteImage(string $fileName, string $folder): bool
    {
        // dd('ok');
        // Prevent directory traversal

        $filePath = "uploads/frontend/l3_template/{$folder}/{$fileName}";

        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->delete($filePath);
        }

        return false;
    }
}
