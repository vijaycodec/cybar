@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>{{ isset($career) ? 'Edit Career' : 'New Career' }} Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#"><div class="text-tiny">Careers</div></a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><div class="text-tiny">{{ isset($career) ? 'Edit Career' : 'New Career' }}</div></li>
                </ul>
            </div>

            <div class="wg-box">
                <form class="form-new-brand form-style-1"
                    action="{{ isset($career) ? route('career.update', $career->id) : route('career.store') }}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @if(isset($career))
                        @method('PUT')
                    @endif

                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('career.list') }}">
                        Back</a>

                    <fieldset class="name">
                        <div class="body-title">Select Category <span class="tf-color-1">*</span></div>
                        <select class="flex-grow" name="category_id" required>
                            <option value="" disabled {{ !isset($career) ? 'selected' : '' }}>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $career->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>

                    <div class="form-group">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="subcategory" required>{{ old('subcategory', $career->subcategory ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <div class="body-title">Location <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="location" required>{{ old('location', $career->location ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <div class="body-title">Educational Background <span class="tf-color-1">*</span></div>
                        <textarea class="flex-grow" name="educational_background" required>{{ old('educational_background', $career->educational_background ?? '') }}</textarea>
                    </div>

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">{{ isset($career) ? 'Update' : 'Save' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
