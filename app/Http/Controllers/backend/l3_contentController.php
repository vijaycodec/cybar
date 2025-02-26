<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\L3ContentRepositoryInterface;

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

}
