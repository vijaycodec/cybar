@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All Resources</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">All Resources</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    {{-- <div class="wg-filter flex-grow">
                        <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="name"
                                    tabindex="2" value="" aria-required="true" required="" />
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div> --}}
                    <a class="tf-button style-1 w208" href=" {{ route('resources.create') }}">
                        <i class="icon-plus"></i>Add New</a>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Sub Category </th>
                                <th>Image</th>
                                <th>Short Title</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($resources->count() > 0)
                                @foreach ($resources as $resource)
                                    <tr>
                                        <td>{{ $resource->id }}</td>
                                        <td>{{ $resource->category->name ?? 'N/A' }}</td> <!-- Using the relationship -->
                                        <td>{{ $resource->sub_category }}</td>
                                        <td>
                                            @if ($resource->images)
                                                <img src="{{ asset('storage/uploads/backend/resources/' . $resource->images) }}"
                                                    alt="Resource Image" width="100">
                                            @else
                                                <span>No image available</span>
                                            @endif
                                        </td>
                                        <td style="max-width: 400px;"> <!-- Increase width here -->
                                            <!-- Short description (up to 10 words) -->
                                            <span>{{ $resource->short_desc }}</span>
                                        </td>
                                        <td>{{ $resource->slug ?? 'N/A' }}</td>

                                        <td>
                                            <div class="list-icon-function">
                                                <button type="button" class="Read-more"
                                                    data-id="{{ $resource->category->name ?? 'N/A' }}"
                                                    data-sub_category="{{ $resource->sub_category ?? 'N/A' }}"
                                                    data-short_desc="{{ html_entity_decode($resource->short_desc) ?? 'N/A' }}"
                                                    data-description="{{ html_entity_decode($resource->description) ?? 'No description available' }}">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </button>

                                                <a href="{{ route('resources.edit', $resource->id) }}">
                                                    <div class="item edit">
                                                        <i class="icon-edit-3"></i>
                                                    </div>
                                                </a> <button type="button" class="delete" data-id="{{ $resource->id }}">
                                                    <div class="item text-danger">
                                                        <i class="icon-trash-2"></i>
                                                    </div>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">No data found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    {{-- <div>
                        {!! $resources->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure for Read more button-->
    <div class="modal fade" id="resourceModal" tabindex="-1" aria-labelledby="resourceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white" id="resourceModalLabel">Resource Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <!-- Table Layout for Resource Details -->
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Resource Name:</td>
                                <td id="modal-resource-name"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Sub Category:</td>
                                <td id="modal-resource-sub_category"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Short Description:</td>
                                <td id="modal-resource-short_desc"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%; vertical-align: top;">Full Description:</td>
                                <td id="modal-resource-description"></td>
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
            $(document).on('click', '.Read-more', function() {
                var resourceId = $(this).data('id');
                var subcategory = $(this).data('sub_category');
                var subcategory = $(this).data('sub_category');
                var shortDescription = $(this).data('short_desc');
                var fullDescription = $(this).data('description');

                // Set the full description in the modal
                $('#modal-resource-name').text(resourceId); // to do category name instead of resource Id 
                $('#modal-resource-sub_category').html(subcategory);
                $('#modal-resource-short_desc').html(shortDescription);
                $('#modal-resource-description').html(fullDescription);

                // Show the modal
                $('#resourceModal').modal('show');
            });


            //script for Delete
            $(document).on('click', '.delete', function() {
                var resourceId = $(this).data('id'); // Get ID from data attribute
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
                            url: "{{ route('resources.destroy', ':id') }}".replace(':id',
                                resourceId),
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
