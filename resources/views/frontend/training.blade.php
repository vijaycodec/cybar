@extends('frontend.layouts.app')

@section('title', 'Training')

@section('content')

    <body class="with-zoom1" id="training-page">
        <!-- Header start -->
        @include('frontend.layouts.training-header',['categories' => $categories])
        <!-- main section-->
        <section class="training-page desktop-view">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 filtercatsec ">
                        <div class="categories training_cat">
                            <div class="cc-sidebar">
                                <div class="categorytitle sign-arrow">Course Categories</div>
                                <div class="ecsp_div">
                                    <ul class="tab2">
                                        @foreach ($categories as $category)
                                            <li id="li_border"><a class="tablinks1 {{ $loop->first ? 'active' : ' ' }}"
                                                    href="#{{ Str::slug($category->name) }}"
                                                    onclick="openCity(event, '{{ Str::slug($category->name) }}')">{{ $category->name }}</a>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-sm-6 col-md-9">
                        <div id="code-content">
                            <!-- 11 -->
                            @foreach ($categories as $category)
                                <div id="{{ Str::slug($category->name) }}" class="tabcontent1"
                                    style="display:{{ $loop->first ? 'block' : ' ' }};">
                                    <div class="mrgn-brdr">
                                        <div class="row box-wrap">

                                            <h4 class="cat-title">
                                                {{ $category->name }}
                                            </h4>

                                            <!--  -->

                                            @foreach ($trainings->where('category_id', $category->id)->all() as $index => $training)
                                                <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                                    {{-- <a href="{{route('l3-template')}}"> --}}
                                                    <div class="iconbox">
                                                        <div class="box-header">
                                                            <div class="box-icon pst-listing"></div>
                                                            <h4 class="box-title">{{ $training->subcategory->sub_category }}
                                                            </h4>
                                                        </div>

                                                        <div class="box-content" id="clr-learn">
                                                            <div class="box-content-p">
                                                                <p>{{ $training->description }}</p>
                                                            </div>
                                                            <span class="box-readmore">
                                                                <a
                                                                    href="{{ route('l3-template', ['sub_category_id' => $training->subcategory->id, 'pageid' => $page_id, 'category_id' => $category->id]) }}">Learn
                                                                    more
                                                                    <i class="fa fa-chevron-right"></i></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                            <!--11  -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
                <!--  -->
            </div>
            </div>
        </section>
        <!-- main section end -->
        <div class="ser-h"></div>
        <!-- mobile start  -->
        <section class="training-page training-page-m mobile-view">
            @foreach ($categories as $index => $category)
                <div class="m-container" id="m-ec">
                    <div class="m-title m-bg{{ $index + 1 }}">
                        <h3>{{ $category->name }}</h3> <!-- Parent Category Name -->
                    </div>

                    @php
                        $categoryTrainings = $trainings->where('category_id', $category->id)->values(); // Get trainings for this category
                    @endphp

                    @foreach ($categoryTrainings->chunk(5) as $chunkIndex => $trainingChunk)
                        <div class="ser-slider1">
                            <div id="navigation-count{{ $index + 1 }}-{{ $chunkIndex + 1 }}"
                                class="count-nav-box couter-space"></div>
                            <div id="ser-demo{{ $index + 1 }}-{{ $chunkIndex + 1 }}"
                                class="owl-carousel owl-theme indu-moblie">
                                @foreach ($trainingChunk as $singleTraining)
                                    <div class="item">
                                        <div class="mrgn-btm-iconbx">
                                            <a
                                                href="{{ route('l3-template', ['sub_category_id' => $singleTraining->subcategory->id, 'pageid' => $page_id, 'category_id' => $category->id]) }}">
                                                <div class="iconbox">
                                                    <div class="box-header">
                                                        <div class="box-icon pst-listing">
                                                            <i class="fa fa-cube"></i>
                                                            <h4 class="box-title">
                                                                {{ $singleTraining->subcategory->sub_category }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>{{ $singleTraining->description }}</p>
                                                        </div>
                                                        <span class="box-readmore">Learn More</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </section>
        <!-- mobile end -->
        {{-- <a href="#training-page" class="scrollToTop"><i class="fa fa-arrow-up"></i></a> --}}

        {{-- @include('frontend.layouts.footer') --}}

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
        $(document).ready(function() {
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
                if (!event.namespace) return;
                var carousel = event.relatedTarget;
                $("#" + navigationCountId).html(
                    (carousel.relative(carousel.current()) + 1) + "/" + carousel.items().length
                );
            }

            // 🚀 *Automatically Initialize All Carousels*
            $("[id^=ser-demo]").each(function() {
                let sliderId = $(this).attr("id");
                let countId = sliderId.replace("ser-demo",
                    "navigation-count"); // Generate corresponding count ID
                initializeCarousel(sliderId, countId);
            });
        });
    </script>
@endpush
