@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All Testimonials</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">All Testimonials</div>
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
                    <a class="tf-button style-1 w208" href=" {{ route('menutestimonial.create') }}">
                        <i class="icon-plus"></i>Add New</a>
                </div>

                <div class="table-responsive">
                    <table id="blogsTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Testimonials Name</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($testimonials->count() > 0)
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->id }}</td>
                                        <td>{{ $testimonial->category->name ?? 'N/A' }}</td> 
                                        <td>{{ $testimonial->user_name ?? 'N/A' }}</td> 
                                        <td>{{ $testimonial->designation ?? 'N/A' }}</td>  
                                        <td>
                                            @if ($testimonial->images)
                                                {{-- <img src="{{ asset('uploads/backend/blog/' . $testimonial->images) }}"
                                                    alt="testimonial Image" width="100"> --}}
                                                    <img src="{{ asset('storage/uploads/backend/testimonial/' . $testimonial->images) }}" alt="testimonial Image" width="100">
                                            @else
                                                <span>No image available</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="list-icon-function">
                                                <button type="button" class="show"
                                                    data-id="{{ $testimonial->category->name ?? 'N/A' }}"
                                                    data-user_name="{{ $testimonial->user_name?? 'N/A' }}"
                                                    data-designation="{{ $testimonial->designation?? 'N/A' }}"
                                                    data-testimonial_short_description="{{ html_entity_decode($testimonial->testimonial_short_description) ?? 'N/A' }}"
                                                    data-testimonial_description="{{ html_entity_decode($testimonial->testimonial_description) ?? 'No description available' }}">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </button>
                                                <a href="{{ route('menutestimonial.edit', $testimonial->id) }}">
                                                    <div class="item edit">
                                                        <i class="icon-edit-3"></i>
                                                    </div>
                                                </a> <button type="button" class="delete" data-id="{{ $testimonial->id }}">
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
                        {!! $testimonials->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure for Read more button-->
    <div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white" id="testimonialModalLabel">testimonial Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                    <div class="row mb-10">
                        <div class="col-md-4 fw-bold mb-5">Category Name:</div>
                        <div class="col-md-8" id="modal-testimonial-category_name"></div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4 fw-bold mb-5">Testimonial Name:</div>
                        <div class="col-md-8" id="modal-testimonial-user_name"></div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4 fw-bold mb-5">Designation:</div>
                        <div class="col-md-8" id="modal-testimonial-designation"></div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4 fw-bold mb-5">Short_desc:</div>
                        <div class="col-md-8" id="modal-testimonial-testimonial_short_description"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Full Description:</div>
                        <div class="col-md-8" id="modal-testimonial-testimonial_description"></div>
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
            $(document).on('click', '.show', function() {
                var testimonial = $(this).data('id');
                var name = $(this).data('user_name');
                var designation = $(this).data('designation');
                var Short_desc = $(this).data('testimonial_short_description');
                var fullDescription = $(this).data('testimonial_description');
                // Set the full description in the modal
                $('#modal-testimonial-category_name').text(testimonial); // to do category name instead of testimonial Id =
                $('#modal-testimonial-user_name').text(name);
                $('#modal-testimonial-designation').text(designation); // to do user name instead of testimonial Id 
                $('#modal-testimonial-testimonial_short_description').text(Short_desc); 
                $('#modal-testimonial-testimonial_description').html(fullDescription);

                // Show the modal
                $('#testimonialModal').modal('show');
            });


            //script for Delete
            $(document).on('click', '.delete', function() {
                var testimonialId = $(this).data('id'); // Get ID from data attribute
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
                            url: "{{ route('menutestimonial.destroy', ':id') }}".replace(':id',
                                testimonialId),
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
