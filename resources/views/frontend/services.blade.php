@extends('frontend.layouts.app')

@section('title', 'Services')

@section('content')

    <body class="with-zoom1 case2-header" id="services-page">
        <!-- Header start -->

        @include('frontend.layouts.ser-header',['categories' => $categories])

        <!-- Header end -->
        <!-- breadcrumbs -->

        <!-- breadcrumbs -->
        <!-- main section-->
        <section class="training-page desktop-view">
            <div class="container">
                <div class="row">
                    <!--  -->
                    <div class="col-md-3">
                        <div class="categories csn sidebar-fixed" id="cd-sidebar-nav">
                            <div class="cc-sidebar">
                                <div class="cat-title1">
                                    <h4>Course Categories</h4>
                                </div>
                                <ul class="case1-tab">

                                    @foreach ($categories as $category)
                                        <li ><a class="{{ $loop->first ? 'active' : ' ' }}"
                                                href="#{{ Str::slug($category->name) }}">{{ $category->name }}</a>

                                        </li>
                                    @endforeach
                                 
                                </ul>

                                <!--  -->
                                <!--                      <div class="codec-top codec-top-fixed">
                                                                                                <div class="codec-top-right">
                                                                                                   <a href="#myHeader"><i class="fa fa-arrow-up"></i>
                                                                                                      Back to Top</a>
                                                                                                </div>
                                                                                             </div> -->
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="col-md-9 ser-codec-box" id="code-content">
                        <!--  -->
                        <div class="codec-content pl-10">
                            <!--  -->
                            <!-- EC Council Accredited Certification Programs start  -->
                            @foreach ($categories as $category)
                           
                                <div id="{{ Str::slug($category->name) }}"
                                    class="tabcontent1 code-div-box">
                                    <div class="mrgn-brdr">
                                        <div class="row box-wrap">
                                            <div class="c-title">
                                                <h4 class="cat-title">{{ $category->name }}</h4>
                                                <a href="javascript:void(0)" class="course-btn show-btn" data-category="{{ $category->name }}">View All</a>
                                            </div>
                                        
                                            <!-- Display first 3 services -->
                                            @foreach ($services->where('category_id', $category->id)->take(3) as $service)
                                                <div class="col-md-4">
                                                    <div class="empower-industry-box">
                                                        <div class="cn-hover-box">
                                                            <div class="cn-hover-img">
                                                                <img src="{{ asset('uploads/backend/services/' . $service->images) }}">
                                                            </div>
                                                            <div class="cn-content">
                                                                <p>{{ $service->description }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="cn-main-content">
                                                            <h3>{{ $service->subcategory->sub_category }}</h3>
                                                            <a href="{{ route('l3-template',['sub_category_id' => $service->subcategory->id, 'pageid' => $page_id, 'category_id' => $category->id]) }}">
                                                                Know more <i class="fa fa-chevron-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        
                                            <!-- Hidden content section (chunking records in groups of 3) -->
                                            <div class="content-hide">
                                                @foreach ($services->where('category_id', $category->id)->skip(3)->chunk(3) as $chunk)
                                                    <div class="row">
                                                        @foreach ($chunk as $service)
                                                            <div class="col-md-4">
                                                                <div class="empower-industry-box">
                                                                    <div class="cn-hover-box">
                                                                        <div class="cn-hover-img">
                                                                            <img src="{{ asset('uploads/backend/services/' . $service->images) }}">
                                                                        </div>
                                                                        <div class="cn-content">
                                                                            <p>{{ $service->description }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cn-main-content">
                                                                        <h3>{{ $service->subcategory->sub_category }}</h3>
                                                                        <a href="{{ route('l3-template', ['sub_category_id' => $service->subcategory->id, 'pageid' => $page_id, 'category_id' => $category->id]) }}">
                                                                            Know more <i class="fa fa-chevron-right"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        
                                            <div class="hide-btn">
                                                <a href="javascript:void(0)">Hide Content</a>
                                            </div>
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
                    <div class="m-title m-bg{{ $index + 1 }}">
                        <h3>{{ $category->name }}</h3> <!-- Parent Category Name -->
                    </div> 
                    @php
                        $categoryServices = $services->where('category_id', $category->id)->values(); // Get services for this category
                    @endphp
                    @foreach ($categoryServices->chunk(3) as $chunkIndex => $serviceChunk)
                        <div class="ser-slider1">
                            <div id="ser-demo{{ $index + 1 }}-{{ $chunkIndex + 1 }}" class="owl-carousel owl-theme indu-moblie">
                                @foreach ($serviceChunk as $service)
                                    <div class="item">
                                        <div class="empower-industry-box">
                                            <div class="cn-hover-box">
                                                <div class="cn-hover-img">
                                                    <img src="{{ asset('uploads/backend/services/' . $service->images) }}" alt="{{ $service->subcategory->sub_category }}">
                                                </div>
                                                <div class="cn-content">
                                                    <p>{{ $service->description }}</p> 
                                                </div>
                                            </div>
                                            <div class="cn-main-content">
                                                <h3>{{ $service->subcategory->sub_category }}</h3> <!-- Subcategory Name -->
                                                <a href="{{ route('l3-template', ['sub_category_id' => $service->subcategory->id, 'pageid' => $page_id, 'category_id' => $category->id]) }}">
                                                    Know more <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="navigation-count{{ $index == 0 ? '' : $index }}-{{ $chunkIndex + 1 }}" class="count-nav-box couter-space"></div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </section>
        
                 <!-- main section end -->
            <div class="ser-h"></div>
                    <!--  -->
                    {{-- <a href="#services-page" class="scrollToTop"><i class="fa fa-arrow-up"></i></a> --}}

                    <!--  -->

                    {{-- @include('frontend.layouts.footer') --}}

</body>

@endsection

@push('scripts')
    <!-- Jquery code -->

    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js?v-1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
    @include('frontend.layouts.right-menu-js')

    <!-- Jquery code -->
    <script type="text/javascript">
        function addVersionToFiles() {
            var version = new Date().getTime();
            var links = document.getElementsByTagName('link');
            var scripts = document.getElementsByTagName('script');

            // Add version to CSS files
            for (var i = 0; i < links.length; i++) {
                var href = links[i].getAttribute('href');
                if (href && href.endsWith('.css')) {
                    links[i].setAttribute('href', href + '?v=' + version);
                }
            }

            // Add version to script files
            for (var i = 0; i < scripts.length; i++) {
                var src = scripts[i].getAttribute('src');
                if (src) {
                    scripts[i].setAttribute('src', src + '?v=' + version);
                }
            }
        }

        window.onload = function() {
            addVersionToFiles();
        };
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cd-sidebar-nav a').bind('click', function(e) {
                e.preventDefault();
                var target = $(this).attr("href");
                $('html, body').stop().animate({
                    scrollTop: $(target).offset().top - 80
                }, 600, function() {
                    // location.hash = target;
                });
                return false;
            });

        });

                $(window).scroll(function () {
    var scrollDistance = $(window).scrollTop();

    $('.code-div-box').each(function (i) {
      if ($(this).position().top - 100 <= scrollDistance) { // Adjust for header height
        $('#cd-sidebar-nav a.active').removeClass('active');
        $('#cd-sidebar-nav a').eq(i).addClass('active');
      }
    });
  }).scroll();


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
    {{-- <script type="text/javascript">
        $(function() {
            function initializeCarousel(carouselId, navigationCountId) {
                $("#" + carouselId).owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    navigationText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
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
                        updateNavigationCount(event, navigationCountId);
                    },
                    onChanged: function(event) {
                        updateNavigationCount(event, navigationCountId);
                    }
                });
            }

            function updateNavigationCount(event, navigationCountId) {
                if (!event.namespace) {
                    return;
                }
                var carousel = event.relatedTarget;
                $("#" + navigationCountId).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }

            initializeCarousel("ser-demo1", "navigation-count");
            initializeCarousel("ser-demo2", "navigation-count1");
            initializeCarousel("ser-demo3", "navigation-count2");
            initializeCarousel("ser-demo4", "navigation-count3");
            initializeCarousel("ser-demo5", "navigation-count4");
            initializeCarousel("ser-demo6", "navigation-count5");
            initializeCarousel("ser-demo7", "navigation-count6");
            initializeCarousel("ser-demo8", "navigation-count7");
            initializeCarousel("ser-demo9", "navigation-count8");
            initializeCarousel("ser-demo10", "navigation-count9");
            initializeCarousel("ser-demo11", "navigation-count10");
            initializeCarousel("ser-demo12", "navigation-count11");
            initializeCarousel("ser-demo13", "navigation-count12");
            initializeCarousel("ser-demo14", "navigation-count13");
            initializeCarousel("ser-demo15", "navigation-count14");
            initializeCarousel("ser-demo16", "navigation-count15");
        });
    </script> --}}

    <script>
        $(document).ready(function () {
            function initializeCarousel(carouselId, navigationCountId) {
            $("#" + carouselId).owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                navText: [
                    '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'
                ],
                responsive: {
                    0: { items: 1 },
                    600: { items: 1 },
                    900: { items: 1 },
                    1200: { items: 3 }
                },
                onInitialized: function (event) {
                    updateNavigationCount(event, navigationCountId);
                },
                onChanged: function (event) {
                    updateNavigationCount(event, navigationCountId);
                }
            });
    }

            function updateNavigationCount(event, navigationCountId) {
                if (!event.namespace) return;
                var carousel = event.relatedTarget;
                $("#" + navigationCountId).html(
                    (carousel.relative(carousel.current()) + 1) + "/" + carousel.items().length
                );
            }

            // 🚀 **Automatically Initialize All Carousels**
            $("[id^=ser-demo]").each(function () {
                let sliderId = $(this).attr("id");
                let countId = sliderId.replace("ser-demo", "navigation-count"); // Generate corresponding count ID
                initializeCarousel(sliderId, countId);
            });
        });

    </script>
@endpush

