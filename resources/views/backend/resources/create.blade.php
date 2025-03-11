@extends('backend.layouts.app')

@section('content')
    <!-- Include Summernote CSS and JS -->


    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Resources Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">Resources</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">New Resource</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('resources.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href=" {{ route('resources.list') }}">
                        Back</a>
                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" tabindex="0" required>
                            <option value="" disabled selected>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    {{-- <fieldset class="name">
                            <div class="body-title">Short title <span class="tf-color-1">*</span></div>
                            <textarea class="flex-grow" style="height:90px;" placeholder="Short Description" name="short_desc" tabindex="0" id="categorySelect"
                                value="" aria-required="true" required="">{{ old('short_desc') }}
                            </textarea>
                        </fieldset> --}}

                    <fieldset class="name">
                        <div class="body-title">Short title <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySelect" type="text" placeholder="Short Description"
                            name="short_desc" tabindex="0" value="{{ old('short_desc') }}" aria-required="true" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Category Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySlug" type="text" placeholder="Category Name" name="slug"
                            tabindex="0" value="{{ old('slug') }}" aria-required="true" required readonly>
                    </fieldset>

                    <fieldset>
                        <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="display:none; text-align: center;">
                                <img src="" class="effect8" alt="Preview Image"
                                    style="max-width: 50%; height: auto; border-radius: 5px;">
                                <button type="button" id="deleteImage" class="delete-btn">Delete</button>
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


                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="summernote" name="description">{{ old('description') }}</textarea>
                    </div>

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- jQuery script to generate slug on change -->
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
