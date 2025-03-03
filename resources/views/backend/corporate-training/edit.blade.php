@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Corporate Training</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="#"><div class="text-tiny">Dashboard</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#"><div class="text-tiny">Corporate training</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><div class="text-tiny">Edit Corporate training</div></li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('corporate-training.update', $corporateTraining->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('corporate-training.list') }}">
                        Back
                    </a>

                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" id="category" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $corporateTraining->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Select Sub-Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="sub_category_id" id="sub_category" required>
                            <option value="" disabled>Select a sub-category</option>
                            @foreach ($subCategories as $subCategory)
                                <option value="{{ $subCategory->id }}" {{ $subCategory->id == $corporateTraining->sub_category_id ? 'selected' : '' }}>
                                    {{ $subCategory->sub_category }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">

                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="text-align: center;">
                                @if ($corporateTraining->images)
                                    <img src="{{ asset('uploads/backend/corporate_training/' . $corporateTraining->images) }}"
                                        id="preview-img" class="effect8" alt="Preview Image"
                                        style="max-width: 50%; height: auto;">
                                    <!-- Adjusted image width -->
                                    <button type="button" id="deleteImage" class="delete-btn">Delete</button>
                                @else
                                    <img src="" id="preview-img" class="effect8"
                                        style="display:none; max-width: 50%; height: auto;">
                                @endif
                            </div>

                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                    <span class="body-text">Drop your images here or select <span class="tf-color">click to
                                            browse</span></span>
                                    <input type="file" id="myFile" name="image" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">Description <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" style="height:90px;" name="description" required>{{ old('description', $corporateTraining->description) }}</textarea>
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
        let categoryId = {{ $corporateTraining->category_id }};
        let subCategoryId = {{ $corporateTraining->sub_category_id }};

        function loadSubCategories(categoryId, selectedSubCategory) {
            $('#sub_category').html('<option value="" disabled selected>Loading...</option>');
            $.ajax({
                url: "{{ route('get-categories.get') }}",
                type: "GET",
                data: { category_id: categoryId },
                success: function(data) {
                    $('#sub_category').html('<option value="" disabled selected>Select Sub category</option>');
                    $.each(data, function(key, value) {
                        $('#sub_category').append('<option value="' + value.id + '" ' + (value.id == selectedSubCategory ? 'selected' : '') + '>' + value.sub_category + '</option>');
                    });
                }
            });
        }

        loadSubCategories(categoryId, subCategoryId);

        $('#category').change(function() {
            let categoryId = $(this).val();
            loadSubCategories(categoryId, null);
        });
    });
</script>
@endpush
