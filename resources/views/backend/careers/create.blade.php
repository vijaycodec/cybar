@extends('backend.layouts.app')

@section('content')
    <!-- Include Summernote CSS and JS -->


    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3> Careers Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#"><div class="text-tiny">Careers</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><div class="text-tiny">New Careers</div></li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href=" {{ route('career.list') }}">
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
                
                    <div class="form-group">
                        <div class="body-title"> Sub Category Name<span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="subcategory" aria-required="true" required="">{{ old('subcategory') }}</textarea>
                    </div> 

                    <div class="form-group">
                        <div class="body-title"> Location<span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="location"aria-required="true" required="">{{ old('location') }}</textarea>
                    </div> 

                    <div class="form-group">
                        <div class="body-title"> Educational Background <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="educational_background" aria-required="true" required="">{{ old('educational_background') }}</textarea>
                    </div>

                    <fieldset>
                        <div class="body-title">Upload thumbnails images <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <!-- Image preview container -->
                            <div class="item" id="imgpreview" style="display:none; text-align: center;">
                                <img src="" class="effect8" alt="Preview Image" style="max-width: 50%; height: auto; border-radius: 5px;">
                                <button type="button" id="deleteImage" class="delete-btn">Delete</button>
                            </div>
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
                        <textarea class="summernote" name="short_desc">{{ old('short_desc') }}</textarea>
                    </div>
                    
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

