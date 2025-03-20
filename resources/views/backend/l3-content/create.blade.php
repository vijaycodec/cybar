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
                <h3>L3 Content Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">L3 Content</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">New L3 Content</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('l3-content.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('l3-content.list') }}">Back</a>

                    <!-- Page Category -->
                    <fieldset class="name">
                        <div class="body-title">Select Page Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="page_category_id" id="page_category" required>
                            <option value="" disabled selected>Select page category</option>
                            @foreach ($page_categories as $pageCategory)
                                <option value="{{ $pageCategory->id }}">{{ $pageCategory->page_name }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- Category (Dependent on Page Category) -->
                    <fieldset class="name">
                        <div class="body-title">Select Course Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" id="category" required>
                            <option value="" disabled selected>Select Category</option>
                        </select>
                    </fieldset>

                    <!-- Sub Category (Dependent on Category) -->
                    <fieldset class="name">
                        <div class="body-title">Select Sub Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="sub_category_id" id="sub_category" required>
                            <option value="" disabled selected>Select Sub Category</option>
                        </select>
                    </fieldset>

                    <!-- L3-Category  -->
                    <fieldset class="name">
                        <div class="body-title">Select L3 Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow l3_content" name="l3_category_id" id="l3_category" required>
                            <option value="" disabled selected>Select L3 Category</option>
                        </select>
                    </fieldset>

                    <hr id="hr" style="border: 0; height: 4px; background-color: #f40a0a; ">
                    <!-- Forms based on L3 Category selection -->

                    <h5 class="form-heading"style="align-items:center">Add L3 Content Data </h5>
                    <!-- Overview Form start-->

                    <div class="l3-form form-group overview_title">
                        <div class="body-title">Overview Title(H) :<span class="tf-color-1">*</span></div>
                        <input type="text" class="" name="overview_title">{{ old('overview_title') }}</input>
                    </div>
                    <div class="form-group l3-form overview_form " id="overview_form">

                        <div class="body-title">Overview Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="overview_description">{{ old('overview_description') }}</textarea>
                    </div>

                    <div class="l3-form" id="overview_sub_desc" style="display: none;">
                        <div class="body-title">SelectS ub Descriptions: <span class="tf-color-1"></span></div>
                        <select id="overview_count" class="flex-grow l3_content">
                            <option value="">Select</option>
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
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
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="l3-form form-group significance_short_description">
                        <div class="body-title">Significance Short Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="significance_short_description">{{ old('significance_short_description') }}</textarea>
                    </div>
                    <div class="l3-form form-group significance_desc">
                        <div class="body-title">Significance Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="significance_description">{{ old('significance_description') }}</textarea>
                    </div>


                    <div class="l3-form form-group significance_title">
                        <div class="body-title">Significance Title :<span class="tf-color-1">*</span></div>

                        <textarea class="summernote" name="Significance_title">{{ old('Significance_title') }}</textarea>
                    </div>
                    <!-- Significance Form ends-->

                    <!-- course Feature Form Start -->
                    <div class="l3-form" id="courseFeature_form" style="display: none;">

                        <div class="body-title">Select Course Feature Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="coursefeature_type">
                            <option value="" disabled selected>Select Course Feature Category</option>
                            @foreach ($courseFeatureCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <!-- Course Feature Title Form -->
                    <div class="l3-form form-group coursefeature_title">
                        <div class="body-title">Course Feature Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="coursefeature_title">{{ old('coursefeature_title') }}</textarea>
                    </div>

                    <div class="l3-form form-group course_feature_short_description">

                        <div class="body-title">Course Feature Short Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="course_feature_short_description">{{ old('course_feature_short_description') }}</textarea>
                    </div>
                    <div class="l3-form form-group coursefeature_desc">

                        <div class="body-title">Course Feature Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="course_feature_description">{{ old('course_feature_description') }}</textarea>
                    </div>


                    <!-- Course Feature Form end -->

                    <!-- cyberwind Form Start -->
                    <div class="l3-form" id="cyberwind_form" style="display: none;">

                        <div class="body-title">Select Cyberwind Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" style="" name="cyberwind_type">
                            <option value="" disabled selected>Select Cyberwind Category</option>
                            @foreach ($cyberwindCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <!-- Cyberwind Title Form -->
                    <div class="l3-form form-group cyberwind_title">
                        <div class="body-title">Cyberwind Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="cyberwind_title">{{ old('cyberwind_title') }}</textarea>
                    </div>
                    <div class="l3-form form-group cyberwind_short_description">
                        <div class="body-title">Cyberwind Short Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="cyberwind_short_description">{{ old('cyberwind_short_description') }}</textarea>
                    </div>
                    <div class="l3-form form-group cyberwind_desc">
                        <div class="body-title">Cyberwind Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="cyberwind_description">{{ old('cyberwind_description') }}</textarea>
                    </div>


                    <!-- Cyberwind Form end -->

                    <!-- industries Form Start -->
                    <div class="l3-form" id="industries_form" style="display: none;">

                        <div class="body-title">Select Industries Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" style="" name="industries_type">
                            <option value="" disabled selected>Select Industries Category</option>
                            @foreach ($industryCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <!-- Industries Title Form -->
                    <div class="l3-form form-group industries_title">
                        <div class="body-title">Industries Title : <span class="tf-color-1">*</span></div>
                        <textarea class="" name="industries_title">{{ old('industries_title') }}</textarea>
                    </div>
                    <div class="l3-form form-group industries_desc">
                        <div class="body-title">Industries Description :<span class="tf-color-1">*</span></div>
                        <label><strong></strong></label>
                        <textarea class="" name="industries_description">{{ old('industries_description') }}</textarea>
                    </div>

                    <!-- industries Form End -->

                    <!-- FAQ'S Form Start -->
                    <div class="l3-form" id="faqs_form" style="display: none;">
                        <div class="body-title">Select FAQ'S Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" style="" name="faq_category_id">
                            <option value="" disabled selected>Select FAQ'S Category</option>
                            @foreach ($faqCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="l3-form form-group sub_category">
                        <div class="body-title">Faqs Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="faq_title">{{ old('title') }}</textarea>
                        
                    </div>
                    <div class="name l3-form sub_category" id="">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Sub Category Name" name="subcategory"
                            tabindex="0" value="{{ old('subcategory') }}">

                    </div>
                    <div class="l3-form form-group faqs_desc">
                        <div class="body-title">SubCategory Description : <span class="tf-color-1">*</span></div>
                        <textarea class="" name="subcategory_description">{{ old('subcategory_description') }}</textarea>
                    </div>
                    <!-- FAQ'S Form End -->

                    {{-- Blog Form Start --}}

                    <div class="l3-form" id="blog_form" style="display: none;">
                        <div class="body-title">Select Blog Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="blog_category_type">
                            <option value="" disabled selected>Select Blog Category</option>
                            @foreach ($blogCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                        <input type="text" name="blog_description" {{ old('blog_description') }}></input>
                    </div>
                    {{-- Blog Form End --}}

                    {{-- testimonials form start --}}
                    <div class="name l3-form" id="testimonial_form" style="display: none;">

                        <div class="body-title">Testimonial Title : </div>
                        <input type="text" name="testimonials_title" {{ old('testimonial_title') }}></input>
                    </div>
                    <div class="l3-form form-group testimonial_name">
                        <div class="body-title">Client Name : <span class="tf-color-1">*</span></div>
                        <input type="text" name="testimonials_name" value="{{ old('testimonial_name') }}"></input>
                    </div>
                    <div class="l3-form testimonial_designation">
                        <div class="body-title">Client Designation: <span class="tf-color-1">*</span></div>
                        <input type="text" name="designation" value="{{ old('designation') }}"></input>
                    </div>
                    <div class="l3-form  testimonials_short_description">
                        <div class="body-title">Testimonial Short Description :<span class="tf-color-1">*</span></div>
                        <textarea class="" name="testimonials_short_description">{{ old('testimonials_short_description') }}</textarea>
                    </div>
                    <div class="l3-form  testimonial_description">
                        <div class="body-title">Testimonial Description :<span class="tf-color-1">*</span></div>
                        <textarea class="" name="testimonials_description">{{ old('testimonial_description') }}</textarea>
                    </div>

                    <!-- Testimonials form ends -->

                    {{-- Incident form start --}}
                    <div class="name l3-form" id="incident_form" style="display: none;">

                        <div class="body-title">Incident Title :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="incident_title">{{ old('incident_title') }}</textarea>
                    </div>
                    <div class="l3-form form-group Video_link">
                        <div class="body-title">Video Link : <span class="tf-color-1">*</span></div>
                        <input type="text" name="Video_link" value="{{ old('Video_link') }}"> </input>
                    </div>

                    <div class="l3-form  incident_description">
                        <div class="body-title">Incident Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="incident_description">{{ old('incident_description') }}</textarea>
                    </div>


                    <!-- Incident form ends -->


                    {{-- CEH kit form start --}}
                    <div class="l3-form form-group cehkit_form" id="cehkit_form">
                        <div class="body-title">CEH KIT Title (Top) : <span class="tf-color-1"></span></div>
                        <textarea class="summernote" name="main_title">{{ old('main_title') }}</textarea>
                    </div>
                    <div class="form-group l3-form  kit_title">
                        <div class="body-title">Sub Title :<span class="tf-color-1">*</span></div>
                        <input type="text" name="kit_title" id="">{{ old('kit_title') }}</input>
                    </div>
                    <div class="l3-form  ceh_description">
                        <div class="body-title">CEH KIT Description :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="ceh_description">{{ old('ceh_description') }}</textarea>
                    </div>


                    {{-- CEH kit form End --}}

                    <!-- Program Form Start -->
                    <div class="l3-form" id="program_form" style="display: none;">
                        <div class="body-title">Select Program Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" style="" name="program_category_id">
                            <option value="" disabled selected>Select Program Category</option>
                            @foreach ($programCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="l3-form form-group program_title">
                        <div class="body-title">Program Top Title(H) :<span class="tf-color-1">*</span></div>
                        <input type="text" class="" name="program_title">{{ old('program_title') }}</input>
                    </div>
                    <div class="name l3-form program_subcategory" id="">
                        <div class="body-title">Program Sub-Category Name </div>
                        <input class="flex-grow" type="text" placeholder="Sub Category Name"
                            name="program_subcategory" tabindex="0" value="{{ old('program_subcategory') }}">
                    </div>
                    <div class="l3-form form-group program_sub_title">
                        <div class="body-title">Program Sub Title(H) :<span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="program_sub_title">{{ old('program_sub_title') }}</textarea>
                    </div>
                    <div class="l3-form form-group program_description">
                        <div class="body-title"> Description : <span class="tf-color-1">*</span></div>
                        <textarea class="summernote" name="program_description">{{ old('program_description') }}</textarea>
                    </div>
                    <!-- Program Form End -->

                    {{-- comman Image for required form start --}}
                    <fieldset class="l3-form comman_images">
                        <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="display:none; text-align: center;">
                                <img src="" class="effect8" alt="Preview Image"
                                    style="max-width: 50%; height: auto; border-radius: 5px;">
                                <button type="button" id="deleteImage" class="delete-btn">Delete</button>
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                    <span class="body-text">Drop your images here or select <span class="tf-color">click
                                            to browse</span></span>
                                    <input type="file" id="myFile" name="image" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    {{-- comman Image for required form End --}}
            </div>

            <input type="hidden" id="l3_category_type" name="l3_category_type" value="">

            <div class="bot">
                <div></div>
                <button class="tf-button w208" type="submit">Save</button>
            </div>
            </form>
        </div>

        <!-- Hidden input to store L3 category type -->

    </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

            $('.l3-form').hide();
            $('#hr').hide();
            $('.form-heading').hide();

            $('#l3_category').change(function() {

                var selectedL3Category = $(this).find("option:selected").text().trim().toLowerCase();

                // Remove special characters and spaces
                selectedL3Category = selectedL3Category.replace(/[^a-zA-Z0-9]/g, '');

                console.log("Selected L3 Category:", selectedL3Category); // Debugging

                // Hide all forms first
                $('.l3-form').hide();
                $('#hr').hide();
                $('.form-heading').hide();

                if (selectedL3Category) {
                    $('#hr').show();
                    $('.form-heading').show();

                }
                // Show the form based on selected value
                if (selectedL3Category === "overview") {
                    $('#overview_form').show();
                    $('#overview_sub_desc').show();
                    $('.overview_title').show();
                    $('#l3_category_type').val('overview'); // Set hidden input to 'overview'
                } else if (selectedL3Category === "significance") {
                    $('#significance_form').show();
                    $('.significance_desc').show();
                    $('.significance_short_description').show();
                    $('.significance_title').show();
                    $('.comman_images').show();
                    $('#l3_category_type').val('significance'); // Set hidden input to 'significance'
                } else if (selectedL3Category === "coursefeatures") {
                    $('#courseFeature_form').show();
                    $('.coursefeature_title').show();
                    $('.coursefeature_desc').show();
                    $('.course_feature_short_description').show();
                    $('.comman_images').show();
                    $('#l3_category_type').val('coursefeatures'); // Set hidden input to 'courseFeature'
                } else if (selectedL3Category === "whycyberwind") {
                    $('#cyberwind_form').show();
                    $('.cyberwind_title').show();
                    $('.cyberwind_desc').show();
                    $('.cyberwind_short_description').show();
                    $('.comman_images').show();
                    $('#l3_category_type').val('cyberwind'); // Set hidden input to 'cyberwind'
                } else if (selectedL3Category === "industries") {
                    $('#industries_form').show();
                    $('.industries_title').show();
                    $('.industries_desc').show();
                    $('.comman_images').show();
                    $('#l3_category_type').val('industries'); // Set hidden input to 'industries'
                } else if (selectedL3Category === "faqs") {
                    $('#faqs_form').show();
                    // $('.faqs_category').show();
                    $('.sub_category').show();
                    $('.faq_title').show();
                    $('.faqs_desc').show();
                    $('#l3_category_type').val('faqs'); // Set hidden input to 'faqs
                } else if (selectedL3Category === "blog") {
                    $('#blog_form').show();
                    $('.blog_title').show();
                    $('#style_form').show();
                    $('#l3_category_type').val('blog'); // Set hidden input to 'blog'
                } else if (selectedL3Category === "testimonials") {
                    $('#testimonial_form').show();
                    // $('.testimonials_title').show(); 
                    $('.testimonial_name').show();
                    $('.testimonial_designation').show();
                    $('.testimonial_description').show();
                    $('.testimonials_short_description').show();
                    $('.comman_images').show();
                    $('#l3_category_type').val('testimonials'); // Set hidden input to 'testimonials'
                } else if (selectedL3Category === "incidents") {
                    $('#incident_form').show();
                    $('.Video_link').show();
                    $('.incident_description').show();
                    $('.comman_images').show();
                    $('#l3_category_type').val('incidents'); // Set hidden input to 'testimonials'

                } else if (selectedL3Category === "cehkit") {
                    $('.cehkit_form').show();
                    $('.kit_title').show();
                    $('.ceh_description').show();
                    $('.comman_images').show();
                    $('#l3_category_type').val('cehkit'); // Set hidden input to 'cehkit'
                } else if (selectedL3Category === "program") {
                    $('#program_form').show();
                    $('.program_subcategory').show();
                    $('.program_description').show();
                    $('.program_title').show();
                    $('.program_sub_title').show();
                    $('.comman_images').show();
                    $('#l3_category_type').val('program'); // Set hidden input to 'cehkit'
                } else if (selectedL3Category === "history") {
                    // $('#history_form').show();
                }
            });

            // Load Categories when Page Category changes
            $('#page_category').change(function() {
                var pageCategoryId = $(this).val();
                $('#category').html(
                    '<option value="" disabled selected>Loading...</option>'); // Loading text

                $.ajax({
                    url: "{{ route('l3-get-categories') }}",
                    type: "GET",
                    data: {
                        page_category_id: pageCategoryId
                    },
                    success: function(data) {
                        $('#category').html(
                            '<option value="" disabled selected>Select category</option>');
                        $.each(data, function(key, value) {
                            $('#category').append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    }
                });
            });

            // Load Sub-Categories when Category changes
            $('#category').change(function() {
                var categoryId = $(this).val();
                var pageCategoryId = $('#page_category').val(); // Get selected Page Category ID
                $('#sub_category').html(
                    '<option value="" disabled selected>Loading...</option>'); // Loading text

                $.ajax({
                    url: "{{ route('l3-get-subcategories') }}",
                    type: "GET",
                    data: {
                        category_id: categoryId,
                        page_category_id: pageCategoryId // Send page_category_id
                    },
                    success: function(data) {
                        $('#sub_category').html(
                            '<option value="" disabled selected>Select Sub category</option>'
                        );
                        $.each(data, function(key, value) {
                            $('#sub_category').append('<option value="' + value.id +
                                '">' + value.sub_category + '</option>');

                        });
                    }
                });
            });

            // Load L3-Categories when Sub-Category changes   
            $('#sub_category').change(function() {
                var subCategoryId = $(this).val();
                var categoryId = $('#category').val();
                var pageCategoryId = $('#page_category').val(); // Get selected Page Category ID
                $('#l3_category').html(
                    '<option value="" disabled selected>Loading...</option>'); // Loading text

                $.ajax({
                    url: "{{ route('l3-get-l3categories') }}",
                    type: "GET",
                    data: {
                        category_id: categoryId,
                        page_category_id: pageCategoryId, // Send page_category_id
                        sub_category_Id: subCategoryId
                    },
                    success: function(data) {
                        $('#l3_category').html(
                            '<option value="" disabled selected>Select L3 category</option>'
                        );
                        $.each(data, function(key, value) {
                            $('#l3_category').append('<option value="' + value.id +
                                '">' + value.l3_category + '</option>');
                        });
                    }
                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#overview_count').change(function() {
                let count = $(this).val();
                let container = $('#dynamic_overview_sections');

                container.empty(); // Clear previous forms

                for (let i = 1; i <= count; i++) {
                    let subForm = `
                   
                        <div class="body-title">Overview Sub Description ${i} :<span class="tf-color-1">*</span></div>
                        <textarea class="mr-5 summernote" name="overview_sub_descriptions[]"></textarea>
                   
            `;
                    container.append(subForm);
                }

                // Re-initialize Summernote for new textareas
                $('.summernote').summernote({
                    height: 150,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video']],
                    ]
                });
            });
        });
    </script>
@endpush
