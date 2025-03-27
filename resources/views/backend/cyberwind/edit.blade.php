@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Cyberwind Sub Category Information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li><a href="#">
                            <div class="text-tiny">Edit Cyberwind </div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">New Add</div>
                    </li>
                </ul>
            </div>
            <div class="wg-box">
                <form id="category-form" class="form-new-brand form-style-1"
                    action="{{ route('cyberwind.update', $subcategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('cyberwind.list') }}">
                        Back</a>
                    <fieldset class="name">
                        <div class="body-title">Sub Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Sub Category Name" id="categorySelect"
                            name="name" value="{{ old('name', $subcategory->name) }}" required>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" id="categorySlug" type="text" placeholder="Slug" name="slug"
                            value="{{ old('slug', $subcategory->slug) }}" required readonly>
                    </fieldset>

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
                return text.toString().toLowerCase()
                    .trim()
                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                    .replace(/[^\w\-]+/g, '') // Remove all non-word characters
                    .replace(/\-\-+/g, '-'); // Replace multiple hyphens with a single hyphen
            }

            $('#categorySelect').on('input', function() {
                var title = $(this).val();
                var slug = slugify(title);
                $('#categorySlug').val(slug);
            });

            $('#category-form').on('submit', function(e) {
                e.preventDefault();

                // Clear previous error messages
                $('#name-error').text('');
                $('#slug-error').text('');

                // Validate inputs
                var name = $('#categorySelect').val().trim();
                var slug = $('#categorySlug').val().trim();
                var hasError = false;

                if (!name) {
                    $('#name-error').text('Sub Category name is required.');
                    hasError = true;
                }

                if (!slug) {
                    $('#slug-error').text('Slug is required.');
                    hasError = true;
                }

                if (hasError) return; // Stop if validation fails

                // Show confirmation alert before submission
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You are about to update this subcategory!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, update it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var formData = new FormData(this);

                        $.ajax({
                            url: "{{ route('cyberwind.update', $subcategory->id) }}",
                            method: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                Swal.fire('Success!',
                                        'Subcategory updated successfully.', 'success')
                                    .then(() => {
                                        window.location.href =
                                            "{{ route('cyberwind.list') }}";
                                    });
                            },
                            error: function(xhr) {
                                if (xhr.status === 422) {
                                    var errors = xhr.responseJSON.errors;
                                    if (errors.name) {
                                        $('#name-error').text(errors.name[0]);
                                    }
                                    if (errors.slug) {
                                        $('#slug-error').text(errors.slug[0]);
                                    }
                                    Swal.fire('Error!', 'Please fix validation errors.',
                                        'error');
                                } else {
                                    Swal.fire('Error!',
                                        'Something went wrong. Try again later.',
                                        'error');
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            function slugify(text) {
                return text.toString().toLowerCase()
                    .trim()
                    .replace(/\s+/g, '-')
                    .replace(/[^\w\-]+/g, '')
                    .replace(/\-\-+/g, '-');
            }

            $('#categorySelect').on('input', function() {
                var title = $(this).val();
                var slug = slugify(title);
                $('#categorySlug').val(slug);
            });
        });
    </script>
@endpush
