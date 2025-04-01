@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All Events</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">All Events</div>
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
                    <a class="tf-button style-1 w208" href="{{ route('menuevent.create') }}">
                        <i class="icon-plus"></i>Add New</a>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($events->count() > 0)
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $event->id }}</td>
                                        <td>{{ $event->category->name ?? 'N/A' }}</td> <!-- Using the relationship -->
                                        <td>{{ $event->sub_category ?? 'N/A' }}</td>
                                        <td>
                                            @if ($event->images)
                                                <img src="{{ asset('storage/uploads/backend/event/' . $event->images) }}"
                                                    alt="Event Image" width="100">
                                            @else
                                                <span>No image available</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="list-icon-function">
                                                <button type="button" class="show"
                                                    data-id="{{ $event->category->name ?? 'N/A' }}"
                                                    data-sub_category="{{ $event->sub_category ?? 'N/A' }}"
                                                    data-short_desc="{{ html_entity_decode($event->short_desc) ?? 'N/A' }}"
                                                    data-description="{{ html_entity_decode($event->description) ?? 'No description available' }}">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </button>
                                                <a href="{{ route('menuevent.edit', $event->id) }}">
                                                    <div class="item edit">
                                                        <i class="icon-edit-3"></i>
                                                    </div>
                                                </a> <button type="button" class="delete" data-id="{{ $event->id }}">
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
                                    <td colspan="7" class="text-center">No events found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{-- <div>
                        {!! $events->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Structure for Read more button-->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-white" id="eventModalLabel">Event Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="max-height: 70vh; overflow-y: auto;">
                    <!-- Table Layout for Event Details -->
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Event Name:</td>
                                <td id="modal-event-name"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%;">Sub Category:</td>
                                <td id="modal-event-sub_category"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%; vertical-align: top;">Short Description:</td>
                                <td id="modal-event-short_desc"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 30%; vertical-align: top;">Full Description:</td>
                                <td id="modal-event-description"></td>
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
            $(document).on('click', '.show', function() {
                var eventId = $(this).data('id');
                var subcategory = $(this).data('sub_category');
                var short_desc = $(this).data('short_desc');
                var fullDescription = $(this).data('description');

                // Set the full description in the modal
                $('#modal-event-name').text(eventId); // to do category name instead of even Id 
                $('#modal-event-sub_category').html(subcategory);
                $('#modal-event-short_desc').html(short_desc);
                $('#modal-event-description').html(fullDescription);

                // Show the modal
                $('#eventModal').modal('show');
            });

            $(document).on('click', '.delete', function() {
                var eventId = $(this).data('id');
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
                        $.ajax({
                            url: "{{ route('menuevent.destroy', ':id') }}".replace(':id',
                                eventId),
                            method: "DELETE",
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    response.message,
                                    'success'
                                ).then(() => {
                                    location.reload();
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
