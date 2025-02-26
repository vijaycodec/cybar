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
use App\Models\L3OverviewSubDescription;
use App\Models\SignificanceTitle;
use App\Models\CourseFeatureTitle;
use App\Models\FaqSubCategory;
use App\Models\TestimonialDetails;
use App\Models\ProgramSubCategory;
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


    public function store(Request $request)
    {
        // dd($request->all());

               //  Store in `l3_content_infos`
               $l3ContentInfo = new L3ContentInfo();
               $l3ContentInfo->page_category_id = $request->page_category_id;
               $l3ContentInfo->category_id = $request->category_id;
               $l3ContentInfo->sub_category_id = $request->sub_category_id;
               $l3ContentInfo->l3_category_id = $request->l3_category_id;
       
               // Assign Section-Specific Data
               switch ($request->l3_category_type) {
       
                   case 'overview':
                       $l3ContentInfo->overview_title = $request->overview_title;
                       $l3ContentInfo->overview_description = $request->overview_description;
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
                       if ($request->main_title) {
                           $l3ContentInfo->main_title = $request->main_title;
                       }
                       $l3ContentInfo->kit_title = $request->kit_title;
                       $l3ContentInfo->ceh_description = $request->ceh_description;
                       $l3ContentInfo->images = $this->uploadImage($request, 'cehkit');
                       break;
                   case 'program':
                       if ($request->program_category_id) {
                           $l3ContentInfo->program_category_id  = $request->program_category_id;
                       }
                       if ($request->program_title) {
       
                           $l3ContentInfo->program_title = $request->program_title;
                       }
                       if ($request->program_subcategory) {
                           $programSubCategory = new ProgramSubCategory();
                           $programSubCategory->program_category_id  = $request->program_category_id;
                           $programSubCategory->name  = $request->program_subcategory;
                           $programSubCategory->description = $request->program_description;
                           if ($request->image) {
                               $programSubCategory->image = $this->uploadImage($request, 'program');
                           }
                           $programSubCategory->save();
                       } else {
                           $l3ContentInfo->program_description  = $request->program_description;
                           if ($request->image) {
                               $l3ContentInfo->images = $this->uploadImage($request, 'program');
                           }
                       }
       
                       break;
               }
       
               $l3ContentInfo->save();
       
               if ($request->l3_category_type == 'overview') {
       
                   if ($request->has('overview_sub_descriptions')) {
                       foreach ($request->overview_sub_descriptions as $subDesc) {
                           L3OverviewSubDescription::create([
                               'l3_content_info_id' => $l3ContentInfo->id,
                               'sub_description' => $subDesc,
                           ]);
                       }
                   }
               }
       
               // Optional: If you're using a separate table for significance titles
               if ($request->l3_category_type == 'significance') {
                   SignificanceTitle::updateOrCreate(
                       ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                       ['title' => $request->input('Significance_title', 'Default Title')] // Use default if null
                   );
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
       
           private function uploadImage(Request $request, $folder)
           {
               if ($request->hasFile('image')) {
                   $request->validate([
                       'image' => 'mimes:png,jpg,jpeg,webp|max:4096',
                   ]);
       
                   $image = $request->file('image');
       
                   // Validate MIME type 
                   $mimeType = mime_content_type($image->getPathname());
                   $allowedTypes = ['image/png', 'image/jpeg', 'image/webp'];
       
                   if (!in_array($mimeType, $allowedTypes, true)) {
                       throw new \Exception('Invalid file type detected');
                   }
       
                   // Prevent directory traversal 
                   $folder = basename($folder);
       
                   // Validate file name 
                   $originalName = preg_replace('/[^a-zA-Z0-9._-]/', '', $image->getClientOriginalName());
                   if (preg_match('/\.(php|exe|sh|bat|phtml|jsp|asp|aspx|cgi|pl)$/i', $originalName)) {
                       throw new \Exception('Disallowed file type');
                   }
       
                   // Limit file name length 
                   if (strlen($originalName) > 255) {
                       throw new \Exception('File name too long');
                   }
                   // Enforce safe naming convention 
                   $originalName = str_replace(" ", "_", $originalName);
                   // Generate unique filename 
                   $file_name = md5(uniqid()) . '.' . $image->getClientOriginalExtension();
                   // Store file securely 
                   $path = $image->storeAs("uploads/frontend/l3_template/{$folder}", $file_name);
                   return $file_name;
               }
               return null;
    }
}
