@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])

@section('content')

    <body id="body-main">
        <a id="button">
        </a>
        <!-- Header start -->

        @include('frontend.layouts.testo-header',['categories' => $categories])
        <!-- banner start -->
        <section class="sec_ban" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/resouces.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>Testimonials
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
        @foreach ($categories as $index => $category)
        <section class="testimonials testimonials-page testo1 resc-sec {{ $index % 2 == 1 ? 'blog-bg' : '' }}" id="{{ Str::slug($category->name) }}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button">
                                    <h3 class="style1 tbg{{ $index+1 }}">
                                        <i class="fa fa-2x fa-file"></i>
                                        {{ $category->name }}
                                    </h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel owl-carousel{{ $index }} owl-theme">
                                        @foreach ($category->testimonials as $testimonial)
                                            <div class="item">
                                                <div class="ceh-testo-box" data-target="#global-testimonial-popup"
                                                    data-name="{{ $testimonial->user_name }}"
                                                    data-designation="{{ $testimonial->designation }}"
                                                    data-description="{{ $testimonial->testimonial_description }}"
                                                    data-image="{{ asset('storage/uploads/backend/testimonial/' . $testimonial->images)}}">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="ceh-testo-image">
                                                                <img src="{{ asset('storage/uploads/backend/testimonial/' . $testimonial->images)}}" alt="Testimonial Image" width="100">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="ceh-testo-cont">
                                                                <div class="ceh-testo-title">
                                                                    <h3>{{ $testimonial->user_name }}</h3>
                                                                    <span>{{ $testimonial->designation }}</span>
                                                                </div>
                                                                <div class="ceh-testo-body">
                                                                    <p>{{ $testimonial->testimonial_short_description }}</p>
                                                                    <span>Read More</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Dynamic Counter for Each Section -->
                                    <div id="navigation-count-{{ $index }}" class="count-nav-box"></div>
                                </div>
                            </div>
                            @include('frontend.mobile-components.m-testimonials')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        @endforeach

        <a href="#main-body" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a>
        {{-- @include('frontend.layouts.footer') --}}
        </div>
        <!-- Global Popup fot Testomonials (Only One in the Page) -->
        <div class="popup" id="global-testimonial-popup">
            <div class="popup-box popup-testo">
                <div class="testo-popup">
                    <div class="testo-popup-cont-top">
                        <div class="testo-popup-cont-top-img">
                            <img src="" id="popup-image" class="img-fluid" alt="Testimonial Image">
                        </div>
                        <div class="testo-popup-cont-top-title">
                            <h3 id="popup-name"></h3>
                            <span id="popup-designation"></span>
                        </div>
                    </div>
                    <div class="testo-popup-body">
                        <p id="popup-description"></p>
                    </div>
                </div>
                <a href="javascript:void(0)" class="bottom-close-d close_1"><i class="fa fa-times"></i></a>
                <a href="javascript:void(0)" class="close_21 close_1"> Close</a>
            </div>
        </div>

        <a href="#body-main" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>

    </body>

@endsection
<!-- Jquery code -->

@push('scripts')
    <script>
        $(document).ready(function() {
            // Open the popup dynamically when clicking a testimonial box
            $(document).on("click", ".ceh-testo-box", function() {
                console.log("clicked");
                // Get data from the clicked testimonial
                var name = $(this).data("name");
                var designation = $(this).data("designation");
                var description = $(this).data("description");
                var image = $(this).data("image");
                console.log(name);
                // Populate the global popup with dynamic content
                $("#popup-name").text(name);
                $("#popup-designation").text(designation);
                $("#popup-description").text(description);
                $("#popup-image").attr("src", image);

                // Show the popup
                $("#global-testimonial-popup").fadeIn();
            });

            // Close the popup when clicking on the close button (using delegated event handling)
            $(document).on("click", ".close_1, .close_21", function() {
                $(this).closest(".popup").fadeOut(); // Close the closest popup
            });

            // Close the popup when clicking outside of the popup content
            $("#global-testimonial-popup").click(function(e) {
                if ($(e.target).hasClass("popup")) {
                    $(this).fadeOut();
                }
            });
        });
    </script>
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

    {{-- <script type="text/javascript">
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
                            items: 2
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

            initializeCarousel('.owl-carousel1', "navigation-count");
            initializeCarousel('.owl-carousel2', "navigation-count1");
            initializeCarousel('.owl-carousel3', "navigation-count2");
            initializeCarousel('.owl-carousel4', "navigation-count3");

        });
    </script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            function isMobile() {
                return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase());
            }
    
            function initializeCarousel(carouselClass, navigationCountId) {
                $("." + carouselClass).each(function(index) {
                    let $carousel = $(this);
                    let navCountId = navigationCountId + "-" + index; // Unique counter ID
                    
                    let totalSlides = $carousel.find(".item").length;
                    
                    // If no slides, hide the counter and return
                    if (totalSlides === 0) {
                        $("#" + navCountId).hide();
                        return;
                    }
    
                    // Check if mobile view
                    let isMobileView = isMobile();
    
                    // Hide counter on desktop
                    if (!isMobileView) {
                        $("#" + navCountId).hide();
                    }
    
                    // Initialize Owl Carousel
                    $carousel.owlCarousel({
                        loop: true, // Disable loop if only 1 slide
                        margin: 20,
                        dots: isMobileView, // Show dots only on mobile
                        nav: totalSlides > 1, // Hide navigation if only 1 slide
                        navText: [
                            "<i class='fa fa-angle-left'></i>",
                            "<i class='fa fa-angle-right'></i>"
                        ],
                        responsive: {
                            0: { items: 1 },
                            768: { items: isMobileView ? 1 : 2 }, // If mobile, show only 1 item
                            992: { items: 2 }
                        },
                        onInitialized: function(event) {
                            if (isMobileView) updateNavigationCount(event, navCountId);
                        },
                        onChanged: function(event) {
                            if (isMobileView) updateNavigationCount(event, navCountId);
                        }
                    });
                });
            }
    
            function updateNavigationCount(event, navigationCountId) {
                if (!event.namespace) return;
                let carousel = event.relatedTarget;
                let totalSlides = carousel.items().length;
                let currentSlide = carousel.relative(carousel.current()) + 1;
    
                $("#" + navigationCountId).html(currentSlide + " / " + totalSlides).show();
            }
    
            // Initialize carousel for all sections dynamically
            initializeCarousel("owl-carousel", "navigation-count");
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
        function openPopup(target) {
            $(target).fadeIn();
            $('body').addClass('popup-open');
        }

        function closePopup(target) {
            $(target).fadeOut();
            $('body').removeClass('popup-open');
        }

        // Open the corresponding popup when clicking on elements with the class "popup-btn"
        $(".ceh-testo-box").click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            openPopup(target);
        });

        // Close the popup when clicking on elements with the class "close_1"
        $(".close_1").click(function(e) {
            e.preventDefault();
            var target = $(this).closest('.popup').attr('id');
            closePopup(target);
        });

        // Close the popup when clicking outside the popup
        $(".popup").click(function(event) {
            if ($(event.target).is('.popup')) {
                var target = $(this).attr('id');
                closePopup(target);
            }
        });

        $('.close_1, .popup').on('click', function() {
            $('.testo-popup-body').scrollTop(0);
        })
    </script>
@endpush
