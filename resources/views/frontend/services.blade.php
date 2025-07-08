@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])

@section('content')
    {{-- <style>
        .cn-hover-img img {
            width: 100%;
            height: auto;
            object-fit: contain;
            /* Ensures the full image is visible */
            display: block;
        }
    </style> --}}

    <style>
        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .skeleton-box {
            position: relative;
            overflow: hidden;
            background: linear-gradient(90deg, #e0e0e0 25%, #f5f5f5 50%, #e0e0e0 75%) !important;
            background-size: 200% 100% !important;
            animation: shimmer 1.5s infinite;
            color: transparent !important;
            border-radius: 4px;
        }

        .m-title.skeleton-box * {
            color: transparent !important;
        }

        .skeleton-hide {
            visibility: hidden;
        }
    </style>

    <body class="case2-header" id="services-page">
        <!-- Header start -->

        @include('frontend.layouts.ser-header', ['categories' => $categories])

        <!-- Header end -->
        <!-- breadcrumbs -->

        <!-- breadcrumbs -->
        <!-- main section-->
        <section class="training-page desktop-view">
            <div class="container">
                <div class="row">
                    <!--  -->
                    <div class="col-sm-6 col-md-3 filtercatsec ">
                        <div class="categories training_cat">
                            <div class="cc-sidebar">
                                <div class="categorytitle sign-arrow">Course Categories</div>
                                <div class="ecsp_div">
                                    <ul class="tab2">
                                        @foreach ($categories as $category)
                                            <li id="li_border">
                                                <a class="tablinks1 {{ $loop->first ? 'active' : ' ' }}"
                                                    href="#{{ Str::slug($category->name) }}"
                                                    onclick="openCity(event, '{{ Str::slug($category->name) }}')">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="col-sm-6 col-md-9">
                        <div id="code-content">
                            <!--  -->
                            @foreach ($categories as $category)
                                <div id="{{ Str::slug($category->name) }}" class="tabcontent1"
                                    style="display:{{ $loop->first ? 'block' : ' ' }};">
                                    <div class="mrgn-brdr">
                                        <div class="row box-wrap">

                                            <h4 class="cat-title">
                                                {{ $category->name }}
                                            </h4>

                                            <!-- Display first 3 services -->
                                            @foreach ($services->where('category_id', $category->id)->all() as $service)
                                                <div class="col-md-4">
                                                    <div class="empower-industry-box">
                                                        <div class="cn-hover-box">
                                                            <div class="cn-hover-img">
                                                                <img
                                                                    src="{{ asset('storage/uploads/backend/trainings/' . $service->images) }}">
                                                            </div>
                                                            <div class="cn-content">
                                                                <p>{{ $service->description }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="cn-main-content">
                                                            <h3>{{ $service->subcategory->sub_category }}</h3>
                                                            <a
                                                                href="{{ route('l3-template', ['sb' => $service->subcategory->id, 'pg' => $page_id, 'ct' => $category->id]) }}">
                                                                Know more <i class="fa fa-chevron-right"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--  -->
                    </div>
                    <!--  -->
                </div>
            </div>
        </section>
        <section class="training-page training-page-m mobile-view">
            @foreach ($categories as $index => $category)
                <div class="m-container" id="m-{{ Str::slug($category->name) }}">
                    <!-- Skeleton Title -->
                    <div class="m-title m-bg{{ $index + 1 }} skeleton-box" data-skeleton>
                        <h3>{{ $category->name }}</h3>
                    </div>

                    @php
                        $categoryServices = $services->where('category_id', $category->id)->values(); // Get services for this category
                    @endphp

                    @foreach ($categoryServices->chunk(5) as $chunkIndex => $serviceChunk)
                        <div class="ser-slider1">
                            <div id="ser-demo{{ $index + 1 }}-{{ $chunkIndex + 1 }}"
                                class="owl-carousel owl-theme indu-moblie">
                                @foreach ($serviceChunk as $service)
                                    <div class="item">
                                        <div class="empower-industry-box skeleton-box" data-skeleton>
                                            <div class="cn-hover-box">
                                                <div class="cn-hover-img">
                                                    <img src="{{ asset('/storage/uploads/backend/trainings/' . $service->images) }}"
                                                        alt="{{ $service->subcategory->sub_category }}">
                                                </div>
                                                <div class="cn-content">
                                                    <p class="skeleton-box" data-skeleton>{{ $service->description }}</p>
                                                </div>
                                            </div>
                                            <div class="cn-main-content">
                                                <h3 class="skeleton-box" data-skeleton>
                                                    {{ $service->subcategory->sub_category }}</h3>
                                                <a
                                                    href="{{ route('l3-template', ['sb' => $service->subcategory->id, 'pg' => $page_id, 'ct' => $category->id]) }}">
                                                    Know more <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Navigation counter -->
                            <div id="navigation-count{{ $index + 1 }}-{{ $chunkIndex + 1 }}"
                                class="count-nav-box counter-space skeleton-hide" data-skeleton>
                                1/{{ count($serviceChunk) }}
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </section>


        <!-- main section end -->
        <div class="ser-h"></div>

        {{-- @include('frontend.layouts.footer') --}}
        <a href="#services-page" class="scrollToTop scrrttop"><i class="fa fa-arrow-up"></i></a>

    </body>

@endsection

@push('scripts')
    <!-- Jquery code -->

    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js?v-1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
    @include('frontend.layouts.right-menu-js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ecsp_div a').bind('click', function(e) {
                e.preventDefault();
                var target = $(this).attr("href");
                $('html, body').stop().animate({
                    scrollTop: $(target).offset().top - 80
                }, 100, function() {
                    // location.hash = target;
                });
                return false;
            });
        });
    </script>
    <!-- Jquery code -->

    <script type="text/javascript">



        $(document).ready(function() {

            $(".show-btn").click(function() {
                var $container = $(this).closest(".tabcontent1");
                $container.find(".content-hide").show();
                $container.find(".show-btn").hide();
                $container.find(".hide-btn").show();
            });

            $(".hide-btn").click(function() {
                var $container = $(this).closest(".tabcontent1");
                $container.find(".content-hide").hide();
                $container.find(".hide-btn").hide();
                $container.find(".show-btn").show();
            });
        });
    </script>
   

    <script>
        $(function() {
            function initializeCarousel(carouselId, navigationCountId) {
                let $carousel = $("#" + carouselId);
                let $countDisplay = $("#" + navigationCountId);

                $carousel.owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    navText: [
                        '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                        '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        900: {
                            items: 1
                        },
                        1200: {
                            items: 3
                        }
                    },
                    onInitialized: function(event) {
                        updateNavigationCount(event, $countDisplay);
                    },
                    onTranslated: function(event) {
                        updateNavigationCount(event, $countDisplay);
                    }
                });

                function updateNavigationCount(event, $countDisplay) {
                    if (!event.namespace) return;

                    let carousel = event.relatedTarget;
                    let currentIndex = carousel.relative(carousel.current()) + 1;
                    let totalItems = carousel.items().length;

                    console.log("Slider: " + navigationCountId + " | Current: " + currentIndex + " / " +
                        totalItems);

                    // âœ… Update counter dynamically
                    $countDisplay.text(currentIndex + "/" + totalItems);
                }
            }

            // âœ… Automatically initialize all carousels
            $("[id^='ser-demo']").each(function() {
                let carouselId = $(this).attr("id");
                let counterId = carouselId.replace("ser-demo", "navigation-count");
                initializeCarousel(carouselId, counterId);
            });
        });
    </script>
    <script>
        $('.cn-content').click(function() {
            $(this).css({
                "height": "0%"
            }).find('p').css({
                "display": "none"
            });
        });

        $('.cn-hover-img').click(function() {
            $(this).siblings('.cn-content').css({
                "height": "100%"
            }).find('p').css({
                "display": "block",
                "color": "#fff"
            });
        });
    </script>
    <script>
        // Handle scroll to top button click
        $('.scrrttop').on('click', function() {
            // Remove active class from all items in case1-tab
            $('.case1-tab li a').removeClass('active');
            // Add active class to first li item
            $('.case1-tab li:first-child a').addClass('active');
        });
    </script>

    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('[data-skeleton]').forEach(el => {
                el.classList.remove('skeleton-box');
                el.classList.remove('skeleton-hide'); // Reveal counter
                el.style.color = ''; // Restore text color
            });
        });
    </script>



@endpush
