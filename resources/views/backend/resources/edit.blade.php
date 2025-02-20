@extends('backend.layouts.app')
@section('content')
    <div class="main-content-inner">

        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Resource</h3>

                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="{{ route('resources.list') }}">
                            <div class="text-tiny">Resource</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit Resource</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <!-- form-edit-permission -->
                <form id="resources-form" class="form-new-brand form-style-1">
                    @csrf
                    @method('PUT') <!-- Using PUT method for updating -->
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href=" {{ route('resources-category.list') }}">Back</a>
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href=" {{ route('resources.list') }}">Back</a>

                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" tabindex="0" required id="category_id">
                            <option value="" disabled selected>Select a category</option>
                            @foreach ($all_categories as $category)
                            <option value="{{ $category->id
                             }}"{{ $resources->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">

                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="text-align: center;">
                                @if ($resources->images)
                                    <img src="{{ asset('uploads/backend/resources/' . $resources->images) }}"
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
                        <div class="body-title">Short Description <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" style="height:90px;" type="text" placeholder="Short Description" name="short_desc"
                            id="short_desc" tabindex="0" aria-required="true" value="{{ $resources->short_desc }}">{{ $resources->short_desc }}
                        </textarea>
                    </fieldset>
                    <p id="short_desc-error" class="tf-color-1"></p>

                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="summernote" name="description" value="{{ $resources->description }}" id="description">{!! $resources->description !!}</textarea>
                    </div>
                    <p id="description-error" class="tf-color-1"></p>

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    </div>
    <!-- /main-content-wrap -->
@endsection

@push('scripts')
    <script>
        $('#resources-form').on('submit', function(e) {
            e.preventDefault();
            $('#category_id-error').text('');
            $('#short_desc-error').text('');
            $('#description-error').text('');
            // Validate the form before submitting
            var category_id = $('#category_id').val();
            var short_desc = $('#short_desc').val();
            var description = $('#description').val();
            var image = $('#myFile')[0].files[0]; // Get the selected image (if any)
            var hasError = false;

            if (!category_id) {
                $('#category_id-error').text('Category name is required.');
                hasError = true;
            }

            if (!short_desc.trim()) {

                $('#short_desc-error').text('Short_desc is required.');
                hasError = true;
            }

            if (!description.trim()) {
                $('#description-error').text('Description is required.');
                hasError = true;
            }

            if (hasError) return; // Stop if validation fails

            // Show confirmation alert
            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to update this resources!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var formDataObj = $('#resources-form').serializeArray();
                    var formData = new FormData();

                    // Append all form fields (except the image)
                    $.each(formDataObj, function(i, field) {
                        formData.append(field.name, field.value);
                    });

                    // If a new image is selected, append the new image
                    if (image) {
                        formData.append('image', image);
                    }

                    // Proceed with AJAX request
                    $.ajax({
                        url: "{{ route('resources.update', $resources->id) }}",
                        method: "POST",
                        data: formData,
                        processData: false, // Important for file upload
                        contentType: false, // Important for file upload
                        success: function(response) {
                            Swal.fire('Success!', response.message, 'success').then(() => {
                                window.location.href =
                                    "{{ route('resources.list') }}";
                            });
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                $('#name-error').text(xhr.responseJSON.errors.name[0]);
                                Swal.fire('Error!', 'Please fix validation errors.', 'error');
                            } else {
                                Swal.fire('Error!', 'Something went wrong. Try again later.',
                                    'error');
                            }
                        }
                    });
                }
            });
        });
    </script>
@endpush