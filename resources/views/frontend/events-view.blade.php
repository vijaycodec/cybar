@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])

@section('content')

    <body id="main-body">
        <a id="button">
        </a>
        <!-- Header start -->
        @include('frontend.layouts.eventv-header')
        <!-- banner start -->
        <section class="sec_ban resource-detail-banner" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="{{ asset('assets/images/resouces-bg-img.webp') }}" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h1>{{ $categories->name }}</h1>

                </div>
            </div>
        </section>
        <!-- banner end -->
         <!-- Brecumb -->
         <section class="breadcromb desktop-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcromb-ul">
                            <li>
                                <a href="{{ route('home') }}" style="background-color: #14426e; padding: 0px 6px; display: inline-block;">
                                    <img src="{{ asset('assets/images/Home-Codec-Networks.png') }}" alt="Home Codec Networks Logo" title="Home Codec Networks">
                                </a>
                            </li> 
                            <li><a href="{{ route('events') }}">Events</a></li>
                            <li><a href="javascript:void(0)">{{ $categories->name}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcromb end -->
        <!-- tab menu start -->
        <!-- tab menu end -->
        <section class="testimonials event-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="event-title">
                            <h2> {{ $categories->name }}</h2>
                        </div>
                    </div>

                    @foreach ($events as $event)
                    <div class="col-md-3">
                        <div class="event-box">
                            <div data-videourl="{{ $event->video_url }}" class="ceh-video button">
                                <img src="{{ asset('storage/uploads/backend/event/' . $event->images) }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="blog-view">
                    <a href="javascript:history.back()">Go Back</a>
                </div>
            </div>
        </section>

        <a href="#main-body" class="scrollToTop" style="display: block;">
            <i class="fa fa-arrow-up">
            </i>
        </a>


    </body>

@endsection

@push('scripts')
    <!-- Jquery code -->
    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
        $('.owl-carousel1').owlCarousel({
            loop: true,
            // Enable loop
            margin: 20,
            // Increase margin between items
            dots: true,
            nav: true,
            // Enable navigation buttons
            navText: ["<i class='fa fa-angle-left'></i>", // Custom navigation icons
                "<i class='fa fa-angle-right'></i>"
            ],

            responsive: {
                0: {
                    items: 1 // Display one item on small screens
                },
                768: {
                    items: 2 // Display two items on medium screens
                },
                992: {
                    items: 4 // Display three items on large screens
                }
            }
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
    <script>
        // $(document).ready(function () {
        // 	$(window).on('scroll', function () {
        // 		var scrollPos = $(window).scrollTop();

        // 		// Loop through each section with a corresponding menu item
        // 		$('.rsp').each(function () {
        // 			var target = $(this).attr('id'); // Get the ID of the section
        // 			var offsetTop = $(this).offset().top;
        // 			var sectionHeight = $(this).outerHeight();

        // 			// Check if the scroll position is within the section's range
        // 			if (scrollPos >= offsetTop - 100 && scrollPos < offsetTop + sectionHeight - 100) {
        // 				// Remove the 'active' class from all menu items
        // 				$('#resocues-menu li a').removeClass('active');
        // 				// Add the 'active' class to the corresponding menu item
        // 				$('#resocues-menu li a[href="#' + target + '"]').addClass('active');
        // 			}
        // 		});
        // 	});
        // });
    </script>

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
            // video start
            var youtubeVideo = {
                videoBtn: '[data-videourl]',
    
                model: function () {
    
                    function videoinit() {
                        $('body').on('click', youtubeVideo.videoBtn, function (event) {
                            event.preventDefault();
                            var videoSrc = $(this).data('videourl');
    
                            var ID = '';
                            var url = videoSrc.replace(/(>|<)/gi, '').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
                            if (url[2] !== undefined) {
                                ID = url[2].split(/[^0-9a-z_\-]/i);
                                ID = ID[0];
                            } else {
                                ID = url;
                            }
    
                            var videoElement = $('<div class="video-popup-model">' + '<div class="video-layer">' + '<div class="video-model-close-layer">' + '</div>' + '<div class="model-wrapper">' + '<div class="videomodel">' + '<div class="videoscreen">' + '<iframe width="100%" height="auto" class="videlement"' + 'src="https://www.youtube.com/embed/' + ID + '?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=1' + '" frameborder="0"' + 'allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"' + 'allowfullscreen></iframe>' + '</div>' + '<div class="modelCloseBtn">' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>');
    
                            $('body').prepend(videoElement);
                            var videoWidth = $('.video-popup-model .videlement').width();
                            var videHeight = (9 / 16) * videoWidth;
                            $('.video-popup-model .videlement').height(videHeight);
                            $('body').find('.video-popup-model').addClass('smooth_show');
                        });
                    }
                    videoinit();
    
                    function modelClose() {
                        $('body').on('click', '.modelCloseBtn', function (event) {
                            var model = $(this).parents('.video-popup-model')
                            model.removeClass('smooth_show');
                            setTimeout(function () {
                                model.remove();
                            }, 500);
                            $('body').removeClass('no-reload');
                        });
                    }
                    modelClose();
    
                    function modelLayerClose() {
                        $('body').on('click', '.video-model-close-layer', function (event) {
                            $(".modelCloseBtn").trigger('click');
                        });
                    }
                    modelLayerClose();
                },
                init: function () {
                    youtubeVideo.model();
                }
            };
    
            youtubeVideo.init();
        </script>
    @include('frontend.layouts.right-menu-js')
@endpush
