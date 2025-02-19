<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\ClassStyle;
use App\Models\CourseFeatureCategory;
use App\Models\CourseFeatureTitle;
use App\Models\CyberwindCategory;
use App\Models\FaqCategory;
use App\Models\FaqSubCategory;
use App\Models\IndustryCategory;
use App\Models\L3Category;
use App\Models\L3ContentInfo;
use App\Models\L3OverviewSubDescription;
use App\Models\PageDetail;
use App\Models\ProgramCategory;
use App\Models\ProgramSubCategory;
use App\Models\SignificanceCategory;
use App\Models\SignificanceTitle;
use App\Models\TestimonialDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class l3_contentController extends Controller
{
    public function index()
    {
        $l3Contents = L3ContentInfo::all();
        // $l3Contents = L3Category::with(['pageCategory', 'category', 'subCategory'])
        // ->orderBy('id', 'ASC')
        // ->paginate(3);
        return view('backend.l3-content.index', compact('l3Contents'));
    }

    public function create()
    {
        $page_categories = PageDetail::all();
        $significanceCategories = SignificanceCategory::all();
        $courseFeatureCategories = CourseFeatureCategory::all();
        $cyberwindCategories = CyberwindCategory::all();
        $industryCategories = IndustryCategory::all();
        $faqCategories = FaqCategory::all();
        $blogCategories = BlogCategory::all();
        $programCategories = ProgramCategory::all();

        return view('backend.l3-content.create', compact('page_categories', 'significanceCategories', 
                                            'courseFeatureCategories', 
                                            'cyberwindCategories', 
                                            'industryCategories', 
                                            'faqCategories', 
                                            'blogCategories',
                                        'programCategories'));
    }

    public function l3GetL3Categories(Request $request)
    {

        $categoryId = $request->category_id;
        $pageCategoryId = $request->page_category_id;
        $subCategoryId = $request->sub_category_Id;

        $l3categories = L3Category::whereIn('id', function ($query) use ($pageCategoryId, $categoryId, $subCategoryId) {
            $query->selectRaw('MIN(id)') // Selects the first ID per unique l3_category
                ->from('l3_categories')
                ->where('page_category_id', $pageCategoryId)
                ->where('category_id', $categoryId)
                ->where('sub_category_id', $subCategoryId)
                ->groupBy('l3_category'); // Groups by l3_category to remove duplicates
        })
            ->orderBy('id', 'desc') // Ensures latest records appear first
            ->get();
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

        //  Store in `l3_content_infos`
        $l3ContentInfo = new L3ContentInfo();
        $l3ContentInfo->page_category_id = $request->page_category_id;
        $l3ContentInfo->category_id = $request->category_id;
        $l3ContentInfo->sub_category_id = $request->sub_category_id;
        $l3ContentInfo->l3_category_id = $request->l3_category_id;

        // Assign Section-Specific Data
        switch ($request->l3_category_type) {

            case 'overview':
                // Check if an overview already exists in l3_content_infos
                $existingOverview = L3ContentInfo::whereNotNull('overview_title')
                                    ->orWhereNotNull('overview_description')
                                    ->first();
           
                // If no existing overview is found, create a new one
                if (!$existingOverview) {
                   
                    $l3ContentInfo = L3ContentInfo::create([
                        'overview_title' => $request->overview_title ?? null,
                        'overview_description' => $request->overview_description ?? null
                    ]);
                } else {
                    // Use the existing overview
                    $l3ContentInfo = $existingOverview;
            
                    // Update overview details if new values are provided
                    if ($request->overview_title) {
                        $l3ContentInfo->overview_title = $request->overview_title;
                    }
                    if ($request->overview_description) {
                        $l3ContentInfo->overview_description = $request->overview_description;
                    }
                    $l3ContentInfo->save();
                }
            
                // Store sub_descriptions if available
                if ($request->has('overview_sub_descriptions')) {
                   
                    foreach ($request->overview_sub_descriptions as $subDesc) {
                        L3OverviewSubDescription::create([
                            'l3_content_info_id' => $l3ContentInfo->id,
                            'sub_description' => $subDesc
                        ]);
                    }
                }
            
                break;
            

            case 'significance':
                $l3ContentInfo->significance_category_type = $request->significance_type;
                $l3ContentInfo->significance_description = $request->significance_description;
                $l3ContentInfo->significance_short_description = $request->significance_short_description;
                $l3ContentInfo->images = $this->uploadImage($request, 'significance');
                break;

            case 'coursefeatures':
                $l3ContentInfo->course_feature_type = $request->coursefeature_type;
                $l3ContentInfo->course_feature_description = $request->course_feature_description;
                $l3ContentInfo->course_feature_short_description = $request->course_feature_short_description;
                $l3ContentInfo->images = $this->uploadImage($request, 'coursefeature');
                break;

            case 'cyberwind':
                $l3ContentInfo->cyberwind_type = $request->cyberwind_type;
                $l3ContentInfo->cyberwind_description = $request->cyberwind_description;
                $l3ContentInfo->cyberwind_short_description = $request->cyberwind_short_description;
                $l3ContentInfo->images = $this->uploadImage($request, 'cyberwind');
                break;

            case 'industries':
                $l3ContentInfo->industry_type = $request->industries_type;
                $l3ContentInfo->industry_description = $request->industries_description;
                $l3ContentInfo->images = $this->uploadImage($request, 'industry');
                break;

            case 'faqs':
                $l3ContentInfo->faq_category_id = $request->faq_category_id;
                break;

            case 'blog':
                $l3ContentInfo->blog_category_type = $request->blog_category_type;
                $l3ContentInfo->blog_description = $request->blog_description;
                $l3ContentInfo->style_class_id = $request->style_class;
                break;
            case 'incidents':
                $l3ContentInfo->incident_title = $request->incident_title;
                $l3ContentInfo->Video_link = $request->Video_link;
                $l3ContentInfo->incident_description = $request->incident_description;
                $l3ContentInfo->images = $this->uploadImage($request, 'incidents');
                break;    
            case 'cehkit':
                if($request->main_title){
                    $l3ContentInfo->main_title = $request->main_title;
                }
                $l3ContentInfo->kit_title = $request->kit_title;
                $l3ContentInfo->ceh_description = $request->ceh_description;
                $l3ContentInfo->images = $this->uploadImage($request, 'cehkit');
                break;  
            case 'program':
                  if($request->program_category_id){
                    $l3ContentInfo->program_category_id  = $request->program_category_id;
                }
                if($request->program_title ){
                  
                    $l3ContentInfo->program_title = $request->program_title;
                }
                if($request->program_subcategory){
                    $programSubCategory = new ProgramSubCategory();
                    $programSubCategory->program_category_id  = $request->program_category_id;  
                    $programSubCategory->name  = $request->program_subcategory;  
                    $programSubCategory->description = $request->program_description;
                    if($request->image)  {
                        $programSubCategory->image = $this->uploadImage($request, 'program');  
                    }
                    $programSubCategory->save();
                }else{
                    $l3ContentInfo->program_description  = $request->program_description;
                    if($request->image){
                        $l3ContentInfo->images = $this->uploadImage($request, 'program'); 
                    }
                }
                
                break;
    
        }

        $l3ContentInfo->save();

        // Optional: If you're using a separate table for significance titles
        if ($request->l3_category_type == 'significance') {
            // dd('ok');
            // Fetch the first record from the SignificanceTitle table
            $significance = SignificanceTitle::first();

            if ($significance) {
                // If a record exists, update it
                $significance->l3_content_info_id = $l3ContentInfo->id; // Update the linked content info
                $significance->title = $request->Significance_title; // Update the title
                $significance->save(); // Save changes
            } else {
                // If no record exists, create a new one
                $significance = new SignificanceTitle();
                $significance->l3_content_info_id = $l3ContentInfo->id; // Set the linked content info
                $significance->title = $request->Significance_title; // Set the title
                $significance->save(); // Save new record
            }
        }

        // Optional: If you're using a separate table for coursefeature titles 
        if ($request->l3_category_type == 'coursefeatures') {
            // Fetch the first record from the CourseFeatureTitle table
            $coursefeature = CourseFeatureTitle::first();

            if ($coursefeature) {
                // If a record exists, update it
                $coursefeature->l3_content_info_id = $l3ContentInfo->id; // Update linked content info
                $coursefeature->title = $request->coursefeature_title; // Update title
                $coursefeature->save(); // Save changes
            } else {
                // If no record exists, create a new one
                $coursefeature = new CourseFeatureTitle();
                $coursefeature->l3_content_info_id = $l3ContentInfo->id; // Set linked content info
                $coursefeature->title = $request->coursefeature_title; // Set title
                $coursefeature->save(); // Save new record
            }
        }

        if ($request->l3_category_type == 'faqs') {
            $faqSubCategory = new FaqSubCategory();
            $faqSubCategory->faq_category_id  = $request->faq_category_id;  // Linking the significance with the l3_content_info
            $faqSubCategory->name  = $request->subcategory;  // Linking the significance with the l3_content_info
            $faqSubCategory->description = $request->subcategory_description;  // Store significance title
            $faqSubCategory->save();
        }

        //data stored in testimonials table
        if ($request->l3_category_type == 'testimonials') {
            $testimonials = new TestimonialDetails();
            $testimonials->l3_content_info_id = $l3ContentInfo->id;
            $testimonials->testimonial_name  = $request->testimonials_name;  
            $testimonials->designation  = $request->designation;  
            $testimonials->testimonial_description = $request->testimonials_description;  
            $testimonials->testimonial_short_description = $request->testimonials_short_description;  
            $testimonials->testimonial_title = $request->testimonials_title;  
            $testimonials->images = $this->uploadImage($request, 'testimonials');
            $testimonials->save();
        }

        return redirect()->route('l3-content.create')->with('success', 'Form data saved successfully!');
    }

    /**
     *  Helper Function to Handle Image Upload
     */
    private function uploadImage($request, $folder)
    {
        if ($request->hasFile('image')) {
            $request->validate(['image' => 'mimes:png,jpg,jpeg,webp|max:4096']);

            $image = $request->file('image');
            $file_name = Carbon::now()->timestamp . '.' . $image->extension();
            $image->move(public_path("uploads/frontend/l3_template/{$folder}"), $file_name);
            return $file_name;
        }
        return null;
    }
}
