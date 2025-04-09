@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Event Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">Event</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">Edit Event</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" id="menuevent-form"
                    action="{{ route('menuevent.update', $events->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('menuevent.list') }}">
                        Back
                    </a>

                    <!-- Select Category -->
                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" id="category" name="category_id" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($all_categories as $category)
                                <option
                                    value="{{ $category->id }}"{{ $events->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="sub_category" type="text" placeholder="Enter Sub Category Name"
                            name="sub_category" value="{{ $events->sub_category }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Category Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySlug" type="text" placeholder="Category Name" name="slug"
                            tabindex="0" value="{{ $events->slug }}" aria-required="true" required readonly>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title"> Video URL <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Video URL" name="video_url" tabindex="0"
                            value="{{ old('video_url', $events->video_url) }}" aria-required="true">
                    </fieldset>

                    <!-- Upload Images -->
                    <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">

                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="text-align: center;">
                                @if ($events->images)
                                    <img src="{{ asset('storage/uploads/backend/event/' . $events->images) }}"
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

                    <!-- Short Description -->
                    <fieldset class="name">
                        <div class="body-title">Short Description <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" id="short_desc" style="height:90px;" placeholder="Short Description" name="short_desc" required>{{ old('short_desc', $events->short_desc) }}</textarea>
                    </fieldset>

                    <!-- Description -->
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="summernote" id="description" name="description">
                            {{ old('description', $events->description) }}
                        </textarea>
                    </div>

                    <!-- Submit Button -->
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
        $('#menuevent-form').on('submit', function(e) {
            e.preventDefault();

            // Clear error messages
            $('.error-text').text('');

            let categoryId = $('#category').val();
            let subCategory = $('#sub_category').val();
            let slug = $('#categorySlug').val();
            let shortDesc = $('textarea[name="short_desc"]').val();
            let description = $('textarea[name="description"]').val();

            let hasError = false;

            if (!categoryId) {
                $('#category-error').text('Category is required.');
                hasError = true;
            }

            if (!subCategory.trim()) {
                $('#sub_category-error').text('Sub category is required.');
                hasError = true;
            }

            if (!slug.trim()) {
                $('#slug-error').text('Slug is required.');
                hasError = true;
            }

            if (!shortDesc.trim()) {
                $('#short_desc-error').text('Short description is required.');
                hasError = true;
            }

            if (!description.trim()) {
                $('#description-error').text('Description is required.');
                hasError = true;
            }

            if (hasError) return;

            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to update this event!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let formData = new FormData(this);

                    $.ajax({
                        url: "{{ route('menuevent.update', $events->id) }}",
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire('Success!', response.message ||
                                    'Event updated successfully!', 'success')
                                .then(() => {
                                    window.location.href = "{{ route('menuevent.list') }}";
                                });
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                if (errors.category_id) {
                                    $('#category-error').text(errors.category_id[0]);
                                }
                                if (errors.sub_category) {
                                    $('#sub_category-error').text(errors.sub_category[0]);
                                }
                                if (errors.slug) {
                                    $('#slug-error').text(errors.slug[0]);
                                }
                                if (errors.short_desc) {
                                    $('#short_desc-error').text(errors.short_desc[0]);
                                }
                                if (errors.description) {
                                    $('#description-error').text(errors.description[0]);
                                }
                                if (errors.image) {
                                    $('#image-error').text(errors.image[0]);
                                }
                                Swal.fire('Validation Error',
                                    'Please fix the errors and try again.', 'error');
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
