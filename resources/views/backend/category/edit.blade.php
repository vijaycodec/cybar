@extends('backend.layouts.app')
@section('content')

    <div class="main-content-inner">

        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Category</h3>

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
                        <a href="{{ route('resources-category.list') }}">
                            <div class="text-tiny">Category</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit Category</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <!-- form-edit-permission -->
                <form id="category-form" class="form-new-brand form-style-1">
                    @csrf
                    @method('PUT') <!-- Using PUT method for updating -->
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href=" {{ route('resources-category.list') }}">Back</a>
                    <fieldset class="name">
                        <div class="body-title mb-10">Category Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter Category name" name="name"
                             id="categorySelect" tabindex="0" value="{{ $category->name }}">
                        <p id="name-error" class="tf-color-1 error-text"></p> <!-- Error Below Input -->
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Sub  Category Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySlug" type="text" placeholder="Category Name" name="slug"
                            tabindex="0" value="{{ $category->slug }}" aria-required="true" required readonly>
                    </fieldset>

                    {{-- <fieldset class="name">
                        <div class="body-title mb-10">Category Type <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter Category name" name="category_type"
                            id="category-name" tabindex="0" value="{{ $category->category_type }}">
                        <p id="name-error" class="tf-color-1 error-text"></p> <!-- Error Below Input -->
                    </fieldset> --}}
                    <fieldset class="name">
                        <div class="body-title">Category Type <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_type" required aria-required="true" id="category-name">
                            <option value="" disabled {{ $category->category_type ? '' : 'selected' }}>Select Category Type</option>
                            <option value="resources" {{ $category->category_type == 'resources' ? 'selected' : '' }}>Resources</option>
                            <option value="event" {{ $category->category_type == 'event' ? 'selected' : '' }}>Event</option>
                            <option value="blog" {{ $category->category_type == 'blog' ? 'selected' : '' }}>Blog</option>
                            <option value="testimonials" {{ $category->category_type == 'testimonials' ? 'selected' : '' }}>Testimonials</option>
                            <option value="careers" {{ $category->category_type == 'careers' ? 'selected' : '' }}>Careers</option>
                            <option value="newsletter" {{ $category->category_type == 'newsletter' ? 'selected' : '' }}>Newsletter</option>
                            <option value="podcast" {{ $category->category_type == 'podcast' ? 'selected' : '' }}>Podcast</option>
                            <p id="name-error" class="tf-color-1 error-text"></p>
                        </select>
                    </fieldset>


                    <fieldset class="name">
                        <div class="body-title">Category Title <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Category Title" name="title" id="title"
                            tabindex="0" value="{{ $category->title }}" aria-required="true">
                    </fieldset>

                    <p id="title-error" class="tf-color-1"></p>

                    <!-- Image Upload with Preview -->
                    <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">

                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="text-align: center;">
                                @if ($category->images)
                                    <img src="{{ asset('uploads/backend/category/' . $category->images) }}" id="preview-img"
                                        class="effect8" alt="Preview Image" style="max-width: 50%; height: auto;">
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

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Update </button>
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
        $('#category-form').on('submit', function(e) {
            e.preventDefault();
            $('#name-error').text('');
            $('#title-error').text('');

            // Validate the form before submitting
            var name = $('#category-name').val();
            var title = $('#title').val();
            var image = $('#myFile')[0].files[0]; // Get the selected image (if any)

            var hasError = false;

            if (!name) {
                $('#name-error').text('Category name is required.');
                hasError = true;
            }

            if (!title) {
                $('#title-error').text('Title is required.');
                hasError = true;
            }

            if (hasError) return; // Stop if validation fails

            // Show confirmation alert
            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to update this category!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var formDataObj = $('#category-form').serializeArray();
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
                        url: "{{ route('resources-category.update', $category->id) }}",
                        method: "POST",
                        data: formData,
                        processData: false, // Important for file upload
                        contentType: false, // Important for file upload
                        success: function(response) {
                            Swal.fire('Success!', response.message, 'success').then(() => {
                                window.location.href =
                                    "{{ route('resources-category.list') }}";
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
