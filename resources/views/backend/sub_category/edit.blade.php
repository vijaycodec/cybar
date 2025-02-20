@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Sub Category</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="{{ route('admin.dashboard') }}"><div class="text-tiny">Dashboard</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="{{ route('sub-category.list') }}"><div class="text-tiny">Sub Categories</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><div class="text-tiny">Edit Sub-Category</div></li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('sub-category.update', $subCategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('sub-category.list') }}">Back</a>

                    <!-- Page Category -->
                    <fieldset class="name">
                        <div class="body-title">Select Page Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="page_category_id" id="page_category" required>
                            <option value="" disabled>Select page category</option>
                            @foreach ($pageCategories as $pageCategory)
                                <option value="{{ $pageCategory->id }}" {{ $subCategory->page_category_id == $pageCategory->id ? 'selected' : '' }}>
                                    {{ $pageCategory->page_name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- Category (Dependent on Page Category) -->
                    <fieldset class="name">
                        <div class="body-title">Select a Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" id="category" required>
                            <option value="" disabled>Select category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $subCategory->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- Sub-Category Name -->
                    <fieldset class="name">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" name="sub_category" value="{{ old('sub_category', $subCategory->sub_category) }}" required>
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
            $('#page_category').change(function() {
                var pageCategoryId = $(this).val();
                $('#category').html('<option value="" disabled selected>Loading...</option>');

                $.ajax({
                    url: "{{ route('get-categories') }}",
                    type: "GET",
                    data: { page_category_id: pageCategoryId },
                    success: function(data) {
                        $('#category').html('<option value="" disabled selected>Select category</option>');
                        $.each(data, function(key, value) {
                            $('#category').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endpush
