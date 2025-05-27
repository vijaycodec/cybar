@extends('backend.layouts.app')

@section('content')
    <!-- Include Summernote CSS and JS -->


    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Sub Category Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">sub Category</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">New Sub-Category</div>
                    </li>
                </ul>
            </div>

             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('sub-category.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('sub-category.list') }}">Back</a>

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
                        <div class="body-title">Select a Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow"  name="category_id" id="category" required>
                            <option value="" disabled selected>Select category</option>
                        </select>
                    </fieldset>

                    <!-- Sub-Category  -->
                    <fieldset class="name">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Category Name" id="categorySelect"  name="sub_category" tabindex="0"
                            value="" aria-required="true" required="">
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Sub  Category Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySlug" type="text" placeholder="Category Name" name="slug"
                            tabindex="0" value="{{ old('slug') }}" aria-required="true" required readonly>
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
                    url: "{{ route('get-categories') }}",
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

           
        });
    </script>
    <script>
        $(document).ready(function() {
            function slugify(text) {
                return text.toString().toLowerCase()
                    .trim()
                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                    .replace(/[^\w\-]+/g, '') // Remove all non-word characters
                    .replace(/\-\-+/g, '-'); // Replace multiple hyphens with single hyphen
            }

            $('#categorySelect').on('input', function() {
                var title = $(this).val();
                var slug = slugify(title);
                $('#categorySlug').val(slug); // Set generated slug in the input field
            });
        });
    </script>
@endpush
