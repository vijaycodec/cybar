@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Career Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#"><div class="text-tiny">Careers</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><div class="text-tiny">Edit Career</div></li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" id="careers-form" action="{{ route('career.update', $career->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Ensures Laravel handles it as an update request -->
                    
                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('career.list') }}">Back</a>

                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" id="category_id" name="category_id" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $career->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                
                    {{-- <div class="form-group">
                        <div class="body-title"> Sub Category Name<span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="subcategory" required>{{ old('subcategory', $career->subcategory) }}</textarea>
                    </div>  --}}

                    <fieldset class="name">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="subcategory" type="text" placeholder="Enter Sub Category Name" name="subcategory"
                            value="{{ $career->subcategory }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Category Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySlug" type="text" placeholder="Category Name" name="slug"
                            tabindex="0" value="{{ $career->slug }}" aria-required="true" required readonly>
                    </fieldset>

                    <div class="form-group">
                        <div class="body-title"> Location<span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" id="location" name="location" required>{{ old('location', $career->location) }}</textarea>
                    </div> 

                    <div class="form-group">
                        <div class="body-title"> Educational Background <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" id="educational_background" name="educational_background" required>{{ old('educational_background', $career->educational_background) }}</textarea>
                    </div>

                    <fieldset>
                        <div class="body-title">Upload Thumbnails Images <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            @if($career->images)
                                <div class="item" id="imgpreview" style="text-align: center;">
                                    <img src="{{ asset('storage/uploads/backend/career/'.$career->images) }}" class="effect8" alt="Preview Image" style="max-width: 50%; height: auto; border-radius: 5px;">
                                    <button type="button" id="deleteImage" class="delete-btn">Delete</button>
                                </div>
                            @endif
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                    <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="image" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label><strong> Short Description :</strong></label>
                        <textarea class="ckeditor" id="short_desc" name="short_desc">{{ old('short_desc', $career->short_desc) }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="ckeditor" id="description" name="description">{{ old('description', $career->description) }}</textarea>
                    </div>

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
        $('#careers-form').on('submit', function(e) {
            e.preventDefault();
            $('#category_id-error').text('');
            $('#subcategory-error').text('');
            $('#location-error').text('');
            $('#educational_background-error').text('');
            $('#short_desc-error').text('');
            $('#description-error').text('');
            // Validate the form before submitting
            var category_id = $('#category_id').val();
            var category_id = $('#sub_category').val();
            var category_id = $('#location').val();
            var category_id = $('#educational_background').val();
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
                    var formDataObj = $('#careers-form').serializeArray();
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
                        url: "{{ route('career.update', $career->id) }}",
                        method: "POST",
                        data: formData,
                        processData: false, // Important for file upload
                        contentType: false, // Important for file upload
                        success: function(response) {
                            Swal.fire('Success!', response.message, 'success').then(() => {
                                window.location.href =
                                    "{{ route('career.list') }}";
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

    <script>
        $(document).ready(function() {
            function slugify(text) {
                if (typeof text !== 'string') text = ''; // Ensure text is always a string
                return text.toLowerCase()
                    .trim()
                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                    .replace(/[^\w\-]+/g, '') // Remove all non-word characters
                    .replace(/\-\-+/g, '-'); // Replace multiple hyphens with a single hyphen
            }

            $('#subcategory').on('input', function() {
                var title = $(this).val() || ''; // Ensure title is never undefined
                title = String(title); // Explicitly convert title to a string
                var slug = slugify(title);
                $('#categorySlug').val(slug); // Update slug field dynamically
            });
        });
    </script>
@endpush
