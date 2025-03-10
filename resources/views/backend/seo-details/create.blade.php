@extends('backend.layouts.app')

@section('content')
    <!-- Include Summernote CSS and JS -->


    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>SEO Details</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">SEO Detail</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">New SEO Detail</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('seo-details.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('seo-details.list') }}">Back</a>

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
                        <div class="body-title">Select Course<span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" id="category" >
                            <option value="" disabled selected>Select category</option>
                        </select>
                    </fieldset>
                    
                    <!-- Sub Category (Dependent on Category) -->
                    <fieldset class="name">
                        <div class="body-title">Select Sub Course <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="sub_category_id" id="sub_category" >
                            <option value="" disabled selected>Select Sub category</option>
                        </select>
                    </fieldset>

                    <!-- Sub-Category  -->
                    <fieldset class="name">
                        <div class="body-title">Template Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="template Name" name="template_name" tabindex="0"
                            value="{{ old('template_name') }}" aria-required="true" required="">
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">SEO Title <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="SEO Title" name="seo_title" tabindex="0"
                            value="{{ old('seo_title') }}" aria-required="true" required="">
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">SEO Description <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="SEO Description" name="seo_description" tabindex="0"
                            value="{{ old('seo_description') }}" aria-required="true" required="">
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">SEO keywords <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="SEO Keywords" name="seo_keywords" tabindex="0"
                            value="{{ old('seo_keywords') }}" aria-required="true" required="">
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Google Analytics <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" placeholder="Google Analytics" name="google_analytics" tabindex="0"
                            aria-required="true" required="">{{ old('google_analytics') }}</textarea>
                    </fieldset>
                    

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            // Load Categories when Page Category changes
            $('#page_category').change(function() {
                var pageCategoryId = $(this).val();
                $('#category').html(
                '<option value="" disabled selected>Loading...</option>'); // Loading text

                $.ajax({
                    url: "{{ route('seo-get-categories') }}",
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
                    url: "{{ route('seo-get-subcategories') }}",
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
        });
    </script>
@endpush
