@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All Significance</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li><a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Significance</div>
                        </a></li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">All Significance</div>
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
                    <a class="tf-button style-1 w208" href=" {{ route('significance.create') }}">
                        <i class="icon-plus"></i>Add New </a>
                </div>

                <div class="table-responsive">
                    <table id="blogsTable" class="table table-striped table-bordered " style="table-layout: auto;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sub Category Name</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($subcategories ->count() > 0)
                                @foreach ($subcategories  as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                       
                                       
                                        <td>
                                            <div class="list-icon-function">
                                                <button type="button" class="show" data-id="{{ $category->id }}">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </button>
                                                <a href="{{ route('significance.edit', $category->id) }}">
                                                    <div class="item edit">
                                                        <i class="icon-edit-3"></i>
                                                    </div>
                                                </a> <button type="button" class="delete" data-id="{{ $category->id }}">
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
                    <div>
                        {{-- {!! $subcategories->withQueryString()->links('pagination::bootstrap-5') !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Handle Delete action
        $(document).on('click', '.delete', function() {
            var categoryId = $(this).data('id'); // Get ID from button

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
                        url: "{{ route('significance.destroy', ':id') }}".replace(':id', categoryId),
                        method: "POST", // Laravel requires DELETE requests to be sent as POST with _method
                        data: {
                            _method: "DELETE", 
                            _token: "{{ csrf_token() }}" 
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            ).then(() => {
                                // Remove the row from the table without reloading the page
                                $('button.delete[data-id="' + categoryId + '"]').closest('tr').remove();
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
