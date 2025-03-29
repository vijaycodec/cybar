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
                    <div class="wg-filter flex-grow">
                        <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="name"
                                    tabindex="2" value="" aria-required="true" required="" />
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href=" {{ route('resources.create') }}">
                        <i class="icon-plus"></i>Add New</a>
                </div>

                <div class="table-responsive">
                    <table id="resourcesTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Sub Category </th>
                                <th>Image</th>
                                <th>Short Title</th>
                                <th>Slug</th>
                                <th>Description</th>
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
                                        <td style="max-width: 400px;"> <!-- Increase width here -->
                                            <!-- Short description (up to 10 words) -->
                                            <span class="description-short">
                                                {!! $resource->short_description ?? mb_strimwidth(html_entity_decode($resource->description), 0, 19, '...') !!}
                                            </span>
                                            <!-- Read More button for longer descriptions -->
                                            @if (str_word_count(strip_tags($resource->description)) > 19)
                                                <button class="btn btn-link read-more"
                                                    data-id="{{ $resource->category->name }}"
                                                    data-description="{{ html_entity_decode($resource->description) }}">Read
                                                    More</button>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="list-icon-function">
                                                <button type="button" class="show" data-id="{{ $resource->id }}">
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
                    <div>
                        {!! $resources->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
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
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                    <div class="row mb-10">
                        <div class="col-md-4 fw-bold mb-5">Resource Name:</div>
                        <div class="col-md-8" id="modal-resource-name"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Full Description:</div>
                        <div class="col-md-8" id="modal-resource-description"></div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="resourceModalShow" tabindex="-1" aria-labelledby="resourceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white" id="resourceModalLabel">Resource Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                    <div class="row mb-10">
                        <div class="col-md-4 fw-bold mb-5">Resource Name:</div>
                        <div class="col-md-8" id="resource_name"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">short Desc:</div>
                        <div class="col-md-8" id="short_desc" style="line-height: 30px;"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Full Description:</div>
                        <div class="col-md-8" id="description"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Created At:</div>
                        <div class="col-md-8" id="resources-created-at"></div>
                    </div>
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
            $(document).on('click', '.read-more', function() {
                var resourceId = $(this).data('id');
                var fullDescription = $(this).data('description');

                // Set the full description in the modal
                $('#modal-resource-name').text(resourceId); // to do category name instead of resource Id 
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

    {{-- script for update  --}}
    <script>
        $(document).ready(function() {
            // Show permission details in modal
            $(document).on('click', '.show', function() {
                var resourcesId = $(this).data('id');
                $.ajax({
                    url: "{{ route('resources.show', ':id') }}".replace(':id', resourcesId),
                    method: "GET",
                    success: function(response) {
                        // Correctly access properties with a hyphen
                        $('#resource_name').text(response
                            .resource_name); // Use default value if undefined
                        $('#short_desc').text(response.short_desc); // Handle null or undefined
                        $('#description').html(response.description);
                        $('#resources-created-at').text(response.created_at);
                        $('#resourceModalShow').modal('show');

                    },
                    error: function() {
                        Swal.fire('Error!', 'Unable to fetch resources details.', 'error');
                    }
                });
            });
        });
    </script>
@endpush
