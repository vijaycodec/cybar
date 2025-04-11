@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit L3 Category Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="{{ route('l3-category.list') }}">
                            <div class="text-tiny">L3-Category</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">New L3-Category</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1"
                    action="{{ route('l3-category.update', ['id' => $l3Category->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('l3-category.list') }}">Back</a>

                    <!-- Page Category -->
                    <fieldset class="name">
                        <div class="body-title">Select Page Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="page_category_id" id="page_category" required>
                            @foreach ($page_categories as $pageCategory)
                                <option value="{{ $pageCategory->id }}"
                                    {{ $pageCategory->id == $l3Category->page_category_id ? 'selected' : '' }}>
                                    {{ $pageCategory->page_name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- Category -->
                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" id="category" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $l3Category->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- Sub Category -->
                    <fieldset class="name">
                        <div class="body-title">Select Sub-Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="sub_category_id" id="sub_category" required>
                            @foreach ($subCategories as $subCategory)
                                <option value="{{ $subCategory->id }}"
                                    {{ $subCategory->id == $l3Category->sub_category_id ? 'selected' : '' }}>
                                    {{ $subCategory->sub_category }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- L3 Category Name -->
                    <fieldset class="name">
                        <div class="body-title">L3 Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Category Name" name="l3_category_name"
                            tabindex="0" value="{{ $l3Category->l3_category }}">
                    </fieldset>

                    @php
                        $fieldKeyLabels = [
                            'overview_description' => 'Overview',
                            'significanceCategory' => 'Significance',
                            'programCategory' => 'Program',
                            'coursefeatureCategory' => 'Course Features',
                            'kit_title' => 'CEH Kit',
                            'incident_description' => 'Incidents',
                            'industryCategory' => 'Industries',
                            'cyberwindCategory' => 'Why Cyberwind',
                            'testimonials' => 'Testimonials',
                            'blogCategory' => 'Blog',
                            'FaqCategory' => 'FAQs',
                        ];
                    @endphp
                    <fieldset class="name">
                        <div class="body-title">Select a Prefer Category Type<span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="field_key" id="" required>
                            @foreach ($fieldKeyLabels as $key => $label)
                                <option value="{{ $key }}"
                                    {{ $l3Category->field_key == $key ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
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
                // alert('working');
                var pageCategoryId = $(this).val();
                $('#category').html('<option value="" disabled selected>Loading...</option>');

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
                $('#sub_category').html('<option value="" disabled selected>Loading...</option>');

                $.ajax({
                    url: "{{ route('l3-get-subcategories') }}",
                    type: "GET",
                    data: {
                        category_id: categoryId,
                        page_category_id: pageCategoryId
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
