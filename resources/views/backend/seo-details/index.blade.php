@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All SEO</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">SEO</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">All SEO</div>
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
                    <a class="tf-button style-1 w208" href=" {{ route('seo-details.create') }}">
                        <i class="icon-plus"></i>Add New</a>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Page Category</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Template Name</th>
                                <th>SEO Title</th>
                                <th>SEO Description</th>
                                <th>SEO Keywords</th>
                                <th>Google Analytics</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($seodetails->count() > 0)
                                @foreach ($seodetails as $seodetail)
                                    <tr>
                                        <td>{{ $seodetail->id }}</td>
                                        <td>{{ $seodetail->seopageCategory->page_name ?? 'N/A' }}</td>
                                        <td>{{ $seodetail->seocategory->name ?? 'N/A' }}</td>
                                        <td>{{ $seodetail->seosubCategory->sub_category ?? 'N/A' }}</td>
                                        <td>{{ $seodetail->template_name }}</td>
                                        <td>{{ $seodetail->seo_title }}</td>
                                        <td>{{ $seodetail->seo_description }}</td>
                                        <td>{{ $seodetail->seo_keywords }}</td>
                                        <td>{{ $seodetail->google_analytics }}</td>  
                                       
                                       
                                        <td>
                                            <div class="list-icon-function">
                                                <button type="button" class="show" data-id="{{ $seodetail->id }}">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </button>
                                                <a href="{{ route('seo-details.edit', $seodetail->id) }}">
                                                    <div class="item edit">
                                                        <i class="icon-edit-3"></i>
                                                    </div>
                                                </a> <button type="button" class="delete" data-id="{{ $seodetail->id }}">
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
                                    <td colspan="10" class="text-center">No data found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    {{-- <div>
                        {!! $seodetails->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure for Read more button-->
    <div class="modal fade" id="seodetailModal" tabindex="-1" aria-labelledby="seodetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white" id="seodetailModalLabel">seodetail Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                    <div class="row mb-10">
                        <div class="col-md-4 fw-bold mb-5">seodetail Name:</div>
                        <div class="col-md-8" id="modal-seodetail-user_name"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Full Description:</div>
                        <div class="col-md-8" id="modal-seodetail-description"></div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="seodetailModalShow" tabindex="-1" aria-labelledby="seodetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white" id="seodetailModalLabel">seodetail Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                    <div class="row mb-10">
                        <div class="col-md-4 fw-bold mb-5">seodetail Name:</div>
                        <div class="col-md-8" id="seodetail_name"></div>
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
                        <div class="col-md-8" id="seodetails-created-at"></div>
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
            var categoryName = $(this).data('category'); // Get category name
            var fullDescription = $(this).data('description');

            // Set the category name in the modal instead of seodetailId
            $('#modal-blog-name').text(categoryName);
            $('#modal-seodetail-description').html(fullDescription);

            // Show the modal
            $('#seodetailModal').modal('show');
        });

        // Script for Delete
        $(document).on('click', '.delete', function() {
            var seodetailId = $(this).data('id'); // Get ID from data attribute
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
                        url: "{{ route('seo-details.destroy', ':id') }}".replace(':id', seodetailId),
                        method: "POST", // Use POST instead of DELETE (Laravel handles it with _method)
                        data: {
                            _method: "DELETE", // Laravel's way to handle DELETE requests
                            _token: "{{ csrf_token() }}" // CSRF Token
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            ).then(() => {
                                location.reload(); // Reload the page or update the DOM
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
                var seodetailsId = $(this).data('id');
                $.ajax({
                    url: "{{ route('seo-details.show', ':id') }}".replace(':id', seodetailsId),
                    method: "GET",
                    success: function(seodetail) {
                        // Correctly access properties with a hyphen
                        $('#seodetail_name').text(seodetail
                            .seodetail_name); // Use default value if undefined
                        $('#short_desc').text(response.short_desc); // Handle null or undefined
                        $('#description').html(response.description);
                        $('#seodetails-created-at').text(response.created_at);
                        $('#seodetailModalShow').modal('show');

                    },
                    error: function() {
                        Swal.fire('Error!', 'Unable to fetch seodetails details.', 'error');
                    }
                });
            });
        });
    </script>
@endpush
