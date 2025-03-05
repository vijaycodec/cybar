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
                <form class="form-new-brand form-style-1" action="{{ route('career.update', $career->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Ensures Laravel handles it as an update request -->
                    
                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('career.list') }}">Back</a>

                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $career->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                
                    <div class="form-group">
                        <div class="body-title"> Sub Category Name<span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="subcategory" required>{{ old('subcategory', $career->subcategory) }}</textarea>
                    </div> 

                    <div class="form-group">
                        <div class="body-title"> Location<span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="location" required>{{ old('location', $career->location) }}</textarea>
                    </div> 

                    <div class="form-group">
                        <div class="body-title"> Educational Background <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="educational_background" required>{{ old('educational_background', $career->educational_background) }}</textarea>
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
                        <textarea class="summernote" name="short_desc">{{ old('short_desc', $career->short_desc) }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="summernote" name="description">{{ old('description', $career->description) }}</textarea>
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
