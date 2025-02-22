@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Menu Blog</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#"><div class="text-tiny">Menu Blog</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><div class="text-tiny">Edit Menu Blog</div></li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('menublog.update', $blogs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use PUT for updating data -->

                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('menublog.list') }}">
                        Back
                    </a>

                    <!-- Category Selection -->
                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" required>
                            <option value="" disabled>Select a category</option>
                            @foreach ($all_categories as $category)
                                <option value="{{ $category->id }}" {{ $blogs->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <!-- Sub Category Name -->
                    <fieldset class="name">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Sub Category Name" name="sub_category"
                            value="{{ old('sub_category', $blogs->sub_category) }}" required>
                    </fieldset>

                    <!-- Image Upload -->
                    <fieldset>
                        <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <!-- Image preview if exists -->
                            @if($blog->image)
                                <div class="item" id="imgpreview" style="text-align: center;">
                                    <img src="{{ asset('uploads/blog/' . $blog->image) }}" class="effect8" 
                                        alt="Current Image" style="max-width: 50%; height: auto; border-radius: 5px;">
                                    <button type="button" id="deleteImage" class="delete-btn">Delete</button>
                                </div>
                            @endif

                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                    <span class="body-text">Drop your image here or select 
                                        <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="image" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Short Description -->
                    <fieldset class="name">
                        <div class="body-title">Short Description <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" style="height:90px;" placeholder="Short Description"
                            name="short_desc" required>{{ old('short_desc', $menuBlog->short_desc) }}</textarea>
                    </fieldset>

                    <!-- Long Description -->
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="summernote" name="description">
                            {{ old('description', $menuBlog->description) }}
                        </textarea>
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
