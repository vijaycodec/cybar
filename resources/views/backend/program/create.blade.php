@extends('backend.layouts.app')
@section('content')
    <!-- main-content-wrap -->
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Program infomation</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#">
                            <div class="text-tiny">Program</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">New Program</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('program.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <a class="tf-button style-1 w208" style="padding-left: 75px;"
                        href=" {{ route('program.list') }}">
                        Back</a>
                    <fieldset class="name">
                        <div class="body-title"> Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Sub Category Name" id="categorySelect"  name="name" tabindex="0"
                            value="{{ old('name') }}" aria-required="true" required="">
                    </fieldset>
                    
                    <fieldset class="name">
                        <div class="body-title">Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySlug" type="text" placeholder="Category Name" name="slug"
                            tabindex="0" value="{{ old('slug') }}" aria-required="true" required readonly>
                    </fieldset>
                   
                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /main-content-wrap -->
@endsection

@push('scripts')
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
