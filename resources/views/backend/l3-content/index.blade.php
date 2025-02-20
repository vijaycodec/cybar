@extends('backend.layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All L3 Content</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li><i class="icon-chevron-right"></i></li>
                    <li>
                        <div class="text-tiny">All L3 Content</div>
                    </li>
                </ul>
            </div>
            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <form class="form-search" method="GET" action="{{ route('l3-content.list') }}">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." name="search" tabindex="2"
                                    value="{{ request('search') }}" aria-required="true">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('l3-content.create') }}">
                        <i class="icon-plus"></i>Add New
                    </a>
                </div>


                <div class="wg-box">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Page Category</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>L3 Category</th>
                                    <th>Title</th>
                                    <th>Significance Category Type</th>
                                    <th>Program Type</th>
                                    <th>Course Feature Type</th>
                                    <th>Cyberwind Type</th>
                                    <th>Industry Type</th>
                                    {{-- <th>Testimonials Type</th> --}}
                                    <th>Blog Category Type</th>
                                    <th>Faqs Type</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($l3Contents as $content)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($content->pageCategory)->page_name ?? 'N/A' }}</td>
                                        <td>{{ optional($content->category)->name ?? 'N/A' }}</td>
                                        <td>{{ optional($content->subCategory)->sub_category ?? 'N/A' }}</td>
                                        <td>{{ optional($content->l3Category)->l3_category ?? 'N/A' }}</td>
                                        <td>{{ $content->overview_title ?? 'N/A' }}</td>
                                        <td>{{ optional($content->significanceCategory)->name ?? 'N/A' }}</td>
                                        <td>{{ optional($content->programCategory)->name ?? 'N/A' }}</td>
                                        <td>{{ optional($content->coursefeatureCategory)->name ?? 'N/A' }}</td>
                                        <td>{{ optional($content->cyberwindCategory)->name ?? 'N/A' }}</td>
                                        <td>{{ optional($content->industryCategory)->name ?? 'N/A' }}</td>
                                        {{-- <td>{{ optional($content->testimonials)->name ?? 'N/A' }}</td> --}}
                                        <td>{{ optional($content->blogCategory)->name ?? 'N/A' }}</td>
                                        <td>{{ optional($content->faqCategory)->name ?? 'N/A' }}</td>
                                        <td>
                                            <div class="list-icon-function">
                                                <button type="button" class="show" data-id="{{ $content->id }}">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </button>
                                                <a href="{{ route('l3-content.edit', $content->id) }}">
                                                    <div class="item edit">
                                                        <i class="icon-edit-3"></i>
                                                    </div>
                                                </a>
                                                <button type="button" class="delete" data-id="{{ $content->id }}">
                                                    <div class="item text-danger">
                                                        <i class="icon-trash-2"></i>
                                                    </div>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No L3 Content found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{-- {!! $l3Contents->withQueryString()->links('pagination::bootstrap-5') !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
