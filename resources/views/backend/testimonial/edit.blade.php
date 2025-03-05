@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Testimonial</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href=""><div class="text-tiny">Dashboard</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href=""><div class="text-tiny">Testimonials</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><div class="text-tiny">Edit Testimonial</div></li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('menutestimonial.update', $testimonials->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('menutestimonial.list') }}">Back</a>

                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $testimonials->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Testimonial Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Testimonials Name" name="user_name"
                            value="{{ old('user_name', $testimonials->user_name) }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Designation <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Designation" name="designation"
                            value="{{ old('designation', $testimonials->designation) }}" required>
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
                        <textarea class="flex-grow" placeholder="Short Description" name="short_desc" required>{{ old('short_desc', $testimonials->testimonial_short_description) }}</textarea>
                    </fieldset>
                    
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="flex-grow" name="description">{{ old('description', $testimonials->testimonial_description) }}</textarea>
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
