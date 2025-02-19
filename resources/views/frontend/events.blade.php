@extends('frontend.layouts.app')

@section('title', 'Events')

@section('content')

    <body id="main-body">
        <a id="button">
        </a>
        <!-- Header start -->
        @include('frontend.layouts.event-header')
        <!-- banner start -->
        <section class="sec_ban" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/resouces.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>
                        Events
                    </h2>
                    <p>
                        The most effective learning system. World’s highest course completion
                        rate.
                    </p>
                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- tab menu start -->
        <!-- tab menu end -->
        <section class="testimonials testimonials-page event-space resc-sec " id="ps">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button ">
                                    <h3 class="style1">
                                        <i class="fa fa-2x fa-file">
                                        </i>
                                        Professional Services
                                    </h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel1 owl-carousel owl-theme">
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                    </div>
                                    <div id="navigation-count1" class="count-nav-box"></div>

                                    <!--  -->

                                </div>
                                <div class="carousel-wrap mobile-view m-event">
                                    <div class="owl-carousel2 owl-carousel owl-theme">
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="ceh-video button">
                                                <img src="assets/images/video-thumb.jpg">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="ceh-video button">
                                                <img src="assets/images/video-thumb.jpg">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="ceh-video button">
                                                <img src="assets/images/video-thumb.jpg">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="ceh-video button">
                                                <img src="assets/images/video-thumb.jpg">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                    </div>

                                    <div id="navigation-count2" class="count-nav-box"></div>

                                    <!--  -->
                                    <div class="event-all">
                                        <a href="{{ route('events-view') }}">View All</a>
                                    </div>
                                    <!--  -->
                                </div>

                                <!-- -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--  -->
        <section class="testimonials testimonials-page event-space testimonials-bg resc-sec " id="so">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button ">
                                    <h3 class="style1 tbg1">
                                        <i class="fa fa-2x fa-file">
                                        </i>
                                        Security Operations
                                    </h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel3 owl-carousel owl-theme">
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid" alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                    </div>
                                    <div id="navigation-count3" class="count-nav-box"></div>
                                    <!--  -->
                                    <div class="event-all">
                                        <a href="{{ route('events-view') }}">View All</a>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>

                            <!-- -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <!-- tab menu end -->
        <section class="testimonials testimonials-page event-space resc-sec " id="as">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button ">
                                    <h3 class="style1 tbg2">
                                        <i class="fa fa-2x fa-file">
                                        </i>
                                        Application Security
                                    </h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel4 owl-carousel owl-theme">
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                    alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                    alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                    alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                    alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                    </div>
                                    <div id="navigation-count4" class="count-nav-box"></div>
                                    <!--  -->
                                    <div class="event-all">
                                        <a href="{{ route('events-view') }}">View All</a>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>

                            <!-- -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="testimonials testimonials-page event-space testimonials-bg resc-sec " id="ws">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button ">
                                    <h3 class="style1 tbg3">
                                        <i class="fa fa-2x fa-file">
                                        </i>
                                        Web Security
                                    </h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel5 owl-carousel owl-theme">
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                    alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                    alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                    alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                        <!-- testo 1 start -->
                                        <div class="item">
                                            <div class="event-box">
                                                <img src="assets/images/vapt-services.jpg" class="img-fluid"
                                                    alt="t1">
                                            </div>
                                        </div>
                                        <!-- testo 1 end -->
                                    </div>
                                    <div id="navigation-count5" class="count-nav-box"></div>
                                    <!--  -->
                                    <div class="event-all">
                                        <a href="{{ route('events-view') }}">View All</a>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>

                            <!-- -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        {{-- <a href="#main-body" class="scrollToTop" style="display: block;">
            <i class="fa fa-arrow-up">
            </i>
        </a> --}}
        {{-- @include('frontend.layouts.footer') --}}
        </div>
    </body>

@endsection

@push('scripts')
    <!-- Jquery code -->
    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js?v=1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>

    <script type="text/javascript">
        //
        $('.menu-left-right ul li a').on('click',
            function(e) {
                var target = this.hash,
                    $target = $(target);

                $('html, body').stop().animate({
                        'scrollTop': $target.offset().top - 100
                    },
                    100, 'swing',
                    function() {
                        window.location.hash = target;
                    });
            });
        $(document).ready(function() {
            $('.menu-left-right ul li a').click(function() {
                $('li a').removeClass("active");
                $(this).addClass("active");
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
    <script type="text/javascript">
        $(document).ready(function() {
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
                            items: 4
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

            initializeCarousel('.owl-carousel1', "navigation-count1");
            initializeCarousel('.owl-carousel2', "navigation-count2");
            initializeCarousel('.owl-carousel3', "navigation-count3");
            initializeCarousel('.owl-carousel4', "navigation-count4");
            initializeCarousel('.owl-carousel5', "navigation-count5");

        });


        // Function to close the popup
        // function closePopup1() {
        // $('#client-testimonials-popup').fadeOut();
        // $('body').removeClass('popup-open');

        // }
        // $(".popup").click(function(){
        //   closePopup1();
        // });
    </script>
    <script>
        $("#resocues-menu").owlCarousel({
            loop: true,
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
        $(document).ready(function() {
            "use strict";
            var offSetTop = 100;
            var $scrollToTopButton = $('.scrollToTop');
            //Check to see if the window is top if not then display button
            $(window).scroll(function() {
                if ($(this).scrollTop() > offSetTop) {
                    $scrollToTopButton.fadeIn();
                } else {
                    $scrollToTopButton.fadeOut();
                }
            });
        });
    </script>
    <script>
        var youtubeVideo = {
            videoBtn: '[data-videourl]',

            model: function() {

                function videoinit() {
                    $('body').on('click', youtubeVideo.videoBtn, function(event) {
                        event.preventDefault();
                        var videoSrc = $(this).data('videourl');

                        var ID = '';
                        var url = videoSrc.replace(/(>|<)/gi, '').split(
                            /(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
                        if (url[2] !== undefined) {
                            ID = url[2].split(/[^0-9a-z_\-]/i);
                            ID = ID[0];
                        } else {
                            ID = url;
                        }

                        var videoElement = $('<div class="video-popup-model">' +
                            '<div class="video-layer">' + '<div class="video-model-close-layer">' +
                            '</div>' + '<div class="model-wrapper">' + '<div class="videomodel">' +
                            '<div class="videoscreen">' +
                            '<iframe width="100%" height="auto" class="videlement"' +
                            'src="https://www.youtube.com/embed/' + ID +
                            '?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=1' +
                            '" frameborder="0"' +
                            'allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"' +
                            'allowfullscreen></iframe>' + '</div>' + '<div class="modelCloseBtn">' +
                            '</div>' + '</div>' + '</div>' + '</div>' + '</div>');

                        $('body').prepend(videoElement);
                        var videoWidth = $('.video-popup-model .videlement').width();
                        var videHeight = (9 / 16) * videoWidth;
                        $('.video-popup-model .videlement').height(videHeight);
                        $('body').find('.video-popup-model').addClass('smooth_show');
                    });
                }
                videoinit();

                function modelClose() {
                    $('body').on('click', '.modelCloseBtn', function(event) {
                        var model = $(this).parents('.video-popup-model')
                        model.removeClass('smooth_show');
                        setTimeout(function() {
                            model.remove();
                        }, 500);
                        $('body').removeClass('no-reload');
                    });
                }
                modelClose();

                function modelLayerClose() {
                    $('body').on('click', '.video-model-close-layer', function(event) {
                        $(".modelCloseBtn").trigger('click');
                    });
                }
                modelLayerClose();
            },
            init: function() {
                youtubeVideo.model();
            }
        };

        youtubeVideo.init();
    </script>
@endpush
