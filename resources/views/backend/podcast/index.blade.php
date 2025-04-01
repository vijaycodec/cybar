@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All Podcasts </h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">All Podcasts</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        {{-- <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="name"
                                    tabindex="2" value="" aria-required="true" required="" />
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form> --}}
                    </div>
                    <a class="tf-button style-1 w208" href=" {{ route('podcast.create') }}">
                        <i class="icon-plus"></i>Add New</a>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>slug</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($podcasts->count() > 0)
                                @foreach ($podcasts as $podcast)
                                    <tr>
                                        <td>{{ $podcast->id }}</td>
                                        <td>{{ $podcast->category->name ?? 'N/A' }}</td> 
                                        <td>{{ $podcast->sub_category ?? 'N/A' }}</td>
                                        <td>{{ $podcast->slug ?? 'N/A' }}</td>
                                        <td>
                                            @if ($podcast->images)
                                                <img src="{{ asset('storage/uploads/backend/podcast/' . $podcast->images) }}"
                                                    alt="podcast Image" width="100">
                                            @else
                                                <span>No image available</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="list-icon-function">
                                                <button type="button" class="show"
                                                    data-id="{{ $podcast->category->name ?? 'N/A' }}"
                                                    data-sub_category="{{ $podcast->sub_category ?? 'N/A' }}"
                                                    data-video_url="{{ $podcast->video_url ?? 'N/A' }}"
                                                    data-short_desc="{{ html_entity_decode($podcast->short_desc) ?? 'N/A' }}"
                                                    data-description="{{ html_entity_decode($podcast->description) ?? 'No description available' }}">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </button>
                                                <a href="{{ route('podcast.edit', $podcast->id) }}">
                                                    <div class="item edit">
                                                        <i class="icon-edit-3"></i>
                                                    </div>
                                                </a> <button type="button" class="delete" data-id="{{ $podcast->id }}">
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

                    {{-- <!-- Pagination links -->
                    <div>
                        {!! $podcasts->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure for Read more button-->
    <div class="modal fade" id="podcastModal" tabindex="-1" aria-labelledby="podcastModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white" id="podcastModalLabel">Podcast Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                    <!-- Table Layout for Podcast Details -->
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Category Name:</td>
                                <td id="modal-podcast-name"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Sub Category:</td>
                                <td id="modal-podcast-sub_category"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Video URL:</td>
                                <td id="modal-podcast-video_url"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%; vertical-align: top;">Short Description:</td>
                                <td id="modal-podcast-short_desc"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%; vertical-align: top;">Full Description:</td>
                                <td id="modal-podcast-description"></td>
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
                var podcastId = $(this).data('id');
                var sub_category = $(this).data('sub_category');
                var video_url = $(this).data('video_url');
                var short_desc = $(this).data('short_desc');
                var fullDescription = $(this).data('description');

                // Set the full description in the modal
                $('#modal-podcast-name').text(podcastId); // to do category name instead of podcast Id 
                $('#modal-podcast-sub_category').text(sub_category);
                $('#modal-podcast-video_url').text(video_url);
                $('#modal-podcast-short_desc').text(short_desc);
                $('#modal-podcast-description').html(fullDescription);

                // Show the modal
                $('#podcastModal').modal('show');
            });


            //script for Delete
            $(document).on('click', '.delete', function() {
                var podcastId = $(this).data('id'); // Get ID from data attribute
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
                            url: "{{ route('podcast.destroy', ':id') }}".replace(':id',
                                podcastId),
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
