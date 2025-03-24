@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit News Letters Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">News Letters</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">Edit News Letters </div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" id="newsletter-form" action="{{ route('newsletter.update', $newsletter->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href="{{ route('newsletter.list') }}">Back</a>

                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" id="category_id" name="category_id" required>
                            <option value="" disabled selected>Select a category</option>
                            @foreach ($all_categories as $category)
                                <option
                                    value="{{ $category->id }}"{{ $newsletter->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="sub_category" type="text" placeholder="Enter Sub Category Name" name="sub_category"
                            value="{{ $newsletter->sub_category }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Category Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySlug" type="text" placeholder="Category Name" name="slug"
                            tabindex="0" value="{{ $newsletter->slug }}" aria-required="true" required readonly>
                    </fieldset>

                    <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">

                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="text-align: center;">
                                @if ($newsletter->images)
                                    <img src="{{ asset('storage/uploads/backend/newsletter/' . $newsletter->images) }}" id="preview-img"
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

                    <fieldset class="name">
                        <div class="body-title">Short Description <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" style="height:90px;" type="text" placeholder="Short Description" name="short_desc"
                            id="short_desc" tabindex="0" aria-required="true" value="{{ $newsletter->short_desc }}">{{ $newsletter->short_desc }}
                        </textarea>
                    </fieldset>

                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="summernote" name="description" value="{{ $newsletter->description }}" id="description">{!! $newsletter->description !!}</textarea>
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
        $('#newsletter-form').on('submit', function(e) {
            e.preventDefault();
            $('#category_id-error').text('');
            $('#sub_category-error').text('');
            $('#short_desc-error').text('');
            $('#description-error').text('');
            // Validate the form before submitting
            var category_id = $('#category_id').val();
            var category_id = $('#sub_category').val();
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
                    var formDataObj = $('#newsletter-form').serializeArray();
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
                        url: "{{ route('newsletter.update', $newsletter->id) }}",
                        method: "POST",
                        data: formData,
                        processData: false, // Important for file upload
                        contentType: false, // Important for file upload
                        success: function(response) {
                            Swal.fire('Success!', response.message, 'success').then(() => {
                                window.location.href =
                                    "{{ route('newsletter.list') }}";
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

            $('#sub_category').on('input', function() {
                var title = $(this).val() || ''; // Ensure title is never undefined
                title = String(title); // Explicitly convert title to a string
                var slug = slugify(title);
                $('#categorySlug').val(slug); // Update slug field dynamically
            });
        });
    </script>
@endpush
