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
                <form class="form-new-brand form-style-1" action="{{ route('l3-content.UpdateSwap', $l3Content->id) }}"
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

                    <input type="hidden" name="RecordsID" value="{{ $RecordsID }}">

                    
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

    {{-- <script>
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
                            <textarea id="overview_sub_description_${i + 1}" class="mr-5 ckeditor" name="overview_sub_descriptions[]">${content}</textarea>
                        </div>
                    `;

                    container.append(subForm);
                }

                // Re-initialize ckeditor for new textareas
                $('.ckeditor').ckeditor({
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
    </script> --}}

@endpush
