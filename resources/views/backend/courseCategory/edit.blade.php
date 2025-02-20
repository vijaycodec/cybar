@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Category</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        {{-- <a href="{{ route('course-category.index') }}"> --}}
                            <div class="text-tiny">Course Categories</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">Edit Course Category</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1"
                    action="{{ route('course-category.update', $courseCategory->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Add this to use the PUT method for updating -->

                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('course-category.list') }}">
                        Back
                    </a>

                    <fieldset class="name">
                        <div class="body-title">Select Page Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $courseCategory->page_category == $category->id ? 'selected' : '' }}>
                                    {{ $category->page_name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" name="name" placeholder="Category Name"
                            value="{{ old('name', $courseCategory->name) }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Category Title <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" name="title" placeholder="Category Title"
                            value="{{ old('title', $courseCategory->title) }}" required>
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
    $('#category').change(function() {
        var categoryId = $(this).val();
        $('#sub_category').html('<option value="" disabled selected>Loading...</option>');

        $.ajax({
            url: "{{ route('get-categories.get') }}",
            type: "GET",
            data: { category_id: categoryId },
            success: function(data) {
                $('#sub_category').html('<option value="" disabled selected>Select Sub category</option>');
                $.each(data, function(key, value) {
                    $('#sub_category').append('<option value="' + value.id + '">' + value.name + '</option>');
                });
            }
        });
    });
</script>
@endpush
