@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Testimonial</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="">
                            <div class="text-tiny">Dashboard</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="">
                            <div class="text-tiny">Testimonials</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">Edit Testimonial</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" id="testimonials-form"
                    action="{{ route('menutestimonial.update', $testimonials->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('menutestimonial.list') }}">Back</a>

                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" id="category_id" name="category_id" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $testimonials->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Testimonial Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="user_name" type="text" placeholder="Testimonials Name"
                            name="user_name" value="{{ old('user_name', $testimonials->user_name) }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Designation <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="designation" type="text" placeholder="Designation"
                            name="designation" value="{{ old('designation', $testimonials->designation) }}" required>
                    </fieldset>

                    {{-- <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <div class="item" id="imgpreview" style="{{ $testimonials->image ? 'display:block' : 'display:none' }}; text-align: center;">
                                @if ($testimonials->images)
                                    <img src="{{ asset('storage/uploads/backend/testimonial/'.$testimonials->images) }}" class="effect8" alt="Preview Image"
                                         style="max-width: 50%; height: auto; border-radius: 5px;">
                                    <button type="button" id="deleteImage" class="delete-btn">Delete</button>
                                @endif
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                    <span class="body-text">Drop your image here or <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="image" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset> --}}

                    <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">

                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="text-align: center;">
                                @if ($testimonials->images)
                                    <img src="{{ asset('storage/uploads/backend/testimonial/' . $testimonials->images) }}"
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
                        <textarea class="flex-grow" id="short_desc" placeholder="Short Description" name="short_desc" required>{{ old('short_desc', $testimonials->testimonial_short_description) }}</textarea>
                    </fieldset>

                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="flex-grow" id="description" name="description">{{ old('description', $testimonials->testimonial_description) }}</textarea>
                    </div>

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script>
        document.getElementById('deleteImage').addEventListener('click', function() {
            document.getElementById('imgpreview').style.display = 'none';
            document.getElementById('myFile').value = '';
        });
    </script> --}}
@endsection
@push('scripts')
    <script>
        $('#testimonials-form').on('submit', function(e) {
            e.preventDefault();
            $('#category_id-error').text('');
            $('#user_name-error').text('');
            $('#short_desc-error').text('');
            $('#description-error').text('');
            // Validate the form before submitting
            var category_id = $('#category_id').val();
            var category_id = $('#user_name').val();
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
                    var formDataObj = $('#testimonials-form').serializeArray();
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
                        url: "{{ route('menutestimonial.update', $testimonials->id) }}",
                        method: "POST",
                        data: formData,
                        processData: false, // Important for file upload
                        contentType: false, // Important for file upload
                        success: function(response) {
                            Swal.fire('Success!', response.message, 'success').then(() => {
                                window.location.href =
                                    "{{ route('menutestimonial.list') }}";
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
