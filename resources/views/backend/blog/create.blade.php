@extends('backend.layouts.app')
@section('content')
    <!-- main-content-wrap -->
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Blog infomation</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#">
                            <div class="text-tiny">Blog</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">New Blog</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('blog.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href=" {{ route('blog.list') }}">
                        Back</a>

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
                    
                    <fieldset class="name">
                        <div class="body-title"> Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Sub Category Name" id="categorySelect"  name="name" tabindex="0"
                            value="{{ old('name') }}" aria-required="true" required="">
                    </fieldset>
                    
                    <fieldset class="name">
                        <div class="body-title">Slug <span class="tf-color-1">*</span></div>
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
    <!-- /main-content-wrap -->
@endsection

@push('scripts')
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
<script>
    $(document).ready(function() {
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
    });
</script>
@endpush
