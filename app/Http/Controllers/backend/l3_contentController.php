<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\CourseFeatureCategory;
use App\Models\CourseFeatureTitle;
use App\Models\CyberwindCategory;
use App\Models\CyberwindTitle;
use App\Models\FaqCategory;
use App\Models\FaqSubCategory;
use App\Models\Industry2Title;
use App\Models\IndustryCategory;
use App\Models\IndustryTitle;
use App\Models\L3ContentInfo;
use App\Models\L3Overview2_Description;
use App\Models\L3Overview2SubDescription;
use App\Models\L3OverviewSubDescription;
use App\Models\Overview15;
use App\Models\ProgramCategory;
use App\Models\ProgramSubCategory;
use App\Models\Significance2;
use App\Models\Significance2Category;
use App\Models\SignificanceCategory;
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
        $significance2Categories = $data['significance2Categories'];
        $courseFeatureCategories = $data['courseFeatureCategories'];
        $cyberwindCategories = $data['cyberwindCategories'];
        $industryCategories = $data['industryCategories'];
        $faqCategories = $data['faqCategories'];
        $blogCategories = $data['blogCategories'];
        $programCategories = $data['programCategories'];

        return view('backend.l3-content.create', compact(
            'page_categories',
            'significanceCategories',
            'significance2Categories',
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
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'page_category_id' => 'required|integer',
            'sub_category_Id' => 'required|integer',
        ]);

        // Pass validated data to repository
        $l3categories = $this->l3ContentRepository->getL3Categories($request);

        $significanceCategories = SignificanceCategory::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        $significance2Categories = Significance2Category::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        $courseFeatureCategories = CourseFeatureCategory::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        $programCategories = ProgramCategory::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        $cyberwindCategories = CyberwindCategory::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        $industryCategories = IndustryCategory::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        $industryCategories = IndustryCategory::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        $faqCategories = FaqCategory::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        $blogCategories = BlogCategory::where('page_category_id', $validated['page_category_id'])
            ->where('category_id', $validated['category_id'])
            ->where('sub_category_id', $validated['sub_category_Id'])
            ->orderBy('id', 'desc')
            ->get();

        // dd($programCategories);
        return response()->json([
            'l3_categories' => $l3categories,
            'significance_categories' => $significanceCategories,
            'significance2_categories' => $significance2Categories,
            'courseFeatureCategories' => $courseFeatureCategories,
            'programCategories' => $programCategories,
            'cyberwindCategories' => $cyberwindCategories,
            'industryCategories' => $industryCategories,
            'faqCategories' => $faqCategories,
            'blogCategories' => $blogCategories,
        ]);
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $rules = [
            'page_category_id' => 'required',
            'category_id'      => 'required',
            'sub_category_id'  => 'required',
            'l3_category_id'   => 'required',
            'l3_layout_type'   => 'nullable',

        ];

        switch ($request->l3_layout_type) {
            case 'overview':
                $rules['overview_title'] = 'required|String';

                break;

            case 'overview2':
                $rules['overview2_paragraph1'] = 'required|string';

                break;

            case 'overview15':
                $rules['overview15_title'] = 'required|String';
                $rules['overview15_descriptions'] = 'required|string';
                break;

            case 'overview16':
                $rules['overview16_short_descriptions'] = 'required|string';
                $rules['overview16_long_descriptions'] = 'required|string';
                break;

            case 'overview17':
                $rules['overview17_descriptions'] = 'required|string';
                break;

            case 'significance':
                $rules['significance_description'] = 'required|string';
                $rules['significance_type'] = 'required|integer';
                break;

            case 'significance2':
                $rules['significance2_short_description'] = 'required|string';
                $rules['significance2_long_description'] = 'required|string';
                $rules['significance2_type'] = 'required|integer';
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

            case 'industries2':
                $rules['industry2_description'] = 'required|string';
                $rules['industry2_testimonial_name'] = 'required|string';
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
                $rules['l3_layout_program']   = 'nullable';
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
            'l3_layout_type'   => 'nullable',
        ];

        switch ($request->l3_layout_type) {
            case 'overview':
                $rules['overview_title'] = 'required|string';
                $rules['overview_description'] = 'required|string';
                $rules['overview_description1'] = 'nullable|string';
                $rules['overview_description2'] = 'nullable|string';
                $rules['overview_description3'] = 'nullable|string';
                $rules['overview_description4'] = 'nullable|string';
                break;

            case 'overview2':
                $rules['overview2_paragraph1'] = 'required|string';
                $rules['overview2_paragraph2'] = 'nullable|string';
                $rules['overview2_paragraph3'] = 'nullable|string';
                $rules['overview2_paragraph4'] = 'nullable|string';
                $rules['overview2_paragraph5'] = 'nullable|string';
                break;

            case 'overview15':
                $rules['overview15_title'] = 'required|String';
                $rules['overview15_descriptions'] = 'required|string';
                break;

            case 'overview16':
                $rules['overview16_short_descriptions'] = 'required|string';
                $rules['overview16_long_descriptions'] = 'required|string';
                break;

            case 'overview17':
                $rules['overview17_descriptions'] = 'required|string';
                break;

            case 'overview2subdescription':
                $rules['overview3_title'] = 'required|String';
                break;

            case 'significance':
                $rules['significance_description'] = 'required|string';
                $rules['significance_type'] = 'required|integer';
                break;

            case 'significance2':
                $rules['significance2_short_description'] = 'required|string';
                $rules['significance2_long_description'] = 'required|string';
                $rules['significance2_type'] = 'required|integer';
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

            case 'industries2':
                $rules['industry2_description'] = 'required|string';
                $rules['industry2_testimonial_name'] = 'required|string';
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
                $rules['l3_layout_program']   = 'nullable';
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

            if (!empty($l3ContentInfo->images)) {
                $filename = basename($l3ContentInfo->images); // Extract only the filename

                $folders = [
                    'significance',
                    'coursefeature',
                    'cyberwind',
                    'industry',
                    'incidents',
                    'cehkit',
                    'program'
                ];

                foreach ($folders as $folder) {
                    $this->deleteImage($filename, $folder);
                }
            }

            if (isset($l3ContentInfo) && !empty($l3ContentInfo->overview_title)) {
                L3OverviewSubDescription::where('l3_content_info_id', $id)->delete();
            }

            if (!empty($l3ContentInfo->program_category_id)) {
                ProgramSubCategory::where('l3_content_info_id', $id)->delete();
            }

            $testimonialRecords = TestimonialDetails::where('l3_content_info_id', $id)->get();

            if ($testimonialRecords->isNotEmpty()) {
                foreach ($testimonialRecords as $testimonial) {
                    if (!empty($testimonial->images)) {
                        $this->deleteImage($testimonial->images, 'testimonials'); // Adjust folder name if needed
                    }
                    $testimonial->delete();
                }
            }

            $faqRecords = FaqSubCategory::where('l3_content_info_id', $id)->get();
            if ($faqRecords->isNotEmpty()) {
                FaqSubCategory::where('l3_content_info_id', $id)->delete();
            }

            $L3Overview2_Description = L3Overview2_Description::where('l3_content_info_id', $id)->get();
            if ($L3Overview2_Description->isNotEmpty()) {
                L3Overview2_Description::where('l3_content_info_id', $id)->delete();
            }

            $L3Overview2SubDescription = L3Overview2SubDescription::where('l3_content_info_id', $id)->get();
            if ($L3Overview2SubDescription->isNotEmpty()) {
                L3Overview2SubDescription::where('l3_content_info_id', $id)->delete();
            }

            $significance2Records = Significance2::where('l3_content_info_id', $id)->get();

            if ($significance2Records->isNotEmpty()) {
                foreach ($significance2Records as $significance2) {
                    if (!empty($significance2->image)) {
                        $this->deleteImage($significance2->image, 'significance2');
                    }
                    $significance2->delete(); // delete each individually after deleting image
                }
            }

            $Industry2Title = Industry2Title::where('l3_content_info_id', $id)->get();
            if ($Industry2Title->isNotEmpty()) {
                Industry2Title::where('l3_content_info_id', $id)->delete();
            }

            $overview15Records = Overview15::where('l3_content_info_id', $id)->get();

            if ($overview15Records->isNotEmpty()) {
                foreach ($overview15Records as $overview15) {
                    if (!empty($overview15->image)) {
                        $this->deleteImage($overview15->image, 'overview15'); // adjust folder name if different
                    }
                    $overview15->delete();
                }
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
