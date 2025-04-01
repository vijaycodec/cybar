@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All Sub Category List</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">All Sub Category List</div>
                    </li>
                </ul>
            </div>
            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    {{-- <div class="wg-filter flex-grow">
                        <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="name"
                                    tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div> --}}
                    <a class="tf-button style-1 w208" href=" {{ route('sub-category.create') }}">
                        <i class="icon-plus"></i>Add new</a>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Page Category</th>
                                <th>Category</th>
                                <th>Sub Category Name</th>
                                <th>slug</th>


                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700">
                            @forelse ($subCategories as $index => $subCategory)
                                <tr class="border-t">
                                    <td>{{$subCategory->id }}
                                    </td>
                                    <td>{{ $subCategory->pageCategory->page_name ?? 'N/A' }}</td>
                                    <td>{{ $subCategory->category->name ?? 'N/A' }}</td>
                                    <td>{{ $subCategory->sub_category }}</td>
                                    <td>{{ $subCategory->slug }}</td>
                                    <td style="padding: 10px;">
                                        <div class="list-icon-function">
                                            <button type="button" class="show"
                                                data-id="{{ $subCategory->pageCategory->page_name ?? 'N/A' }}"
                                                data-name="{{ $subCategory->category->name  ?? 'N/A' }}"
                                                data-sub_category="{{ $subCategory->sub_category ?? 'N/A' }}">
                                                <div class="item eye">
                                                    <i class="icon-eye"></i>
                                                </div>
                                            </button>
                                            <a href="{{ route('sub-category.edit', $subCategory->id) }}">
                                                <div class="item edit">
                                                    <i class="icon-edit-3"></i>
                                                </div>
                                            </a>
                                            <button type="button" class="delete" data-id="{{ $subCategory->id }}">
                                                {{-- <a href="{{ route('resources-category.destroy', $category->id) }}"> --}}
                                                <div class="item text-danger">
                                                    <i class="icon-trash-2"></i>
                                                </div>
                                                {{-- </a> --}}
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No data found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Links -->
                {{-- <div>
                    {!! $subCategories->withQueryString()->links('pagination::bootstrap-5') !!}
                </div> --}}

            </div>
        </div>
    </div>
    <!-- Modal Structure -->
    <div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="CategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white" id="CategoryModalLabel">Sub Category Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                    <!-- Table Layout for Sub Category Details -->
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Page Name:</td>
                                <td id="category-page_name"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Category Name:</td>
                                <td id="category-name"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Sub Category:</td>
                                <td id="category-sub_category"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Handle Read More button click
            $(document).on('click', '.show', function() {
                var subcategoryId = $(this).data('id');
                var name = $(this).data('name');
                var sub_category = $(this).data('sub_category');
                // Set the full description in the modal
                $('#category-page_name').text(subcategoryId); // to do category name instead of podcast Id 
                $('#category-name').text(name);
                $('#category-sub_category').text(sub_category);
                // Show the modal
                $('#CategoryModal').modal('show');
            });


            //script for Delete
            $(document).on('click', '.delete', function() {
                var subcategoryId = $(this).data('id'); // Get ID from data attribute
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Perform AJAX request to delete
                        $.ajax({
                            url: "{{ route('sub-category.destroy', ':id') }}".replace(':id',
                                subcategoryId),
                            method: "DELETE",
                            data: {
                                _token: "{{ csrf_token() }}" // CSRF Token
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    response.message,
                                    'success'
                                ).then(() => {
                                    location
                                        .reload(); // Reload the page or update the DOM
                                });
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'Unable to delete. Please try again later.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
