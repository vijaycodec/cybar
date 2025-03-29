@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])

@section('content')

    <body id="main-body">
        <a id="button"></a>
        <!-- Header start -->

        @include('frontend.layouts.res-header',['categories' => $categories])
        <!-- banner start -->
        <section class="sec_ban" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="{{ asset('assets/images/resouces.jpg') }}" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>Resources</h2>
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

                        <ul class="slider resocues owl-carousel owl-theme" id="resocues-menu">
                            @foreach ($categories as $category)
                                 <li><a class="{{ $loop->first ? 'active' : ' ' }}" href="#{{ Str::slug($category->name) }}">{{ $category->name}}</a></li>
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
        <section class="resc-sec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="wpb_text_column wpb_content_element">
                            @foreach ($categories as $index=>$category)
                                <div class="wpb_wrapper rbg{{ $index+1 }} rsp"
                                    id="{{ Str::slug($category->name) }}">
                                    <div class="title-button">
                                        <h3 class="style1"><i class="fa fa-2x fa-file"></i>{{ $category->name }}</h3>
                                    </div>
                                    <div class="carousel-wrap">
                                        <div class="owl-carousel1 owl-carousel owl-theme" id="carousel-{{ $index }}">
                                            @foreach ($category->resources as $resource)
                                                <div class="item">
                                                    <a href="{{ route('resources-view', $resource->slug) }}" tabindex="-1">
                                                        <div class="card_wrapper">
                                                            <div class="card_img">
                                                                <div class="cn-hover-box">
                                                                    <div class="cn-hover-img"> 
                                                                        <img src="{{ asset('storage/uploads/backend/resources/' . $resource->images) }}" 
                                                                             class="img-fluid" alt="{{ $resource->title }}">
                                                                    </div>
                                                                    <div class="cn-content">
                                                                        <p>{{ $resource->short_desc }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="bottom_strip d-sm-block">
                                                                    <span class="text_bottom_strip d-sm-block pull-left">
                                                                        <span>ARTICLE</span>
                                                                    </span>
                                                                    <span class="text_bottom_strip d-sm-block pull-right">
                                                                        <span>21 Views </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- Counter display -->
                                        <div id="navigation-count-{{ $index }}" class="count-nav-box"></div>
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="col-sm-3 sider-blog pr-0 left-space tr-spcae" id="tr">
                        <!--search form -->
                        <div class="clearfix mb-4 quick-form1">
                            <div class="form quick-form bg-scheme mb-4 text-center custom-margin">
                                <p>Search For Your Resources</p>
                                <form id="form_pages" action="" onsubmit="return false;">
                                    <div id="prefetch-resource">
                                        <input type="text" name="q" id="filter" class="form-control input-lg typeahead form-control mb-3" 
                                               placeholder="Search Resources..." autocomplete="off" />
                                    </div>
                                    <button class="btn btn-success btn-lg" id="search-btn" title="Click to Submit">Search</button>
                                </form>
                                
                                <!-- Results Container -->
                                <ul id="search-results" class="list-group"></ul>
                            </div>

                        </div>


                        <div class="resouces-n">
                            <div class="side-head mb-3">
                                <h4 class="custom-heading">Trending Resources</h4>
                            </div>
                            @php
                                $heights = ['400px', '300px', '200px', '300px'];
                                $totalHeights = count($heights);
                            @endphp
                            @foreach ($trendings as $index => $resource)
                                <div class="test_mob_app custom-box" style="height: {{ $heights[$index % $totalHeights] }}">
                                    <h2 class="custom-heading">
                                        {{ $resource->sub_category }}
                                    </h2>
                                    <a href="{{ route('resources-view', $resource->slug) }}"
                                        class="test_mob_app_btn">
                                        Know more
                                    </a>
                                    <img src="{{ asset('assets/images/vapt-services.jpg') }}" class="custom-image">

                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <a href="#main-body" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a>

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
        $('.menu-left-right ul li a').on('click', function(e) {
            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 120
            }, 100, 'swing', function() {
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
            function isMobile() {
                const userAgent = navigator.userAgent.toLowerCase();
                return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/.test(userAgent);
            }
            if (isMobile()) {
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
                        onInitialized: function(event) {
                            updateNavigationCount(event, navigationCountId);
                        },
                        onChanged: function(event) {
                            updateNavigationCount(event, navigationCountId);
                        }
                    });
                }
            } else {
                function initializeCarousel(carouselClass, navigationCountId) {
                    $(carouselClass).owlCarousel({
                        loop: true,
                        margin: 20,
                        dots: false,
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
                        onInitialized: function(event) {
                            updateNavigationCount(event, navigationCountId);
                        },
                        onChanged: function(event) {
                            updateNavigationCount(event, navigationCountId);
                        }
                    });
                }
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
            initializeCarousel('.owl-carousel16', "navigation-count15");

        });
    </script> --}}

    <script>
        $(document).ready(function () {
            function isMobile() {
                const userAgent = navigator.userAgent.toLowerCase();
                return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/.test(userAgent);
            }
    
            function initializeCarousel(carouselId, navigationCountId) {
                let $carousel = $("#" + carouselId);
                let totalSlides = $carousel.find(".item").length; // Count total slides
    
                // If no slides exist, show "0 / 0" and return
                if (totalSlides === 0) {
                    $("#" + navigationCountId).text("0 / 0");
                    return;
                }
    
                // Initialize Owl Carousel if slides exist
                $carousel.owlCarousel({
                    loop: true,
                    margin: 20,
                    dots: isMobile(),
                    nav: true,
                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>"
                    ],
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 }
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
    
            // Loop through each owl-carousel and initialize with unique ID
            $(".owl-carousel1").each(function (index) {
                let $carousel = $(this);
                let carouselId = "carousel-" + index;
                let navigationCountId = "navigation-count-" + index;
    
                // Assign IDs dynamically
                $carousel.attr("id", carouselId);
                $("#navigation-count").attr("id", navigationCountId);
    
                initializeCarousel(carouselId, navigationCountId);
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
            $scrollToTopButton.click(function() {
                $('.menu-left-right ul li a').removeClass("active");

            });
        });
    </script>
    {{-- script for when scrolling page then resources menu script also scroll active --}}
    <script>
        $(document).ready(function () {
        var sections = $('.resc-sec .wpb_wrapper'); // Sections to track
        var navLinks = $('.menu-left-right ul li a'); // Navigation links
        
            function updateActiveNav() {
                var scrollPosition = $(window).scrollTop();
                var offset = 150; // Adjust this value based on your layout
                
                sections.each(function () {
                    var currentSection = $(this);
                    var sectionTop = currentSection.offset().top - offset;
                    var sectionId = currentSection.attr('id');

                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + currentSection.outerHeight()) {
                        navLinks.removeClass('active');
                        $(".menu-left-right ul li a[href='#" + sectionId + "']").addClass('active');
                    }
                });
            }

            $(window).on('scroll', updateActiveNav);
            updateActiveNav(); // Run on page load in case of refresh mid-scroll
        });
    </script>


{{-- script for seo routes change # to / --}}
{{-- <script>
    // Flag to prevent scroll-based active updates immediately after a manual click
    let manualActive = false;

    // Update the active state for the resources menu
    function updateActiveState(category) {
        console.log('updateActiveState called with:', category);
        // Remove active class from all resource menu links
        document.querySelectorAll('#resocues-menu a').forEach(el => el.classList.remove('active'));
        // Add active class to the clicked link if found
        let activeLink = document.querySelector(`#resocues-menu a[data-category="${category}"]`);
        if (activeLink) {
            activeLink.classList.add('active');
            console.log('Active class added to:', activeLink);
        } else {
            console.log('No activeLink found for:', category);
        }
    }

    // Update the URL and active state on clicking a resource category
    function updateResourceURL(category) {
        console.log('updateResourceURL clicked for:', category);
        if (history.pushState) {
            let newUrl = `/resources/${category}`;
            if (window.location.pathname !== newUrl) {
                history.pushState({ path: newUrl }, '', newUrl);
            }
            // Scroll smoothly to the target section
            let targetSection = document.getElementById(category);
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
            // Update the active state
            updateActiveState(category);
            // Set manualActive flag to true so that scroll updates are paused temporarily
            manualActive = true;
            // Increase delay to 1500ms to ensure the scroll handler doesn’t override too quickly
            setTimeout(() => manualActive = false, 1500);
        }
    }

    // On initial page load, if URL has a category, scroll and update active state.
    document.addEventListener("DOMContentLoaded", function() {
        let pathSegments = window.location.pathname.split('/');
        let urlCategory = pathSegments[2]; // e.g., /resources/{category}
        if (urlCategory) {
            let targetSection = document.getElementById(urlCategory);
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
            updateActiveState(urlCategory);
        }
        // If no category is in the URL, the Blade‑set first category remains active.
    });

    // jQuery-based scroll tracking to update the active state as you scroll the page.
    $(document).ready(function () {
        // Select the sections you want to track (adjust selector as needed)
        var sections = $('.resc-sec .wpb_wrapper');
        // Use the same resource menu links
        var navLinks = $('#resocues-menu a');

        function updateActiveNav() {
            // If a manual click has recently occurred, skip scroll updates
            if (manualActive) return;

            var scrollPosition = $(window).scrollTop();
            var offset = 150; // Adjust this offset based on your layout

            sections.each(function () {
                var section = $(this);
                var sectionTop = section.offset().top - offset;
                var sectionId = section.attr('id');

                // Check if the current scroll position is within this section
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + section.outerHeight()) {
                    navLinks.removeClass('active');
                    $("#resocues-menu a[data-category='" + sectionId + "']").addClass('active');
                }
            });
        }

        // Bind the scroll event and run on page load in case of a mid-scroll refresh
        $(window).on('scroll', updateActiveNav);
        updateActiveNav();
    });
</script>
<script>
    $(document).ready(function(){
        // Initialize your Owl Carousel (if not already initialized)
        var $owlMenu = $("#resocues-menu");
        $owlMenu.owlCarousel({
            // your Owl Carousel options, e.g.:
            items: 4,
            loop: false,
            margin: 10,
            nav: true
        });
    
        // Delegate click event on carousel anchors
        $owlMenu.on('click', 'a', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            
            var $this = $(this);
            var category = $this.data('category');
            var newUrl = '/resources/' + category;
    
            // Update browser URL if different
            if(window.location.pathname !== newUrl) {
                history.pushState({ path: newUrl }, '', newUrl);
            }
    
            // Scroll to the target section smoothly using jQuery animation
            var $targetSection = $('#' + category);
            if($targetSection.length) {
                $('html, body').animate({
                    scrollTop: $targetSection.offset().top
                }, 500);
            }
    
            // Remove active class from all carousel links, then add to the clicked one.
            $owlMenu.find('a').removeClass('active');
            $this.addClass('active');
        });
    
        // (Optional) On page load, if URL has a category, update active state and scroll.
        (function() {
            var pathSegments = window.location.pathname.split('/');
            var urlCategory = pathSegments[2]; // expecting /resources/{category}
            if(urlCategory) {
                var $targetSection = $('#' + urlCategory);
                if($targetSection.length) {
                    $('html, body').animate({
                        scrollTop: $targetSection.offset().top
                    }, 500);
                }
                // Update active state on carousel
                $owlMenu.find('a').removeClass('active');
                $owlMenu.find("a[data-category='" + urlCategory + "']").addClass('active');
            }
            // If no URL category, let your Blade-set first item be active.
        })();
    });
</script> --}}


<script>
    $(document).ready(function () {
    $('#filter').on('keyup', function () {
        let query = $(this).val();

        if (query.length > 2) { // Start searching after 3 characters
            $.ajax({
                url: "/search-resources", // Laravel route
                method: "GET",
                data: { query: query },
                success: function (response) {
                    let resultHtml = '';

                    if (response.length > 0) {
                        response.forEach(resource => {
                            resultHtml += `<li class="list-group-item">${resource.name}</li>`;
                        });
                    } else {
                        resultHtml = '<li class="list-group-item text-muted">No results found</li>';
                    }

                    $('#search-results').html(resultHtml).show();
                }
            });
        } else {
            $('#search-results').hide();
        }
    });

    // Hide results when clicking outside
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#filter, #search-results').length) {
            $('#search-results').hide();
        }
    });
});


</script>
    
<script>
    $(document).on('click', '#search-results li', function () {
    $('#filter').val($(this).text()); // Fill input with selected result
    $('#search-results').hide(); // Hide results
});
</script>
@endpush
