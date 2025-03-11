@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit SEO Detail</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">SEO Detail</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">Edit SEO Detail</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-style-1" action="{{ route('seo-details.update', $seoDetail->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('seo-details.list') }}">Back</a>

                    <fieldset class="name">
                        <div class="body-title">Select Page Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="page_category_id" id="page_category" required>
                            <option value="" disabled selected>Select page category</option>
                            @foreach ($page_categories as $pageCategory)
                                <option value="{{ $pageCategory->id }}"
                                    {{ isset($seoDetail->page_category_id) && $seoDetail->page_category_id == $pageCategory->id ? 'selected' : '' }}>
                                    {{ $pageCategory->page_name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>


                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" id="category" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $seoDetail->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Select Sub Course <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="sub_category_id" id="sub_category" required>
                            <option value="" disabled>Select Sub category</option>
                            @foreach ($subCategories as $subCategory)
                                <option value="{{ $subCategory->id }}"
                                    {{ $subCategory->id == $seoDetail->sub_category_id ? 'selected' : '' }}>
                                    {{ $subCategory->sub_category }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Template Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" name="template_name"
                            value="{{ $seoDetail->template_name }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">SEO Title <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" name="seo_title" value="{{ $seoDetail->seo_title }}"
                            required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">SEO Description <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" name="seo_description"
                            value="{{ $seoDetail->seo_description }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">SEO Keywords <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" name="seo_keywords" value="{{ $seoDetail->seo_keywords }}"
                            required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Google Analytics <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" name="google_analytics"
                            value="{{ $seoDetail->google_analytics }}" required>
                    </fieldset>

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Update</button>
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
            $('#sub_category').html('<option value="" disabled selected>Loading...</option>');

            $.ajax({
                url: "{{ route('seo-get-subcategories') }}",
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
