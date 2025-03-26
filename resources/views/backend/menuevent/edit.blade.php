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
                <form class="form-new-brand form-style-1" action="{{ route('menuevent.update', $events->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('menuevent.list') }}">
                        Back
                    </a>

                    <!-- Select Category -->
                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" required>
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
                        <input class="flex-grow" id="sub_category" type="text" placeholder="Enter Sub Category Name" name="sub_category"
                            value="{{ $events->sub_category }}" required>
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
                                    <img src="{{ asset('storage/uploads/backend/event/' . $events->images) }}" id="preview-img"
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

                    <!-- Short Description -->
                    <fieldset class="name">
                        <div class="body-title">Short Description <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" style="height:90px;" placeholder="Short Description" name="short_desc" required>{{ old('short_desc', $events->short_desc) }}</textarea>
                    </fieldset>

                    <!-- Description -->
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="summernote" name="description">
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