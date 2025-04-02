@extends('backend.layouts.app')
@section('content')

    <div class="main-content-inner">

        <div class="main-content-wrap">
            <div class="tf-section-2 mb-30">
                <div class="flex gap20 flex-wrap-mobile">
                    <div class="w-half">

                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag"></i>
                                    </div>
                                    <div>
                                        {{-- <div class="body-text mb-2">Services</div> --}}
                                        <a href="{{ route('our-services.list') }}" class="">
                                            <div class="body-text mb-2"> Services</div>
                                        </a>
                                        {{-- <h4>3</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-dollar-sign"></i>
                                    </div>
                                    <div>
                                        {{-- <div class="body-text mb-2">Trainings</div> --}}
                                        <a href="{{ route('corporate-training.list') }}" class="">
                                            <div class="body-text mb-2"> Trainings</div>
                                        </a>
                                        {{-- <h4>481.34</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag"></i>
                                    </div>
                                    <div>
                                        {{-- <div class="body-text mb-2">Pending Orders</div> --}}
                                        <a href="{{ route('resources.list') }}" class="">
                                            <div class="body-text mb-2"> Resources</div>
                                        </a>
                                        {{-- <h4>3</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-dollar-sign"></i>
                                    </div>
                                    <div>
                                        {{-- <div class="body-text mb-2">Pending Orders Amount</div> --}}
                                        <a href="{{ route('menublog.list') }}" class="">
                                            <div class="body-text mb-2"> Blog</div>
                                        </a>
                                        {{-- <h4>481.34</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="w-half">

                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag"></i>
                                    </div>
                                    <div>
                                        {{-- <div class="body-text mb-2">Delivered Orders</div> --}}
                                        <a href="{{ route('menuevent.list') }}" class="">
                                            <div class="body-text mb-2"> Event</div>
                                        </a>
                                        {{-- <h4>0</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-dollar-sign"></i>
                                    </div>
                                    <div>
                                        {{-- <div class="body-text mb-2">Delivered Orders Amount</div> --}}
                                        <a href="{{ route('menutestimonial.list') }}" class="">
                                            <div class="body-text mb-2"> Testimonials</div>
                                        </a>
                                        {{-- <h4>0.00</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag"></i>
                                    </div>
                                    <div>
                                        {{-- <div class="body-text mb-2">Canceled Orders</div> --}}
                                        <a href="{{ route('career.list') }}" class="">
                                            <div class="body-text mb-2"> Careers</div>
                                        </a>
                                        {{-- {{-- <h4>0</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-dollar-sign"></i>
                                    </div>
                                    <div>
                                        {{-- <div class="body-text mb-2">Canceled Orders Amount</div> --}}
                                        <li class="sub-menu-item">
                                            <a href="{{ route('newsletter.list') }}" class="">
                                                <div class="body-text mb-2"> News Latters</div>
                                            </a>
                                            {{-- <h4>0.00</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="wg-box">
                    {{-- <div class="flex items-center justify-between">
                        <h5>Recent Services</h5>
                        <div class="dropdown default">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                            </button>
                           
                        </div>
                    </div> --}}

                    {{-- <table class="w-full border-collapse border border-gray-300 shadow-lg rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2 text-left">Category</th>
                                <th class="border border-gray-300 px-4 py-2 text-right">Amount</th>
                                <th class="border border-gray-300 px-4 py-2 text-right">Trend</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Revenue Row -->
                            <tr class="bg-white">
                                <td class="border border-gray-300 px-4 py-2 text-right font-bold ">
                                    <div class="text-tiny"></div> Revenue
                                </td>
                                <td class="border border-gray-300 px-4 py-2 text-right font-bold">$37,802</td>
                                <td class="border border-gray-300 px-4 py-2 text-right text-green-600">
                                    <i class="icon-trending-up"></i> 0.56%
                                </td>
                            </tr>
                            
                            <!-- Order Row -->
                            <tr class="bg-white">
                                <td class="border border-gray-300 px-4 py-2 text-right font-bold">
                                    <div class="text-tiny"></div> Order
                                </td>
                                <td class="border border-gray-300 px-4 py-2 text-right font-bold">$28,305</td>
                                <td class="border border-gray-300 px-4 py-2 text-right text-green-600">
                                    <i class="icon-trending-up"></i> 0.56%
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}

                    {{-- <div class="wg-box" > --}}
                    <canvas id="pageViewsChart"></canvas>
                    {{-- </div> --}}
                </div>

            </div>
            <div class="tf-section mb-30">

                <div class="wg-box">
                    <div class="flex items-center justify-between">
                        <h5>Recent Services</h5>
                        <div class="dropdown default">
                            <a class="btn btn-secondary dropdown-toggle" href="{{ route('our-services.list') }}">
                                <span class="view-all">View all</span>
                            </a>
                        </div>
                    </div>
                    <div class="wg-table table-all-user">
                        <div class="table-responsive">
                            {{-- <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 80px">OrderNo</th>
                                        <th>Name</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Subtotal</th>
                                        <th class="text-center">Tax</th>
                                        <th class="text-center">Total</th>

                                        <th class="text-center">Status</th>
                                        <th class="text-center">Order Date</th>
                                        <th class="text-center">Total Items</th>
                                        <th class="text-center">Delivered On</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Divyansh Kumar</td>
                                        <td class="text-center">1234567891</td>
                                        <td class="text-center">$172.00</td>
                                        <td class="text-center">$36.12</td>
                                        <td class="text-center">$208.12</td>

                                        <td class="text-center">ordered</td>
                                        <td class="text-center">2024-07-11 00:54:14</td>
                                        <td class="text-center">2</td>
                                        <td></td>
                                        <td class="text-center">
                                            <a href="#">
                                                <div class="list-icon-function view-icon">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> --}}

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th>Sub Category </th>
                                            {{-- <th>Description</th> --}}
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($services->count() > 0)
                                            @foreach ($services as $index => $service)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $service->course_category->name ?? 'N/A' }}</td>
                                                    <!-- Using the relationship -->
                                                    <td>
                                                        @if ($service->images)
                                                            <img src="{{ asset('storage/uploads/backend/services/' . $service->images) }}"
                                                                alt="service Image" width="100">
                                                        @else
                                                            <a href="#">
                                                                <img src="{{ asset('uploads/backend/default/trending_default.jpg') }}"
                                                                    class="img-fluid" alt="Default Image" width="100">
                                                            </a>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        {{ $service->subcategory->sub_category }}
                                                    </td>
                                                    {{-- <td style="max-width: 400px;"> <!-- Increase width here -->
                                                        <!-- Short description (up to 10 words) -->
                                                        <span>{{ $service->description }}</span>
                                                    </td> --}}

                                                    {{-- <td>
                                                        <div class="list-icon-function">
                                                            <button type="button" class="show"
                                                                data-id="{{ $service->course_category->name ?? 'N/A' }}"
                                                                data-sub_category="{{ $service->subcategory->sub_category ?? 'N/A' }}"
                                                                data-description="{{ html_entity_decode($service->description) ?? 'N/A' }}">
                                                                <div class="item eye">
                                                                    <i class="icon-eye"></i>
                                                                </div>
                                                            </button>
                                                            <a href="{{ route('our-services.edit', $service->id) }}">
                                                                <div class="item edit">
                                                                    <i class="icon-edit-3"></i>
                                                                </div>
                                                            </a> <button type="button" class="delete"
                                                                data-id="{{ $service->id }}">
                                                                <div class="item text-danger">
                                                                    <i class="icon-trash-2"></i>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">No data found</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


@endsection

{{-- custom scripts start here --}}
{{-- custom scripts start here --}}
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('pageViewsChart').getContext('2d');

        // Define fixed colors for each page
        var pageColors = {
            'services': '#C70039', // Red
            'training': '#36A2EB', // Blue
            'resources': '#2e86c1', // Yellow
            'events': '#0bcb28', // Green
            'blogs': '#a4b910', // Orange
            'career': '#9C27B0', // Purple
            'cn-insight': '#795548', // Brown
            'newsletter': '#a431f4' // Grey
        };

        var chartData = {
            labels: @json($dates),
            datasets: [
                @foreach ($pages as $page)
                    {
                        label: "{{ ucfirst($page) }}",
                        data: @json(array_values($pageViewsData[$page] ?? [])),
                        backgroundColor: pageColors["{{ $page }}"] || '#FF6384',
                        borderColor: pageColors["{{ $page }}"] || '#FF6384',
                        borderWidth: 1
                    },
                @endforeach
            ]
        };

        new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Page Views Overview',
                        font: {
                            size: 16
                        }
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false, // Ensures correct tooltip display
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.dataset.label + ": " + tooltipItem.raw;
                            }
                        }
                    }
                },
                interaction: {
                    mode: 'index', // Ensures tooltips show correctly
                    intersect: false
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 10
                        }
                    }
                }
            }
        });
    </script>
    {{-- <script>
    var ctx = document.getElementById('pageViewsChart').getContext('2d');

    var visitorChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['New Visitors', 'Returning Visitors'],
            datasets: [{
                data: [{{ $newVisitors }}, {{ $returningVisitors }}],
                backgroundColor: ['#36A2EB', '#FFCE56']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                title: { display: true, text: 'New vs Returning Visitors' }
            }
        }
    });
</script> --}}
@endpush
