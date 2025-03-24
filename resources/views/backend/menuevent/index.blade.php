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
                    <a class="tf-button style-1 w208" href="{{ route('menuevent.create') }}">
                        <i class="icon-plus"></i>Add New</a>
                </div>

                <div class="table-responsive">
                    <table id="eventsTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th> Sub Category Name</th>
                                <th>Image</th>
                                <th>Short Description</th>
                                <th>Description</th>
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
                                    <td style="max-width: 400px;"> <!-- Increase width here -->
                                        <!-- Short description (up to 10 words) -->
                                        <span>{{ $event->short_desc }}</span>
                                    </td>
                                    <td style="max-width: 400px;"> <!-- Increase width here -->
                                        <!-- Short description (up to 10 words) -->
                                        <span class="description-short">
                                            {!! $event->short_description ?? mb_strimwidth(html_entity_decode($event->description), 0, 19, '...') !!}
                                        </span>
                                        <!-- Read More button for longer descriptions -->
                                        @if (str_word_count(strip_tags($event->description)) > 19)
                                            <button class="btn btn-link read-more"
                                                data-id="{{ $event->category->name }}"
                                                data-description="{{ html_entity_decode($event->description) }}">Read
                                                More</button>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="list-icon-function">
                                            <button type="button" class="show" data-id="{{ $event->id }}">
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
                                    <td colspan="6" class="text-center">No events found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div>
                        {!! $events->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.read-more', function() {
                var eventId = $(this).data('id');
                var fullDescription = $(this).data('description');

                $('#modal-event-name').text(eventId);
                $('#modal-event-description').html(fullDescription);

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
                            url: "{{ route('menuevent.destroy', ':id') }}".replace(':id', eventId),
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
