@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])

@section('content')
    {{-- test --}}

    <body id="body-main">
        <a id="button"></a>
        <!-- Header start -->
        @include('frontend.layouts.blog-header', ['categories' => $categories])
        <!-- banner start -->
        <section class="sec_ban" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/resouces.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>News Letter</h2>
                    <p> The most effective learning system. World’s highest course completion rate.</p>
                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- tab menu start -->
        <section class="tab-sec menu-left-right resocues-tab desktop-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!--  -->
                        <!-- Slider -->
                        <ul class="slider resocues owl-carousel owl-theme" id="resocues-menu">
                            @foreach ($categories as $category)
                                <li><a class="{{ $loop->first ? 'active' : ' ' }}"
                                        href="#{{ Str::slug($category->name) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                        <!-- control arrows -->
                        <!-- <div class="prev">
                                     <i class='fa fa-caret-left'></i>
                                     </div>
                                     <div class="next">
                                     <i class='fa fa-caret-right'></i>
                                     </div> -->
                        <!--  -->
                    </div>
                </div>
            </div>
        </section>
        <!-- tab menu end -->
        @foreach ($categories as $index => $category)
            <section class="resc-sec blog-sec {{ $index % 2 == 0 ? 'blog-bg' : '' }}" id="{{ Str::slug($category->name) }}">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper">
                                    <div class="title-button bbg{{ $index + 1 }}">
                                        <h3 class="style1"><i class="fa fa-2x fa-file"></i>{{ $category->name }}</h3>
                                    </div>
                                    <div class="carousel-wrap">
                                        <!-- Owl Carousel -->
                                        <div class="owl-carousel owl-theme" id="carousel-{{ $index }}"
                                            data-index="{{ $index }}">
                                            @foreach ($category->newsletters as $newsletter)
                                                <div class="item">
                                                    <a href="{{ route('blog-view', $newsletter->id) }}">
                                                        <div class="template15-wrap-main">
                                                            <div class="template15-wrap-main-img">
                                                                <img src="{{ asset('storage/uploads/backend/newsletter/' . $newsletter->images) }}" />
                                                            </div>
                                                            <div class="template15-wrap-main-content">
                                                                <span><i>{{ $newsletter->created_at->format('d M Y') }}</i></span>
                                                                <h4><a
                                                                        href="{{ route('blog-view', $newsletter->id) }}">{{ $newsletter->sub_category }}</a>
                                                                </h4>
                                                                <p>
                                                                    {{ $newsletter->short_desc }}
                                                                    <a href="{{ route('newLetter.View', $newsletter->id) }}">
                                                                        Read More[...]
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Navigation Counter (Now Outside the Carousel) -->
                                        <div id="navigation-count-{{ $index }}" class="count-nav-box"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <!--  -->

        <!--  -->
        <a href="#body-main" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a>
        {{-- @include('frontend.layouts.footer') --}}
        </div>
    </body>
@endsection

@push('scripts')
    <!-- Jquery code -->
    {{--
    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script> --}}
    <script type="text/javascript">
        //
        $('.menu-left-right ul li a').on('click', function (e) {
            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 100
            }, 100, 'swing', function () {
                window.location.hash = target;
            });
        });
        $(document).ready(function () {
            $('.menu-left-right ul li a').click(function () {
                $('li a').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>

    {{--
    <script type="text/javascript">
        $(document).ready(function () {
            function initializeCarousel(carouselClass, navigationCountId) {
                $(carouselClass).owlCarousel({
                    loop: true,
                    margin: 20,
                    dots: true,
                    nav: true,
                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        }
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
                if (!event.namespace) {
                    return;
                }
                var carousel = event.relatedTarget;
                $("#" + navigationCountId).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }

            initializeCarousel('.owl-carousel1', "navigation-count");
            initializeCarousel('.owl-carousel2', "navigation-count1");
            initializeCarousel('.owl-carousel3', "navigation-count2");
            initializeCarousel('.owl-carousel4', "navigation-count3");
            initializeCarousel('.owl-carousel5', "navigation-count4");
            initializeCarousel('.owl-carousel6', "navigation-count5");
            initializeCarousel('.owl-carousel7', "navigation-count6");

        });
    </script> --}}

    <script>
        $(document).ready(function () {
            function initializeCarousel(carouselId, navigationCountId) {
                let $carousel = $("#" + carouselId);
                let totalSlides = $carousel.find(".item").length; // Count slides

                // If no slides exist, show "0/0" and return
                if (totalSlides === 0) {
                    $("#" + navigationCountId).text("0 / 0");
                    return;
                }

                // Initialize Owl Carousel if slides exist
                $carousel.owlCarousel({
                    loop: true,
                    margin: 20,
                    dots: true,
                    nav: true,
                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        }
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
                var currentSlide = carousel.relative(carousel.current()) + 1;
                var totalSlides = carousel.items().length;
                $("#" + navigationCountId).text(currentSlide + " / " + totalSlides);
            }

            $(".carousel-wrap").each(function () {
                let carousel = $(this).find(".owl-carousel");
                let index = carousel.data("index");
                let counterId = "navigation-count-" + index;
                initializeCarousel(carousel.attr("id"), counterId);
            });
        });
    </script>
    <script>
        $("#resocues-menu").owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            navText: ["<div class='prev'><i class='fa fa-caret-left'></i></div>",
                "<div class='next'><i class='fa fa-caret-right'></i></div>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                900: {
                    items: 6
                },
                1200: {
                    items: 6
                }
            }


        });
    </script>

    @include('frontend.layouts.right-menu-js')
    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            var offSetTop = 100;
            var $scrollToTopButton = $('.scrollToTop');
            //Check to see if the window is top if not then display button
            $(window).scroll(function () {
                if ($(this).scrollTop() > offSetTop) {
                    $scrollToTopButton.fadeIn();
                } else {
                    $scrollToTopButton.fadeOut();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            var sections = $('.resc-sec'); // Sections to track
            var navLinks = $('.menu-left-right ul li a'); // Navbar links

            $(window).on('scroll', function () {
                var scrollPos = $(window).scrollTop();

                sections.each(function () {
                    var top = $(this).offset().top - 150; // Adjust offset for better visibility
                    var bottom = top + $(this).outerHeight();
                    var id = $(this).attr('id');

                    if (scrollPos >= top && scrollPos < bottom) {
                        navLinks.removeClass('active');
                        $(".menu-left-right ul li a[href='#" + id + "']").addClass('active');
                    }
                });
            });
        });
    </script>
@endpush