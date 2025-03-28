@extends('backend.layouts.app')

@section('content')
    <style>
        .color-picker-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .color-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .color-btn {
            width: 40px;
            height: 40px;
            border: 2px solid #ddd;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }

        .color-btn:hover,
        .color-btn.selected {
            transform: scale(1.2);
            border: 2px solid black;
        }

        .color-picker-label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .color-picker-input {
            width: 100px;
            height: 40px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
    </style>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>L3 Edit Content Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">L3 Edit Content</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">New L3 Edit Content</div>
                    </li>
                </ul>
            </div>
 
            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('l3-content.update', $l3Content->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('l3-content.list') }}">Back</a>

                    <!-- Page Category -->
                    <fieldset class="name">
                        <div class="body-title">Select Page Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="page_category_id" id="page_category" required>
                            <option value="" disabled selected>Select page category</option>
                            @foreach ($page_categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->page_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->page_name }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- Category (Dependent on Course Category) -->
                    <fieldset class="name">
                        <div class="body-title">Select Course Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" id="category" required>
                            <option value="" disabled selected>Select Category</option>
                            @foreach ($coursecategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- Sub Category (Dependent on Sub Category) -->
                    <fieldset class="name">
                        <div class="body-title">Select Sub Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="sub_category_id" id="sub_category" required>
                            <option value="" disabled selected>Select Sub Category</option>
                            @foreach ($subCategories as $subCategory)
                                <option value="{{ $subCategory->id }}"
                                    {{ $l3Content->sub_category_id == $subCategory->id ? 'selected' : '' }}>
                                    {{ $subCategory->sub_category }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- L3-Category  -->
                    <fieldset class="name">
                        <div class="body-title">Select L3 Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow l3_content" name="l3_category_id" id="l3_category" required>
                            <option value="" disabled selected>Select L3 Category</option>
                            @foreach ($l3Categories as $l3Category)
                                <option value="{{ $l3Category->id }}"
                                    {{ $l3Content->l3_category_id == $l3Category->id ? 'selected' : '' }}>
                                    {{ $l3Category->l3_category }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Select L3 Layouts <span class="tf-color-1">*</span></div>
                        <select class="flex-grow l3_content" name="" id="l3_layout_id">
                            {{-- <option value="{{ $l3Content->l3_layout_type }}">{{ $l3Content->l3_layout_type }}</option> --}}
                            <option value="" disabled>Select L3 Layout</option>
                            @php
                                $layoutTypes = [
                                    'overview' => 'Overview',
                                    'significance' => 'Significance',
                                    'coursefeatures' => 'Course Features',
                                    'cyberwind' => 'Why Cyberwind',
                                    'industries' => 'Industries',
                                    'faqs' => 'FAQs',
                                    'blog' => 'Blog',
                                    'incidents' => 'Incidents',
                                    'cehkit' => 'CEH Kit',
                                    'program' => 'Program',
                                    'testimonials' => 'Testimonials'
                                ];
                            @endphp
                    
                            @foreach ($layoutTypes as $key => $value)
                                {{-- <option value="{{ $key }}" {{ ($l3Content->l3_layout_type == $key) ? 'selected' : '' }}>
                                    {{ $value }}
                                </option> --}}
                                <option value="{{ $key }}" {{ (isset($l3Content->l3_layout_type) && $l3Content->l3_layout_type == $key) ? 'selected' : '' }}>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    
                       
                    </fieldset>
                    

                    <hr id="hr" style="border: 0; height: 4px; background-color: #f40a0a; ">
                    <!-- Forms based on L3 Category selection -->

                    <h5 class="form-heading"style="align-items:center">Add L3 Content Data </h5>
                    <!-- Overview Form start-->

                    <div class="form-group l3-form overview_form" id="overview_form">
                        <div class="body-title">Overview Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="overview_description">{{ $l3Content->overview_description }}</textarea>
                    </div>
                    <div class="l3-form form-group overview_title">
                        <div class="body-title">Overview Title(H) :<span class="tf-color-1">*</span></div>
                        <input type="text" class="" name="overview_title"
                            value="{{ $l3Content->overview_title }}">
                    </div>

                    <div class="l3-form" id="overview_sub_desc" style="display: none;">
                        <div class="body-title">Select Sub Descriptions: <span class="tf-color-1"></span></div>
                        <select id="overview_count" class="flex-grow l3_content">
                            <option value="">Select</option>

                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}" {{ $i == $l3overview_count_desc ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>


                    </div>


                    <div class="form-group" id="dynamic_overview_sections"></div>
                    <!-- Overview Form ends-->

                    <!-- Significance Form Start -->
                    <div class="l3-form" id="significance_form" style="display: none;">

                        <div class="body-title  ">Select Significance Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="significance_type">
                            <option value="" disabled selected>Select Significance</option>
                            @foreach ($significanceCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->significance_category_type == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="l3-form form-group significance_short_description">
                        <div class="body-title">Significance Short Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="significance_short_description">{{ $l3Content->significance_short_description }}</textarea>
                    </div>
                    <div class="l3-form form-group significance_desc">
                        <div class="body-title">Significance Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="significance_description">{{ $l3Content->significance_description }}</textarea>
                    </div>


                    <div class="l3-form form-group significance_title">
                        <div class="body-title">Significance Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="Significance_title">{{ $significanceTitle ? $significanceTitle->title : '' }}</textarea>
                    </div>
                    <!-- Significance Form ends-->

                    <!-- course Feature Form Start -->
                    <div class="l3-form" id="courseFeature_form" style="display: none;">

                        <div class="body-title">Select Course Feature Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="coursefeature_type">
                            <option value="" disabled selected>Select Course Feature Category</option>
                            @foreach ($courseFeatureCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->course_feature_type == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <!-- Course Feature Title Form -->
                    <div class="l3-form form-group coursefeature_title">
                        <div class="body-title">Course Feature Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="coursefeature_title">{{ $coursefeatureTitle ? $coursefeatureTitle->title : '' }}</textarea>
                    </div>

                    <div class="l3-form form-group course_feature_short_description">

                        <div class="body-title">Course Feature Short Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="course_feature_short_description">{{ $l3Content->course_feature_short_description }}</textarea>
                    </div>
                    <div class="l3-form form-group coursefeature_desc">

                        <div class="body-title">Course Feature Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="course_feature_description">{{ $l3Content->course_feature_description }}</textarea>
                    </div>


                    <!-- Course Feature Form end -->

                    <!-- cyberwind Form Start -->
                    <div class="l3-form" id="cyberwind_form" style="display: none;">

                        <div class="body-title">Select Cyberwind Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" style="" name="cyberwind_type">
                            <option value="" disabled selected>Select Cyberwind Category</option>
                            @foreach ($cyberwindCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->cyberwind_type == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <!-- Cyberwind Title Form -->
                    <div class="l3-form form-group cyberwind_title">
                        <div class="body-title">Cyberwind Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="cyberwind_title">{{ $cyberwindTitle ? $cyberwindTitle->title : '' }}</textarea>
                    </div>
                    <div class="l3-form form-group cyberwind_short_description">
                        <div class="body-title">Cyberwind Short Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="cyberwind_short_description">{{ $l3Content->cyberwind_short_description }}</textarea>
                    </div>
                    <div class="l3-form form-group cyberwind_desc">
                        <div class="body-title">Cyberwind Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="cyberwind_description">{{ $l3Content->cyberwind_description }}</textarea>
                    </div>


                    <!-- Cyberwind Form end -->

                    <!-- industries Form Start -->
                    <div class="l3-form" id="industries_form" style="display: none;">

                        <div class="body-title">Select Industries Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" style="" name="industries_type">
                            <option value="" disabled selected>Select Industries Category</option>
                            @foreach ($industryCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->industry_type == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <!-- Industries Title Form -->
                    <div class="l3-form form-group industries_title">
                        <div class="body-title">Industries Title : <span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="industries_title">{{ $industryTitle ? $industryTitle->title : '' }}</textarea>
                    </div>
                    <div class="l3-form form-group industries_desc">
                        <div class="body-title">Industries Description :<span class="tf-color-1">*</span></div>
                        <label><strong></strong></label>
                        <textarea class="" name="industries_description">{{ $l3Content->industry_description }}</textarea>
                    </div>

                    <!-- industries Form End -->

                    <!-- FAQ'S Form Start -->
                    <div class="l3-form" id="faqs_form" style="display: none;">
                        <div class="body-title">Select FAQ'S Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" style="" name="faq_category_id">
                            <option value="" disabled selected>Select FAQ'S Category</option>
                            @foreach ($faqCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->faq_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="l3-form form-group sub_category">
                        <div class="body-title">Faqs Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="faq_title">{{ $FaqsData ? $FaqsData->title : '' }}</textarea>

                    </div>
                    <div class="name l3-form sub_category" id="">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Sub Category Name" name="subcategory"
                            tabindex="0" value="{{ $FaqsData ? $FaqsData->name : '' }}">

                    </div>
                    <div class="l3-form form-group faqs_desc">
                        <div class="body-title">SubCategory Description : <span class="tf-color-1">*</span></div>
                        <textarea class="" name="subcategory_description">{{ $FaqsData ? $FaqsData->description : '' }}</textarea>
                    </div>

                    <!-- FAQ'S Form End -->

                    {{-- Blog Form Start --}}

                    <div class="l3-form" id="blog_form" style="display: none;">
                        <div class="body-title">Select Blog Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="blog_category_type">
                            <option value="" disabled selected>Select Blog Category</option>
                            @foreach ($blogCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->blog_category_type == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="l3-form" id="style_form" style="display: none;">
                        <div class="body-title">Pick Background Color <span class="tf-color-1">*</span></div>
                        <input type="color" name="style_class" id="colorPicker" class="color-picker-input"
                            value="#f40a0a">
                    </div>
                    <div class="l3-form form-group blog_title">
                        <div class="body-title">Blog Title : <span class="tf-color-1">*</span></div>
                        <input type="text" name="blog_description" placeholder="Enter Blog Title"
                            value="{{ $l3Content->blog_description }}">
                    </div>

                    {{-- Blog Form End --}}

                    {{-- testimonials form start --}}
                    <div class="name l3-form" id="testimonial_form" style="display: none;">

                        <div class="body-title">Testimonial Title : </div>
                        <input type="text" name="testimonials_title"
                            value="{{ $testimonialData ? $testimonialData->testimonial_title : '' }}"></input>
                    </div>
                    <div class="l3-form form-group testimonial_name">
                        <div class="body-title">Client Name : <span class="tf-color-1">*</span></div>
                        <input type="text" name="testimonials_name"
                            value="{{ $testimonialData ? $testimonialData->testimonial_name : '' }}"></input>
                    </div>
                    <div class="l3-form testimonial_designation">
                        <div class="body-title">Client Designation: <span class="tf-color-1">*</span></div>
                        <input type="text" name="designation"
                            value="{{ $testimonialData ? $testimonialData->designation : '' }}"></input>
                    </div>
                    <div class="l3-form  testimonials_short_description">
                        <div class="body-title">Testimonial Short Description :<span class="tf-color-1">*</span></div>
                        <textarea class="" name="testimonials_short_description">{{ $testimonialData ? $testimonialData->testimonial_short_description : '' }}</textarea>
                    </div>
                    <div class="l3-form  testimonial_description">
                        <div class="body-title">Testimonial Description :<span class="tf-color-1">*</span></div>
                        <textarea class="" name="testimonials_description">{{ $testimonialData ? $testimonialData->testimonial_description : '' }}</textarea>
                    </div>

                    <!-- Testimonials form ends -->

                    {{-- Incident form start --}}
                    <div class="name l3-form" id="incident_form" style="display: none;">

                        <div class="body-title">Incident Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="incident_title">{{ $l3Content->incident_title }}</textarea>
                    </div>
                    <div class="l3-form form-group Video_link">
                        <div class="body-title">Video Link : <span class="tf-color-1">*</span></div>
                        <input type="text" name="Video_link" value="{{ $l3Content->Video_link }}"> </input>
                    </div>

                    <div class="l3-form  incident_description">
                        <div class="body-title">Incident Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="incident_description">{{ $l3Content->incident_description }}</textarea>
                    </div>


                    <!-- Incident form ends -->


                    {{-- CEH kit form start --}}
                    <div class="l3-form form-group cehkit_form" id="cehkit_form">
                        <div class="body-title">CEH KIT Title (Top) : <span class="tf-color-1"></span></div>
                        <textarea class="summernote" name="main_title">{{ $l3Content ? $l3Content->main_title : '' }}</textarea>
                    </div>
                    <div class="form-group l3-form  kit_title">
                        <div class="body-title">Sub Title :<span class="tf-color-1">*</span></div>
                        <input type="text" name="kit_title" id=""
                            value="{{ $l3Content ? $l3Content->kit_title : '' }}"></input>
                    </div>
                    <div class="l3-form  ceh_description">
                        <div class="body-title">CEH KIT Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="ceh_description">{{ $l3Content->ceh_description }}</textarea>
                    </div>


                    {{-- CEH kit form End --}}

                    <!-- Program Form Start -->
                    <div class="l3-form" id="program_form" style="display: none;">
                        <div class="body-title">Select Program Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" style="" name="program_category_id">
                            <option value="" disabled selected>Select Program Category</option>
                            @foreach ($programCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $l3Content->program_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    

                    <div class="l3-form" id="layout_program_form" style="display: none;">
                        <div class="body-title">Select L3 Layouts Program <span class="tf-color-1">*</span></div>
                        <select class="flex-grow l3_content" name="l3_layout_program" required>
                            <option value="" disabled {{  $l3Content->l3_layout_program  ? 'selected' : '' }}>Select L3 Layout Program</option>
                    
                            @php
                                $layoutPrograms = [
                                    'courseoutline' => 'Course Outline',
                                    'whatsnewinceh' => "What's New in CEH",
                                    'whoisitfor' => 'Who is it for?',
                                    'brochure' => 'Brochure'
                                ];
                            @endphp
                    
                            @foreach ($layoutPrograms as $key => $value)
                                <option value="{{ $key }}" {{ old('l3_layout_program', $l3Content->l3_layout_program ?? '') == $key ? 'selected' : '' }}>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    
                        @error('l3_layout_program')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    

                    <div class="l3-form form-group program_title">
                        <div class="body-title">Program Top Title(H) :<span class="tf-color-1">*</span></div>
                        <input type="text" class="" name="program_title"
                            value="{{ $l3Content ? $l3Content->program_title : '' }}"></input>
                    </div>

                    <div class="name l3-form program_subcategory" id="">
                        <div class="body-title">Program Sub-Category Name </div>
                        <input class="flex-grow" type="text" placeholder="Sub Category Name"
                            name="program_subcategory" tabindex="0"
                            value="{{ $program_sub_data ? $program_sub_data->name : '' }}">
                    </div>

                    <div class="l3-form form-group program_sub_title">
                        <div class="body-title">Program Sub Title(H) :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="program_sub_title">{{ $l3Content ? $l3Content->program_sub_title : '' }}</textarea>
                    </div>

                    {{-- @foreach ($programCategories as $subcategory)
                        <div class="name l3-form program_subcategory">
                            <div class="body-title">Program Sub-Category Name</div>
                            <input class="flex-grow" type="text" placeholder="Sub Category Name" 
                                name="program_subcategory[]" tabindex="0"
                                value="{{ old('program_subcategory.' . $loop->index,$l3Content->program_category_id == $category->id ? 'selected' : '') }}">
                        </div>
                    @endforeach --}}

                    {{-- <div class="l3-form form-group program_description">
                        <div class="body-title"> program Description : <span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="program_description">{{ old('program_description', $l3Content->program_description ?? '') }}</textarea>
                    </div> --}}


                    <div class="l3-form form-group program_description">
                        <div class="body-title"> Program Description : <span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="program_description">
                            @if (old('program_description'))
                            {{ old('program_description') }}
                            @elseif(isset($program_sub_data) && $program_sub_data->description)
                            {{ $program_sub_data->description }}
                            @elseif(isset($l3Content) && $l3Content->program_description)
                            {{ $l3Content->program_description }}
                            @endif
                        </textarea>
                    </div>

                    <div class="l3-form form-group brochure_pdf">
                        <div class="body-title">Upload Brochure (PDF) :<span class="tf-color-1"></span></div>
                        <input type="file" name="brochure_pdf" class="form-control" accept="application/pdf">
                    </div>

                    <!-- Program Form End -->

                    {{-- comman Image for required form start --}}

                    <fieldset>
                        <div class="body-title blog_image">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">

                            @php
                                $imagePath = null;

                                if (isset($program_sub_data) && !empty($program_sub_data->image)) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/program/' . $program_sub_data->image,
                                    );
                                } elseif (!empty($l3Content->images) && !empty($l3Content->program_category_id)) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/program/' . $l3Content->images,
                                    );
                                } elseif (
                                    !empty($l3Content->images) &&
                                    !empty($l3Content->significance_category_type)
                                ) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/significance/' . $l3Content->images,
                                    );
                                } elseif (!empty($l3Content->images) && !empty($l3Content->course_feature_type)) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/coursefeature/' . $l3Content->images,
                                    );
                                } elseif (!empty($l3Content->images) && !empty($l3Content->kit_title)) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/cehkit/' . $l3Content->images,
                                    );
                                } elseif (!empty($l3Content->images) && !empty($l3Content->Video_link)) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/incidents/' . $l3Content->images,
                                    );
                                } elseif (!empty($l3Content->images) && !empty($l3Content->industry_type)) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/industry/' . $l3Content->images,
                                    );
                                } elseif (!empty($l3Content->images) && !empty($l3Content->cyberwind_type)) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/cyberwind/' . $l3Content->images,
                                    );
                                } elseif (!empty($testimonialData->images)) {
                                    $imagePath = asset(
                                        'storage/uploads/frontend/l3_template/testimonials/' . $testimonialData->images,
                                    );
                                }

                            @endphp

                            <!-- If an image exists, show preview and delete button -->
                            @if ($imagePath)
                                <div class="item" id="imgpreview" style="text-align: center;">
                                    <img src="{{ $imagePath }}" id="preview-img" class="effect8"
                                        style="max-width: 50%; height: auto;" alt="Preview Image">
                                    <button type="button" id="deleteImage" class="delete-btn">Delete</button>
                                    <!-- Hidden Input to Store Existing Image Path -->

                                </div>
                                <!-- Upload file input (Always displayed) -->
                                <div id="upload-file" class="item up-load">
                                    <label class="uploadfile" for="myFile">
                                        <span class="icon"><i class="icon-upload-cloud"></i></span>
                                        <span class="body-text">Drop your images here or select
                                            <span class="tf-color">click to browse</span>
                                        </span>
                                        <input type="file" id="myFile" name="image" accept="image/*">
                                    </label>
                                </div>
                            @endif

                            @if (!$imagePath)
                                <fieldset>
                                    <div class="upload-image flex-grow">
                                        <!-- Image preview container -->
                                        <div class="item" id="imgpreview" style="display:none; text-align: center;">
                                            <img src="" class="effect8" alt="Preview Image"
                                                style="max-width: 50%; height: auto; border-radius: 5px;">
                                            <button type="button" id="deleteImage" class="delete-btn">Delete</button>
                                        </div>
                                        <div id="upload-file" class="item up-load blog_image">
                                            <label class="uploadfile" for="myFile">
                                                <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                <span class="body-text">Drop your images here or select <span
                                                        class="tf-color">click to
                                                        browse</span></span>
                                                <input type="file" id="myFile" name="image" accept="image/*">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            @endif

                        </div>
                    </fieldset>


                    {{-- comman Image for required form End --}}
                    <input type="hidden" id="l3_layout_type" name="l3_layout_type" value="">

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Update</button>
                    </div>
                </form>
            </div>

            <!-- Hidden input to store L3 category type -->

        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            function toggleForms() {
                var selectedL3Category = $("#l3_layout_id option:selected").text().trim().toLowerCase();
                selectedL3Category = selectedL3Category.replace(/[^a-zA-Z0-9]/g, ''); // Remove special characters

                console.log("Selected L3 Category:", selectedL3Category); // Debugging

                // Hide all sections
                $('.l3-form').hide();
                $('#hr, .form-heading').hide();

                if (selectedL3Category) {
                    $('#hr, .form-heading').show();
                }

                // Mapping of category names to form IDs and elements
                var categoryMappings = {
                    "overview": "#overview_form",
                    "significance": "#significance_form",
                    "coursefeatures": "#courseFeature_form",
                    "whycyberwind": "#cyberwind_form",
                    "industries": "#industries_form",
                    "faqs": "#faqs_form",
                    "blog": "#blog_form",
                    "testimonials": "#testimonial_form",
                    "incidents": "#incident_form",
                    "cehkit": ".cehkit_form",
                    "program": "#program_form",
                    "history": "#history_form"
                };

                // Show the form and set the hidden input value if a valid category is found
                if (categoryMappings[selectedL3Category]) {
                    $(categoryMappings[selectedL3Category]).show();
                    $('#l3_layout_type').val(selectedL3Category);

                    if (selectedL3Category === "overview") {
                        $('#overview_form').show();
                        $('.blog_image').hide();
                        $('.overview_title').show(); // Ensure the title is shown
                        $('#overview_sub_desc').show();
                        $('#l3_layout_type').val(selectedL3Category);
                    } else if (selectedL3Category === "significance") {
                        $('#significance_form').show();
                        $('.significance_desc').show();
                        $('.significance_short_description').show();
                        $('.significance_title').show();
                        $('.comman_images').show();
                        $('#l3_layout_type').val('significance'); // Set hidden input to 'significance'
                    } else if (selectedL3Category === "program") {
                        $('#program_form').show();
                        $('#layout_program_form').show();
                        $('.program_subcategory').show();
                        $('.program_title').show();
                        $('.program_sub_title').show();
                        $('.program_description').show();
                        $('.brochure_pdf').show();
                        $('.comman_images').show();
                        $('#l3_layout_type').val('program'); // Set hidden input to 'cehkit'
                    } else if (selectedL3Category === "coursefeatures") {
                        $('#courseFeature_form').show();
                        $('.coursefeature_title').show();
                        $('.coursefeature_desc').show();
                        $('.course_feature_short_description').show();
                        $('.comman_images').show();
                        $('#l3_layout_type').val('coursefeatures'); // Set hidden input to 'courseFeature'
                    } else if (selectedL3Category === "whycyberwind") {
                        $('#cyberwind_form').show();
                        $('.cyberwind_title').show();
                        $('.cyberwind_desc').show();
                        $('.cyberwind_short_description').show();
                        $('.comman_images').show();
                        $('#l3_layout_type').val('cyberwind'); // Set hidden input to 'cyberwind'
                    } else if (selectedL3Category === "industries") {
                        $('#industries_form').show();
                        $('.industries_title').show();
                        $('.industries_desc').show();
                        $('.comman_images').show();
                        $('#l3_layout_type').val('industries'); // Set hidden input to 'industries'
                    } else if (selectedL3Category === "faqs") {
                        $('#faqs_form').show();
                        // $('.faqs_category').show();
                        $('.sub_category').show();
                        $('.faqs_heading').show();
                        $('.faqs_title').show();
                        $('.blog_image').hide();
                        $('.faqs_desc').show();
                        $('#l3_layout_type').val('faqs'); // Set hidden input to 'faqs
                    } else if (selectedL3Category === "blog") {
                        $('#blog_form').show();
                        $('.blog_title').show();
                        $('.blog_image').hide();
                        $('#style_form').show();
                        $('#l3_layout_type').val('blog'); // Set hidden input to 'blog'
                    } else if (selectedL3Category === "cehkit") {
                        $('.cehkit_form').show();
                        $('.kit_title').show();
                        $('.ceh_description').show();
                        $('.comman_images').show();
                        $('#l3_layout_type').val('cehkit'); // Set hidden input to 'cehkit'
                    } else if (selectedL3Category === "incidents") {
                        $('#incident_form').show();
                        $('.Video_link').show();
                        $('.incident_description').show();
                        $('.comman_images').show();
                        $('#l3_layout_type').val('incidents'); // Set hidden input to 'incidents'

                    } else if (selectedL3Category === "testimonials") {
                        $('#testimonial_form').show();
                        // $('.testimonials_title').show(); 
                        $('.testimonial_name').show();
                        $('.testimonial_designation').show();
                        $('.testimonial_description').show();
                        $('.testimonials_short_description').show();
                        $('.comman_images').show();
                        $('#l3_layout_type').val('testimonials'); // Set hidden input to 'testimonials'
                    }
                }
            }

            function loadDropdownData(url, requestData, targetElement, defaultText) {
                $(targetElement).html(`<option value="" disabled selected>Loading...</option>`);

                $.ajax({
                    url: url,
                    type: "GET",
                    data: requestData,
                    success: function(data) {
                        $(targetElement).html(
                            `<option value="" disabled selected>${defaultText}</option>`);
                        $.each(data, function(key, value) {
                            $(targetElement).append(
                                `<option value="${value.id}">${value.name || value.sub_category || value.l3_category}</option>`
                            );
                        });
                    },
                    error: function() {
                        $(targetElement).html(
                            `<option value="" disabled selected>Error loading data</option>`);
                    }
                });
            }

            // Run toggleForms() on page load
            toggleForms();

            // Event listener for category selection
            $('#l3_category').change(toggleForms);

            // Load categories when Page Category changes
            $('#page_category').change(function() {
                loadDropdownData("{{ route('l3-get-categories') }}", {
                    page_category_id: $(this).val()
                }, '#category', 'Select category');
            });

            // Load Sub-Categories when Category changes
            $('#category').change(function() {
                loadDropdownData("{{ route('l3-get-subcategories') }}", {
                    category_id: $(this).val(),
                    page_category_id: $('#page_category').val()
                }, '#sub_category', 'Select Sub category');
            });

            // Load L3-Categories when Sub-Category changes
            $('#sub_category').change(function() {
                loadDropdownData("{{ route('l3-get-l3categories') }}", {
                    category_id: $('#category').val(),
                    page_category_id: $('#page_category').val(),
                    sub_category_Id: $(this).val()
                }, '#l3_category', 'Select L3 category');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Convert Laravel array into JavaScript array
            let existingData = @json($l3overview_desc ?? []);

            function generateSubDescriptions(count) {
                let container = $('#dynamic_overview_sections');
                container.empty(); // Clear previous content

                // Iterate through the number of descriptions needed
                for (let i = 0; i < count; i++) {
                    let content = existingData[i]?.sub_description ??
                        ''; // Fetch specific overview_sub_descriptions

                    let subForm = `
                        <div class="overview-sub-section">
                            <div class="body-title">Overview Sub Description ${i + 1} :<span class="tf-color-1">*</span></div>
                            <textarea id="overview_sub_description_${i + 1}" class="mr-5 summernote" name="overview_sub_descriptions[]">${content}</textarea>
                        </div>
                    `;

                    container.append(subForm);
                }

                // Re-initialize Summernote for new textareas
                $('.summernote').summernote({
                    height: 150,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video']]
                    ]
                });
            }

            // Generate fields when dropdown value changes
            $('#overview_count').change(function() {
                let count = parseInt($(this).val()) || 0;
                generateSubDescriptions(count);
            });

            // Auto-generate fields on page load if a value is preselected
            let initialCount = parseInt($('#overview_count').val()) || existingData.length;
            if (initialCount > 0) {
                generateSubDescriptions(initialCount);
            }
        });
    </script>
@endpush
