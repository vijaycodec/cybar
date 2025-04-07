@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Service Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">Services</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">Edit Services</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" id="services-form"
                    action="{{ route('our-services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('our-services.list') }}">
                        Back</a>
                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" id="category" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $service->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title">Select Sub-Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="sub_category_id" id="sub_category" required>
                            <option value="" disabled>Select category</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">

                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="text-align: center;">
                                @if ($service->images)
                                    <img src="{{ asset('storage/uploads/backend/services/' . $service->images) }}"
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
                        <textarea class="flex-grow" style="height:90px;" id="description" name="description" required>{{ old('description', $service->description) }}</textarea>
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
        $('#services-form').on('submit', function(e) {
            e.preventDefault();

            // Clear any old error messages
            $('.error-text').text('');

            let categoryId = $('#category').val();
            let subCategoryId = $('#sub_category').val();
            let description = $('#description').val();
            let imageFile = $('#myFile')[0].files[0];

            let hasError = false;

            if (!categoryId) {
                $('#category-error').text('Category is required.');
                hasError = true;
            }

            if (!subCategoryId) {
                $('#sub_category-error').text('Sub-category is required.');
                hasError = true;
            }

            if (!description.trim()) {
                $('#description-error').text('Description is required.');
                hasError = true;
            }

            if (hasError) return;

            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to update this service!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let formData = new FormData(this);

                    $.ajax({
                        url: "{{ route('our-services.update', $service->id) }}",
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire('Success!', response.message ||
                                    'Service updated successfully!', 'success')
                                .then(() => {
                                    window.location.href =
                                        "{{ route('our-services.list') }}";
                                });
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                if (errors.category_id) {
                                    $('#category-error').text(errors.category_id[0]);
                                }
                                if (errors.sub_category_id) {
                                    $('#sub_category-error').text(errors.sub_category_id[0]);
                                }
                                if (errors.description) {
                                    $('#description-error').text(errors.description[0]);
                                }
                                if (errors.image) {
                                    $('#image-error').text(errors.image[0]);
                                }
                                Swal.fire('Validation Error', 'Please correct the errors.',
                                    'error');
                            } else {
                                Swal.fire('Error!', 'Something went wrong.', 'error');
                            }
                        }
                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            let categoryId = {{ $service->category_id }};
            let subCategoryId = {{ $service->sub_category_id }};

            function loadSubCategories(categoryId, selectedSubCategory) {
                $('#sub_category').html('<option value="" disabled selected>Loading...</option>');
                $.ajax({
                    url: "{{ route('get-categories.get') }}",
                    type: "GET",
                    data: {
                        category_id: categoryId
                    },
                    success: function(data) {
                        $('#sub_category').html(
                            '<option value="" disabled selected>Select Sub category</option>');
                        $.each(data, function(key, value) {
                            $('#sub_category').append('<option value="' + value.id + '" ' + (
                                    value.id == selectedSubCategory ? 'selected' : '') +
                                '>' + value.sub_category + '</option>');
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
