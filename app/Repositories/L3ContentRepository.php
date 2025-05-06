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
use App\Models\BlogTitle;
use App\Models\CourseCategory;
use App\Models\L3Category;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;
use App\Models\L3OverviewSubDescription;
use App\Models\SignificanceTitle;
use App\Models\CourseFeatureTitle;
use App\Models\CyberwindTitle;
use App\Models\FaqSubCategory;
use App\Models\Industry2Title;
use App\Models\IndustryTitle;
use App\Models\L3Overview2_Description;
use App\Models\L3Overview2SubDescription;
use App\Models\Overview15;
use App\Models\TestimonialDetails;
use App\Models\ProgramSubCategory;
use App\Models\Significance2;
use App\Models\Significance2Category;
use App\Models\SubCategory;
use App\Repositories\Interfaces\L3ContentRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver; // Use GD
use Intervention\Image\Encoders\WebpEncoder;

class L3ContentRepository implements L3ContentRepositoryInterface
{

    // protected $l3ContentRepository;

    // public function __construct(L3ContentRepository $l3ContentRepository)
    // {
    //     $this->l3ContentRepository = $l3ContentRepository;
    // }

    public function getAllL3Contents()
    {
        return L3ContentInfo::with('pageCategory', 'category', 'subCategory')->get();
    }

    public function getCreateData()
    {
        // dd(SignificanceCategory::all());
        return [
            'page_categories' => PageDetail::all(),
            'significanceCategories' => SignificanceCategory::all(),
            'significance2Categories' => Significance2Category::all(),
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
        $l3ContentInfo->l3_layout_type = $request->l3_layout_type;

        // Assign Section-Specific Data
        switch ($request->l3_layout_type) {

            case 'overview':
                $l3ContentInfo->overview_title = $request->overview_title;
                $l3ContentInfo->overview_description = $request->overview_description;
                $l3ContentInfo->overview_description1 = $request->overview_description1;
                $l3ContentInfo->overview_description2 = $request->overview_description2;
                $l3ContentInfo->overview_description3 = $request->overview_description3;
                $l3ContentInfo->overview_description4 = $request->overview_description4;
                break;

            case 'overview16':
                if ($request->has('overview16_title')) {
                    $l3ContentInfo->overview16_title = $request->overview16_title;
                }
                // Directly assign short and long descriptions
                $l3ContentInfo->overview16_short_descriptions = $request->overview16_short_descriptions;
                $l3ContentInfo->overview16_long_descriptions = $request->overview16_long_descriptions;

                // If image is uploaded, use uploadImage method to save it and assign path
                if ($request->image) {
                    $l3ContentInfo->images = $this->uploadImage($request, 'overview16');
                }

                break;

            case 'overview17':
                $l3ContentInfo->overview17_descriptions = $request->overview17_descriptions;
                break;

            case 'overview2subdescription':
                $l3ContentInfo->overview3_title = $request->overview3_title;
                break;

            case 'significance':
                $l3ContentInfo->significance_category_type = $request->significance_type;
                $l3ContentInfo->significance_description = $request->significance_description;
                $l3ContentInfo->significance_short_description = $request->significance_short_description;
                $l3ContentInfo->images = $this->uploadImage($request, 'significance');
                break;

            case 'significance2':
                $l3ContentInfo->significance2_category_type = $request->significance2_type;
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

            case 'industries2':
                $l3ContentInfo->industry2_description = $request->industry2_description;
                $l3ContentInfo->industry2_testimonial_name = $request->industry2_testimonial_name;

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

                $shouldSave = false; // Track if saving is needed

                // Assign primary data to l3ContentInfo
                if ($request->program_category_id) {
                    $l3ContentInfo->program_category_id = $request->program_category_id;
                    $l3ContentInfo->l3_layout_program = $request->l3_layout_program;
                    $shouldSave = true;
                }
                if ($request->program_title) {
                    $l3ContentInfo->program_title = $request->program_title;
                    $shouldSave = true;
                }
                if ($request->program_sub_title) {
                    $l3ContentInfo->program_sub_title = $request->program_sub_title;
                    $shouldSave = true;
                }

                // STEP 1: Save data first in `l3ContentInfo`
                if ($shouldSave) {
                    $l3ContentInfo->save();  // Generates ID and saves data
                }

                // STEP 2: Check if `program_subcategory` exists
                if ($request->program_subcategory) {
                    // If `program_subcategory` exists, create new entry in ProgramSubCategory
                    $programSubCategory = new ProgramSubCategory();
                    $programSubCategory->l3_content_info_id = $l3ContentInfo->id;
                    $programSubCategory->program_category_id = $request->program_category_id;
                    $programSubCategory->sub_category_id = $request->sub_category_id;
                    $programSubCategory->page_id = $request->page_category_id;
                    $programSubCategory->name = $request->program_subcategory;
                    $programSubCategory->description = $request->program_description;

                    if ($request->image) {
                        $programSubCategory->image = $this->uploadImage($request, 'program');
                    }

                    $programSubCategory->save();  // Save data in `ProgramSubCategory`
                } else {
                    // If `program_subcategory` does NOT exist, modify `l3ContentInfo`
                    if ($request->program_description) {
                        $l3ContentInfo->program_description = $request->program_description;
                    }
                    if ($request->image) {
                        $l3ContentInfo->images = $this->uploadImage($request, 'program');
                    }
                    if ($request->hasFile('brochure_pdf')) {
                        // Validate PDF
                        $l3ContentInfo->brochure_pdf = $this->uploadPDF($request, 'program');
                    }


                    $l3ContentInfo->save(); //  Save modifications in `l3ContentInfo`
                }

                break;
        }

        $l3ContentInfo->save();

        if ($request->l3_layout_type == 'overview') {  

            if ($request->has('overview_sub_descriptions')) {
               
                foreach ($request->overview_sub_descriptions as $index => $subDesc) {
                    // dd($index === 0 );
                    L3OverviewSubDescription::create([
                        'l3_content_info_id' => $l3ContentInfo->id,
                        'overview_subdescription_title' => $index === 0 ? $request->overview_subdescription_title : null,
                        'sub_description' => $subDesc,
                    ]);
                }
            }
        }

        if ($request->l3_layout_type == 'overview2') {

            // Ensure required paragraph1 is present before proceeding
            if ($request->filled('overview2_paragraph1')) {

                // Save overview16_title to the related l3ContentInfo, if provided
                if ($request->filled('overview2_title')) {
                    $l3ContentInfo->overview16_title = $request->overview16_title;
                    $l3ContentInfo->save();
                }

                // Prepare the data, providing nulls for optional fields to avoid missing columns
                $data = [
                    'overview2_title'       => $request->input('overview2_title'), // can be nullable if DB allows
                    'overview2_paragraph1'  => $request->input('overview2_paragraph1'),
                    'overview2_paragraph2'  => $request->input('overview2_paragraph2') ?? null,
                    'overview2_paragraph3'  => $request->input('overview2_paragraph3') ?? null,
                    'overview2_paragraph4'  => $request->input('overview2_paragraph4') ?? null,
                    'overview2_paragraph5'  => $request->input('overview2_paragraph5') ?? null,
                ];

                L3Overview2_Description::updateOrCreate(
                    ['l3_content_info_id' => $l3ContentInfo->id],
                    $data
                );
            }
        }


        if ($request->l3_layout_type == 'overview15') {

            if ($request->has('overview15_descriptions')) {
                $data = [
                    'overview15_title' => $request->input('overview15_title'),
                    'overview15_descriptions' => $request->input('overview15_descriptions'),
                ];

                if ($request->hasFile('image')) {
                    $data['image'] = $this->uploadImage($request, 'overview15'); // Use input name
                }

                Overview15::updateOrCreate(
                    ['l3_content_info_id' => $l3ContentInfo->id],
                    $data
                );
            }
        }

        if ($request->l3_layout_type == 'overview2subdescription') {

            if ($request->has('overview2_sub_description')) {

                foreach ($request->overview2_sub_description as $subDesc) {
                    L3Overview2SubDescription::create([
                        'l3_content_info_id' => $l3ContentInfo->id,
                        'overview2_sub_description' => $subDesc,
                    ]);
                }
            }
        }

        // Optional: If you're using a separate table for significance titles
        // if ($request->l3_layout_type == 'significance2') {
        //                // Prepare data for update/create
        //     $data = [
        //         'page_id' => $request->input('page_category_id'),
        //         'sub_category_id' => $request->input('sub_category_id'),
        //         'name' => $request->input('Significance2_subcategory_name'),
        //         'significance2_short_description' => $request->input('significance2_short_description'),
        //         'significance2_long_description' => $request->input('significance2_long_description'),
        //         'significance2_title' => $request->input('significance2_title'),
        //         'significance2_category_id' => $request->significance2_type,
        //     ];

        //     // Check if image is present and upload it
        //     if ($request->image) {

        //         $data['image'] = $this->uploadImage($request, 'significance2');
        //     }

        //     // Perform update or create
        //     Significance2::updateOrCreate(
        //         ['l3_content_info_id' => $l3ContentInfo->id],
        //         $data
        //     );
        // }
        if ($request->l3_layout_type == 'significance2') {
            $significance2 = new Significance2();
            $significance2->l3_content_info_id = $l3ContentInfo->id;
            $significance2->page_id = $request->input('page_category_id');
            $significance2->sub_category_id = $request->input('sub_category_id');
            $significance2->significance2_category_id = $request->input('significance2_type');
            $significance2->name = $request->input('Significance2_subcategory_name');
            $significance2->significance2_title = $request->input('significance2_title');
            $significance2->significance2_short_description = $request->input('significance2_short_description');
            $significance2->significance2_long_description = $request->input('significance2_long_description');
        
            // Handle image upload
            if ($request->hasFile('image')) {
                $significance2->image = $this->uploadImage($request, 'significance2');
            }
        
            $significance2->save();
        }
        
        if ($request->l3_layout_type == 'significance') {
            SignificanceTitle::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                ['title' => $request->input('Significance_title', 'Default Title')] // Use default if null
            );
        }

        // Optional: If you're using a separate table for coursefeature titles 

        if ($request->l3_layout_type == 'coursefeatures') {
            CourseFeatureTitle::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                ['title' => $request->input('coursefeature_title', 'Default Title')] // Use default if null
            );
        }
        //    if ($request->l3_layout_type == 'coursefeatures') {
        //        // Fetch the first record from the CourseFeatureTitle table
        //        $coursefeature = CourseFeatureTitle::first();

        //        if ($coursefeature) {
        //            // If a record exists, update it
        //            $coursefeature->l3_content_info_id = $l3ContentInfo->id; // Update linked content info
        //            $coursefeature->title = $request->coursefeature_title; // Update title
        //            $coursefeature->save(); // Save changes
        //        } else {
        //            // If no record exists, create a new one
        //            $coursefeature = new CourseFeatureTitle();
        //            $coursefeature->l3_content_info_id = $l3ContentInfo->id; // Set linked content info
        //            $coursefeature->title = $request->coursefeature_title; // Set title
        //            $coursefeature->save(); // Save new record
        //        }
        //    }

        if ($request->l3_layout_type == 'faqs') {
            $faqSubCategory = new FaqSubCategory();
            $faqSubCategory->l3_content_info_id = $l3ContentInfo->id;
            $faqSubCategory->faq_category_id  = $request->faq_category_id;  // Linking the significance with the l3_content_info
            $faqSubCategory->sub_category_id = $request->sub_category_id;
            $faqSubCategory->page_id = $request->page_category_id;
            $faqSubCategory->name  = $request->subcategory;  // Linking the significance with the l3_content_info
            $faqSubCategory->title  = $request->faq_title;  // Linking the significance with the l3_content_info
            $faqSubCategory->description = $request->subcategory_description;  // Store significance title
            $faqSubCategory->save();
        }

        //data stored in testimonials table
        if ($request->l3_layout_type == 'testimonials') {
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


        if ($request->l3_layout_type == 'industries') {
            IndustryTitle::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                ['title' => $request->input('industries_title', 'Default Title')] // Use default if null
            );
        }

        if ($request->l3_layout_type == 'industries2') {
            Industry2Title::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                ['title' => $request->input('industry2_title', 'Default Title')] // Use default if null
            );
        }

        if ($request->l3_layout_type == 'blog') {
            BlogTitle::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                ['title' => $request->input('blog_main_title', 'Our Media')] // Use default if null
            );
        }
        //    if ($request->l3_layout_type == 'industries') {
        //     // dd('ok');
        //     // Fetch the first record from the SignificanceTitle table
        //     $significance = IndustryTitle::first();

        //     if ($significance) {
        //         // If a record exists, update it
        //         $significance->l3_content_info_id = $l3ContentInfo->id; // Update the linked content info
        //         $significance->title = $request->industries_title; // Update the title
        //         $significance->save(); // Save changes
        //     } else {
        //         // If no record exists, create a new one
        //         $significance = new IndustryTitle();
        //         $significance->l3_content_info_id = $l3ContentInfo->id; // Set the linked content info
        //         $significance->title = $request->industries_title; // Set the title
        //         $significance->save(); // Save new record
        //     }
        // }


        if ($request->l3_layout_type == 'cyberwind') {
            CyberwindTitle::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                ['title' => $request->input('cyberwind_title', 'Default Title')] // Use default if null
            );
        }

        // if ($request->l3_layout_type == 'cyberwind') {
        //     // dd('ok');
        //     // Fetch the first record from the SignificanceTitle table
        //     $significance = CyberwindTitle::first();

        //     if ($significance) {
        //         // If a record exists, update it
        //         $significance->l3_content_info_id = $l3ContentInfo->id; // Update the linked content info
        //         $significance->title = $request->cyberwind_title; // Update the title
        //         $significance->save(); // Save changes
        //     } else {
        //         // If no record exists, create a new one
        //         $significance = new CyberwindTitle();
        //         $significance->l3_content_info_id = $l3ContentInfo->id; // Set the linked content info
        //         $significance->title = $request->cyberwind_title; // Set the title
        //         $significance->save(); // Save new record
        //     }
        // }

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
            $path = $image->storeAs("uploads/frontend/l3_template/{$folder}", $file_name, 'public');
            return $file_name;
        }
        return null;
    }


    // public function uploadImage(Request $request, string $folder): ?string
    // {
    //     if ($request->hasFile('image')) {
    //         // Validate file
    //         $request->validate([
    //             'image' => 'mimes:png,jpg,jpeg,webp|max:4096',
    //         ]);

    //         $image = $request->file('image');

    //         // Validate MIME type
    //         $mimeType = mime_content_type($image->getPathname());
    //         $allowedTypes = ['image/png', 'image/jpeg', 'image/webp'];
    //         if (!in_array($mimeType, $allowedTypes, true)) {
    //             throw new \Exception('Invalid file type detected');
    //         }

    //         // Prevent directory traversal
    //         $folder = basename($folder);

    //         // Sanitize original file name
    //         $originalName = preg_replace('/[^a-zA-Z0-9._-]/', '', $image->getClientOriginalName());
    //         if (preg_match('/\.(php|exe|sh|bat|phtml|jsp|asp|aspx|cgi|pl)$/i', $originalName)) {
    //             throw new \Exception('Disallowed file type');
    //         }

    //         // Limit file name length
    //         if (strlen($originalName) > 255) {
    //             throw new \Exception('File name too long');
    //         }

    //         // Generate a unique WebP file name
    //         $fileName = md5(uniqid()) . '.webp';

    //         // Fix: Pass a driver instance (GdDriver or ImagickDriver)
    //         $manager = new ImageManager(new GdDriver()); // Use new ImagickDriver() if you prefer Imagick

    //         // Convert to WebP using WebpEncoder
    //         $webpImage = $manager->read($image)->encode(new WebpEncoder(quality: 70)); // 80% quality

    //         // Define the storage path
    //         $storagePath = "uploads/frontend/l3_template/{$folder}/{$fileName}";

    //         // Save the WebP image to storage (public disk)
    //         Storage::disk('public')->put($storagePath, $webpImage);

    //         return $fileName;
    //     }

    //     return null;
    // }

    public function getl3contentById($id)
    {
        $l3Content = L3ContentInfo::findOrFail($id);
        // dd($l3Content);
        // dd(L3OverviewSubDescription::where('l3_content_info_id', $id)->get());
        // dd(L3Overview2SubDescription::where('sub_category_id', $l3Content->sub_category_id)->get());
        return [
            'l3Content'              => $l3Content,
            'page_categories'        => PageDetail::all(),
            'coursecategories'       => CourseCategory::all(),
            'subCategories'          => SubCategory::all(),
            'l3Categories'           => L3Category::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'significanceCategories' => SignificanceCategory::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'significance2Categories' => Significance2Category::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'courseFeatureCategories' => CourseFeatureCategory::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'cyberwindCategories'    => CyberwindCategory::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'industryCategories'     => IndustryCategory::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'faqCategories'          => FaqCategory::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'blogCategories'         => BlogCategory::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'programCategories'      => ProgramCategory::where('sub_category_id', $l3Content->sub_category_id)->get(),
            'l3overview_desc'        => L3OverviewSubDescription::where('l3_content_info_id', $id)->get(),
            'l3overview_count_desc'  => L3OverviewSubDescription::where('l3_content_info_id', $id)->count(),
            'significanceTitle'      => SignificanceTitle::where('l3_content_info_id', $id)->first(),
            'program_sub_data'       => ProgramSubCategory::where('l3_content_info_id', $id)->first(),
            'coursefeatureTitle'     => CourseFeatureTitle::where('l3_content_info_id', $id)->first(),
            'industryTitle'          => IndustryTitle::where('l3_content_info_id', $id)->first(),
            'cyberwindTitle'         => CyberwindTitle::where('l3_content_info_id', $id)->first(),
            'testimonialData'        => TestimonialDetails::where('l3_content_info_id', $id)->first(),
            'FaqsData'               => FaqSubCategory::where('l3_content_info_id', $id)->first(),
            'BlogTitle'              => BlogTitle::where('l3_content_info_id', $id)->first(),
            'Overview2'              => L3Overview2_Description::where('l3_content_info_id', $id)->first(),
            'Overview15'             => Overview15::where('l3_content_info_id', $id)->first(),
            'L3Overview2SubDescription' => L3Overview2SubDescription::where('l3_content_info_id', $id)->get(),
            'significance2'             => Significance2::where('l3_content_info_id', $id)->first(),
            'Industry2Title'             => Industry2Title::where('l3_content_info_id', $id)->first(),
        ];
    }

    public function updatel3content($id, array $data, Request $request)
    {

        // dd($request->all());

        $l3ContentInfo = L3ContentInfo::findOrFail($id);

        // Update common fields
        $l3ContentInfo->page_category_id = $request->page_category_id;
        $l3ContentInfo->category_id = $request->category_id;
        $l3ContentInfo->sub_category_id = $request->sub_category_id;
        $l3ContentInfo->l3_category_id = $request->l3_category_id;
        $l3ContentInfo->l3_layout_type = $request->l3_layout_type;
        

        // Assign section-specific data
        switch ($request->l3_layout_type) {
            case 'overview':
                $l3ContentInfo->overview_title = $request->overview_title;
                $l3ContentInfo->overview_description = $request->overview_description;
                $l3ContentInfo->overview_description1 = $request->overview_description1;
                $l3ContentInfo->overview_description2 = $request->overview_description2;
                $l3ContentInfo->overview_description3 = $request->overview_description3;
                $l3ContentInfo->overview_description4 = $request->overview_description4;
                break;

            case 'overview16':

                if ($request->has('overview16_title')) {
                    $l3ContentInfo->overview16_title = $request->overview16_title;
                }

                $l3ContentInfo->overview16_short_descriptions = $request->overview16_short_descriptions;
                $l3ContentInfo->overview16_long_descriptions = $request->overview16_long_descriptions;
                $l3ContentInfo->images = $this->uploadImage($request, 'overview16');
                break;

            case 'overview17':
                $l3ContentInfo->overview17_descriptions = $request->overview17_descriptions;
                break;

            case 'overview2subdescription':
                if ($request->has('overview3_title')) {
                    $l3ContentInfo->overview3_title = $request->overview3_title;
                }
                break;

            case 'overview2':
                if ($request->filled('overview2_paragraph1')) {
                    L3Overview2_Description::updateOrCreate(
                        ['l3_content_info_id' => $l3ContentInfo->id], // Match by foreign key
                        [
                            'overview2_title'       => $request->input('overview2_title'),
                            'overview2_paragraph1'  => $request->input('overview2_paragraph1'),
                            'overview2_paragraph2'  => $request->input('overview2_paragraph2') ?? null,
                            'overview2_paragraph3'  => $request->input('overview2_paragraph3') ?? null,
                            'overview2_paragraph4'  => $request->input('overview2_paragraph4') ?? null,
                            'overview2_paragraph5'  => $request->input('overview2_paragraph5') ?? null,
                        ]
                    );
                }
                break;


            case 'overview15':
                if ($request->has('overview15_descriptions')) {
                    // Try to get existing record
                    $overview15 = Overview15::where('l3_content_info_id', $l3ContentInfo->id)->first();

                    $data = [
                        'overview15_title' => $request->input('overview15_title'),
                        'overview15_descriptions' => $request->input('overview15_descriptions'),
                    ];

                    if ($request->hasFile('image')) {
                        // Delete old image if exists
                        if ($overview15 && $overview15->image) {
                            $this->deleteImage($overview15->image, 'overview15');
                        }

                        // Upload and set new image
                        $data['image'] = $this->uploadImage($request, 'overview15');
                    } elseif ($overview15) {
                        // Keep existing image if no new one uploaded
                        $data['image'] = $overview15->image;
                    }

                    Overview15::updateOrCreate(
                        ['l3_content_info_id' => $l3ContentInfo->id],
                        $data
                    );
                }
                break;

                case 'significance2':
                    // Update category type only if provided
                    if ($request->filled('significance2_type')) {
                        $l3ContentInfo->significance2_category_type = $request->significance2_type;
                        $l3ContentInfo->save();
                    }
                
                    // Prepare data for Significance2 model
                    $data = [
                        'l3_content_info_id' => $l3ContentInfo->id,
                        'page_id' => $request->input('page_category_id'),
                        'sub_category_id' => $request->input('sub_category_id'),
                        'significance2_category_id' => $request->input('significance2_type'),
                        'name' => $request->input('Significance2_subcategory_name'),
                        'significance2_short_description' => $request->input('significance2_short_description'),
                        'significance2_long_description'  => $request->input('significance2_long_description'),
                    ];
                
                    if ($request->filled('significance2_title')) {
                        $data['significance2_title'] = $request->input('significance2_title');
                    }
                
                    // Handle image upload
                    $significance2 = Significance2::where('l3_content_info_id', $l3ContentInfo->id)->first();
                
                    if ($request->hasFile('image')) {
                        if ($significance2 && $significance2->image) {
                            $this->deleteImage($significance2->image, 'significance2');
                        }
                
                        $data['image'] = $this->uploadImage($request, 'significance2');
                    }
                
                    // Save or update the significance2 record
                    Significance2::updateOrCreate(
                        ['l3_content_info_id' => $l3ContentInfo->id],
                        $data
                    );
                
                    break;
                    
            case 'significance':
                $l3ContentInfo->significance_category_type = $request->significance_type;
                $l3ContentInfo->significance_description = $request->significance_description;
                $l3ContentInfo->significance_short_description = $request->significance_short_description;
                if ($request->image) {
                    if ($l3ContentInfo->images) {
                        $this->deleteImage($l3ContentInfo->images, 'significance');
                    }
                    $l3ContentInfo->images = $this->uploadImage($request, 'significance');
                }
                break;

            case 'coursefeatures':
                $l3ContentInfo->course_feature_type = $request->coursefeature_type;
                $l3ContentInfo->course_feature_description = $request->course_feature_description;
                $l3ContentInfo->course_feature_short_description = $request->course_feature_short_description;
                if ($request->image) {
                    if ($l3ContentInfo->images) {
                        $this->deleteImage($l3ContentInfo->images, 'coursefeature');
                    }
                    $l3ContentInfo->images = $this->uploadImage($request, 'coursefeature');
                }
                break;

            case 'cyberwind':
                $l3ContentInfo->cyberwind_type = $request->cyberwind_type;
                $l3ContentInfo->cyberwind_description = $request->cyberwind_description;
                $l3ContentInfo->cyberwind_short_description = $request->cyberwind_short_description;
                if ($request->image) {
                    if ($l3ContentInfo->images) {
                        $this->deleteImage($l3ContentInfo->images, 'cyberwind');
                    }
                    $l3ContentInfo->images = $this->uploadImage($request, 'cyberwind');
                }
                break;

            case 'industries':
                $l3ContentInfo->industry_type = $request->industries_type;
                $l3ContentInfo->industry_description = $request->industries_description;
                if ($request->image) {
                    if ($l3ContentInfo->images) {
                        $this->deleteImage($l3ContentInfo->images, 'industry');
                    }
                    $l3ContentInfo->images = $this->uploadImage($request, 'industry');
                }
                break;

            case 'industries2':
                $l3ContentInfo->industry2_description = $request->industry2_description;
                $l3ContentInfo->industry2_testimonial_name = $request->industry2_testimonial_name;

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
                if ($request->image) {
                    if ($l3ContentInfo->images) {
                        $this->deleteImage($l3ContentInfo->images, 'incidents');
                    }
                    $l3ContentInfo->images = $this->uploadImage($request, 'incidents');
                }
                break;

            case 'cehkit':
                if ($request->main_title) {
                    $l3ContentInfo->main_title = $request->main_title;
                }
                $l3ContentInfo->kit_title = $request->kit_title;
                $l3ContentInfo->ceh_description = $request->ceh_description;
                if ($request->image) {
                    if ($l3ContentInfo->images) {
                        $this->deleteImage($l3ContentInfo->images, 'cehkit');
                    }
                    $l3ContentInfo->images = $this->uploadImage($request, 'cehkit');
                }
                break;
        }

        // Save the updated data
        $l3ContentInfo->save();

        // Update overview sub-descriptions
        if ($request->l3_layout_type === 'overview' && $request->filled('overview_sub_descriptions')) {
            L3OverviewSubDescription::where('l3_content_info_id', $id)->delete();

            foreach ($request->overview_sub_descriptions as $index => $subDesc) {
                $subDesc = trim($subDesc);
                if (!empty($subDesc)) {
                    L3OverviewSubDescription::create([
                        'l3_content_info_id'             => $id,
                        'overview_subdescription_title' => $index === 0 ? $request->overview_subdescription_title : null,
                        'sub_description'               => $subDesc,
                    ]);
                }
            }
        }


        if ($request->l3_layout_type == 'overview2subdescription' && $request->has('overview2_sub_description')) {
            L3Overview2SubDescription::where('l3_content_info_id', $id)->delete();
            foreach ($request->overview2_sub_description as $subDesc) {
                L3Overview2SubDescription::create([
                    'l3_content_info_id' => $id,
                    'overview2_sub_description' => $subDesc,
                ]);
            }
        }


        // Update significance title
        if ($request->l3_layout_type == 'significance') {
            SignificanceTitle::updateOrCreate(
                ['l3_content_info_id' => $id],
                ['title' => $request->input('Significance_title', 'Default Title')]
            );
        }

        // Update course feature title
        if ($request->l3_layout_type == 'coursefeatures') {
            CourseFeatureTitle::updateOrCreate(
                ['l3_content_info_id' => $id],
                ['title' => $request->input('coursefeature_title', 'Default Title')]
            );
        }

        // Update industry title
        if ($request->l3_layout_type == 'industries') {
            IndustryTitle::updateOrCreate(
                ['l3_content_info_id' => $id],
                ['title' => $request->input('industries_title', 'Default Title')]
            );
        }

        if ($request->l3_layout_type == 'industries2') {
            Industry2Title::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                ['title' => $request->input('industry2_title', 'Default Title')] // Use default if null
            );
        }

        if ($request->l3_layout_type == 'blog') {
            BlogTitle::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Condition
                ['title' => $request->input('blog_main_title', 'Our Media')] // Use default if null
            );
        }

        // Update cyberwind title
        if ($request->l3_layout_type == 'cyberwind') {
            CyberwindTitle::updateOrCreate(
                ['l3_content_info_id' => $id],
                ['title' => $request->input('cyberwind_title', 'Default Title')]
            );
        }

        //data update in testimonials table
        if ($request->l3_layout_type == 'testimonials') {
            $testimonial = TestimonialDetails::updateOrCreate(
                ['l3_content_info_id' => $l3ContentInfo->id], // Unique identifier(s)
                [
                    'testimonial_name' => $request->testimonials_name,
                    'designation' => $request->designation, // Removed extra space
                    'testimonial_description' => $request->testimonials_description,
                    'testimonial_short_description' => $request->testimonials_short_description,
                    'testimonial_title' => $request->testimonials_title,
                ]
            );

            // Handle Image Upload: Only replace if a new file is uploaded
            if ($request->hasFile('image')) {
                if ($testimonial->images) {
                    $this->deleteImage($testimonial->images, 'testimonials');
                }
                $testimonial->images = $this->uploadImage($request, 'testimonials');
                $testimonial->save(); // Ensure image is saved
            }
        }
        //data update in faqs table
        if ($request->l3_layout_type == 'faqs') {

            FaqSubCategory::updateOrCreate(
                [
                    'l3_content_info_id' => $l3ContentInfo->id,
                    'faq_category_id' => $request->faq_category_id
                ], // Conditions for update
                [
                    'sub_category_id' => $request->sub_category_id,
                    'page_id' => $request->page_category_id,
                    'name' => $request->subcategory,
                    'title' => $request->faq_title,
                    'description' => $request->subcategory_description,
                ] // Data to be updated/created
            );
        }

        //data update in program table
        if ($request->l3_layout_type == 'program') {
            $shouldSave = false; // Flag to track if we need to save updates

            if ($request->filled('program_category_id')) {
                $l3ContentInfo->program_category_id = $request->program_category_id;
                $l3ContentInfo->l3_layout_program = $request->l3_layout_program;
                $shouldSave = true;
            }
            if ($request->filled('program_title')) {
                $l3ContentInfo->program_title = $request->program_title;
                $shouldSave = true;
            }
            if ($request->filled('program_sub_title')) {
                $l3ContentInfo->program_sub_title = $request->program_sub_title;
                $shouldSave = true;
            }
            if ($request->hasFile('brochure_pdf')) {
                // Validate PDF
                $l3ContentInfo->brochure_pdf = $this->uploadPDF($request, 'program');
                $shouldSave = true;
            }

            //  Save `l3ContentInfo` if any field was updated
            if ($shouldSave) {
                $l3ContentInfo->save();
            }

            //  Handle `program_subcategory` creation or update
            if ($request->program_subcategory) {
                // Fetch the existing record
                $programSubCategory = ProgramSubCategory::where('l3_content_info_id', $l3ContentInfo->id)->first();

                if ($programSubCategory) {
                    // Debug Before Updating
                    // dd($programSubCategory); // Check if we get the record correctly

                    // Perform the update
                    $programSubCategory->update([
                        'program_category_id' => $request->program_category_id,
                        'l3_content_info_id'  => $l3ContentInfo->id, // Not necessary if already correct
                        'sub_category_id' => $request->sub_category_id,
                        'page_id' => $request->page_category_id,
                        'name' => $request->program_subcategory,
                        'description' => $request->program_description,
                    ]);

                    // dd("Updated successfully", $programSubCategory); //  Debug after updating

                    //  Only update the image if a new one is uploaded
                    if ($request->hasFile('image')) {
                        if ($programSubCategory->image) {
                            $this->deleteImage($programSubCategory->image, 'program');
                        }
                        $programSubCategory->update([
                            'image' => $this->uploadImage($request, 'program'),
                        ]);
                    }
                } else {
                    //  Update `program_description` only if it's provided
                    if ($request->filled('program_description')) {
                        $l3ContentInfo->program_description = $request->program_description;
                        $shouldSave = true;
                    }

                    //  Only update the image if a new one is uploaded
                    if ($request->hasFile('image')) {
                        if ($l3ContentInfo->images) {
                            $this->deleteImage($l3ContentInfo->images, 'program');
                        }
                        $l3ContentInfo->images = $this->uploadImage($request, 'program');
                        $shouldSave = true;
                    }

                    //  Save `l3ContentInfo` again if necessary
                    if ($shouldSave) {
                        $l3ContentInfo->save();
                    }
                }
            }

            return true;
        }
    }


    public function deleteImage(string $fileName, string $folder): bool
    {
        // Prevent directory traversal

        $filePath = "uploads/frontend/l3_template/{$folder}/{$fileName}";

        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->delete($filePath);
        }

        return false;
    }

    // public function deleteL3Content($id)
    // {

    //     $l3ContentInfo = L3ContentInfo::find($id);

    //     if (!$l3ContentInfo) {
    //         return false; // Return false if not found
    //     }

        

    //     // // Fetch and delete ProgramSubCategory image if it exists
    //     // $programSubCategory = ProgramSubCategory::where('l3_content_info_id', $id)->first();
    //     // if ($programSubCategory && $programSubCategory->image) {
    //     //     $this->deleteImage($programSubCategory->image, 'program');
    //     // }

    //     // // Fetch and delete testimonial images if they exist
    //     // $testimonial = TestimonialDetails::where('l3_content_info_id', $id)->first();
    //     // if ($testimonial && $testimonial->images) {
    //     //     $this->deleteImage($testimonial->images, 'testimonials');
    //     // }

    //     // // Fetch and delete Significance2 images if they exist
    //     // $significance2 = Significance2::where('l3_content_info_id', $id)->first();
    //     // if ($significance2 && $significance2->image) {
    //     //     $this->deleteImage($significance2->image, 'significance2');
    //     // }

    //     return $l3ContentInfo->delete(); // Return true if deletion succeeds
    // }


    private function uploadPDF(Request $request, $folder)
    {
        // dd('ok');
        if ($request->hasFile('brochure_pdf')) {
            // Validate PDF file
            $request->validate([
                'brochure_pdf' => 'mimes:pdf|max:5120', // Only allow PDF files up to 5MB
            ]);

            $pdf = $request->file('brochure_pdf');

            // Validate MIME type
            $mimeType = mime_content_type($pdf->getPathname());
            $allowedTypes = ['application/pdf'];

            if (!in_array($mimeType, $allowedTypes, true)) {
                throw new \Exception('Invalid file type detected');
            }

            // Prevent directory traversal
            $folder = basename($folder);

            // Validate file name
            $originalName = preg_replace('/[^a-zA-Z0-9._-]/', '', $pdf->getClientOriginalName());
            if (preg_match('/\.(php|exe|sh|bat|phtml|jsp|asp|aspx|cgi|pl)$/i', $originalName)) {
                throw new \Exception('Disallowed file type');
            }

            // Limit file name length
            if (strlen($originalName) > 255) {
                throw new \Exception('File name too long');
            }

            // Enforce safe naming convention
            $originalName = str_replace(" ", "_", $originalName);

            // Generate a unique filename
            $file_name = md5(uniqid()) . '.pdf';

            // Store file securely
            $path = $pdf->storeAs("uploads/frontend/l3_template/{$folder}", $file_name, 'public');

            return $file_name;
        }

        return null;
    }
}
