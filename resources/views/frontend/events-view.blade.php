@extends('frontend.layouts.app')

@section('title', 'Events')

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
                    <img src="{{ asset('assets/images/resouces-bg-img.jpg') }}" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h1>{{ $categories->name }}</h1>

                </div>
            </div>
        </section>
        <!-- banner end -->
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
            loop: false,
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
    @include('frontend.layouts.right-menu-js')
@endpush
