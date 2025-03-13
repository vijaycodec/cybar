@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])

@section('content')

    <body id="body-main">
        <a id="button"></a>
        <!-- Header start -->

        @include('frontend.layouts.career-header', ['categories' => $categories])

        <!-- banner start -->
        <section class="sec_ban" id="career-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/careers.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>Careers</h2>
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
                            @foreach ($categories as $index => $category)
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
        <section class="testimonials resc-sec pt-5 pb-3 desktop-view  ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="wpb_text_column wpb_content_element">
                            <!-- career 1 start -->
                            @foreach ($categories as $category)
                                <div class="wpb_wrapper rbg1 rsp" id="{{ Str::slug($category->name) }}">
                                    <div class="title-button header-font">
                                        <h3 class="style1"><i class="fa fa-2x fa-th"></i> {{ $category->name }}</h3>
                                    </div>
                                    <!-- Carousel Wrapper -->
                                    <div class="carousel-wrap">
                                        <div class="owl-carousel1 owl-carousel owl-theme">
                                            @foreach ($category->careers as $career)
                                                <div class="item">
                                                    <a href="{{ route('careers-view', $career->id) }}" class="career-link">
                                                        <h4 class="career-heading">{{ $career->subcategory }}</h4>
                                                        <p class="career-detail"><strong>Location :</strong>
                                                            {{ $career->location }}</p>
                                                        <p class="career-detail"><strong>Educational Background :</strong>
                                                            {{ $career->educational_background }}</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Sidebar (Search & Top Viewed Careers) -->
                    <div class="col-md-3 sider-blog pr-0">
                        <!-- Search Form -->
                        <div class="clearfix mb-4">
                            <div class="form quick-form bg-scheme mb-4 text-center career-margin-right">
                                <p>Search For Your Resources</p>
                                <form name="form_pages" id="form_pages"
                                    action="http://codecnetworks.in/codec/course_resources">
                                    <input type="text" name="q" id="filter" value=""
                                        class="form-control input-lg mr-sm-2 typeahead form-control mb-3"
                                        placeholder="Search Resources..." />
                                    <button class="btn btn-success btn-lg btn_save btn_action" type="submit"
                                        title="Click to Submit">Search</button>
                                </form>
                            </div>
                        </div>

                        <!-- Top Viewed Careers -->
                        <div class="offer-sec-inn">
                            <div class="view_blog career-margin-right">
                                <h4 class="btm-bdr">Top Viewed Career</h4>
                                <ul class="career-bg-top">
                                    @foreach ($trendings as $career)
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                                href="{{ route('careers-view', $career->id) }}">{{ $career->subcategory }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  -->
        <!--  -->
        <section class="mobile-view">
            @foreach ($categories as $index => $category)
                <div class="rbg{{ $index + 1 }} m-career" id="mob-{{ Str::slug($category->name) }}">
                    <div class="career-title">
                        <h3>{{ $category->name }}</h3>
                    </div>

                    <div class="carousel-wrap">
                        <div class="owl-carousel11 owl-carousel owl-theme owl-carousel-{{ $index }}">
                            {{-- Dynamic Class --}}
                            @foreach ($category->careers as $career)
                                <div class="item">
                                    <div class="blog-cat-inn">
                                        <div class="blog-cat">
                                            <a href="{{ route('careers-view', $career->id) }}">
                                                <h4>{{ $career->subcategory }}</h4>
                                                <p>Location : {{ $career->location }} Educational Background :
                                                    {{ $career->educational_background }}</p>
                                            </a>
                                            <div class="copy-right">
                                                <ul>
                                                    <li><a target="_blank" href="#" class="icoFacebook"
                                                            title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="#" class="icoTwitter"
                                                            title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a target="_blank" href="#" class="icoGoogle"
                                                            title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a target="_blank" href="#" title="linkedin"><i
                                                                class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div id="navigation-count-{{ $index }}" class="count-nav-box"></div> {{-- Dynamic Counter ID --}}
                    </div>
                </div>
            @endforeach
        </section>

        <!--  -->
        <div class="offer-sec-inn mobile-view offer-sec-inn1 career-space" id="tvc">
            <div class="view_blog">
                <h4 class="btm-bdr">Top Viewed Career</h4>
                <ul>
                    @foreach ($trendings as $career)
                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                href="{{ route('careers-view', $career->id) }}">{{ $career->subcategory }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--  -->
        <section class="carr-add">
            <div class="container">
                <div class="col-sm-12 txt-center centered-txt-banner">
                    <div class="inner-text-div">
                        <h3 class="text-center text-white">“With CYBARWIND, you get the best of both worlds—the fast pace,
                            innovative world of a start-up, but with the funding and talent that allows the company to have
                            a bigger impact on the next generation of data technology than most of the large legacy IT
                            vendors.” — Cloudera employee</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-wrap-cod career-space" id="team">
            <div class="container">
                <div class="col-md-10 offset-sm-1 pd_34 text-center team-sec-new">
                    <div class="title section mb-5">
                        <h2 class="mb-2">Teams</h2>
                        <p>There are many exciting and innovative career opportunities at Cloudera. Which one is right for
                            you? We invite you to take a closer look at some of these great opportunities and see where you
                            fit in best.
                        </p>
                    </div>
                    <div class="desktop-view">
                        <div class="row">
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-building"></i>
                                        <span>University Recruiting</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-gift"></i>
                                        <span>Sales</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-rocket"></i>
                                        <span>Engineering</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-users"></i>
                                        <span>G&amp;A</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-university"></i>
                                        <span>Marketing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-binoculars"></i>
                                        <span>Product</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-bookmark-o"></i>
                                        <span>Support</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- mobile -view -->
                    <div class="mobile-view">
                        <div class="owl-carousel1 owl-carousel owl-theme">
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-building"></i>
                                        <span>University Recruiting</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-gift"></i>
                                        <span>Sales</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-rocket"></i>
                                        <span>Engineering</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-users"></i>
                                        <span>G&amp;A</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-university"></i>
                                        <span>Marketing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-binoculars"></i>
                                        <span>Product</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-bookmark-o"></i>
                                        <span>Support</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  mobile view end-->

                </div>
            </div>

        </section>
        <section class="sec-wrap-cod bg-color-gray">
            <div class="container">
                <div class="col-sm-12">
                    <h4>Are you looking for skilled professional?</h4>
                    <h5>Look no more!</h5>
                    <p>At Edureka, we have thousands of experienced professionals as well as freshers, with new skills
                        looking for a career changeover. Connect with us to get the right talent you are looking for!</p>
                    <p>Our students are proficient professionals who have taken the initiative to learn essential new skills
                        through our career-oriented program.</p>
                    <h4>You know you have come to the right place, if:</h4>
                    <ol>
                        <li>You are looking for professionals with hands-on experience in relatively new technologies.</li>
                        <li>You are looking for professionals with guaranteed experience and expertise in technologies.</li>
                        <li>You are looking for professionals who are updated and industry-relevant.</li>
                    </ol>
                    <p>Update us on your open positions and we'll put them in front of an ocean of talented and qualified
                        practitioners. We’re happy to provide you with more details about the hiring process. Just fill in
                        the form and one of our representative will get back to you.</p>
                </div>
            </div>
        </section>
        <section class="sec-wrap-cod career-space" id="apply-now">
            <div class="container">
                <form class="form-horizontal" action="http://codecnetworks.in/codec/careers/sendmail" method="POST">

                    <h4>Fill in the form below</h4>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">

                                <h4>Job Details</h4>
                                <div class="form-group">
                                    <input type="text" name="designation" class="form-control"
                                        placeholder="Job Title or designation">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="profile" class="form-control"
                                        placeholder="Desired candidate profile">
                                </div>
                                <div class="form-group">
                                    <select class="browser-default custom-select" name="experience">
                                        <option value="">Min work Exp.</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="browser-default custom-select" name="currency">
                                        <option value="">Select Currency</option>
                                        <option value="1">inr</option>
                                        <option value="2">dolar</option>
                                        <option value="3">euro</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <h4>Contact Person Details</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="company"
                                        placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="number" placeholder="Mobile"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="control-group buttons mb-2">
                                    <div class="controls">
                                        <!--  <button class="btn btn-success" type="submit">Post Job</button>-->
                                        <input type="submit" class="btn btn-success" value="Post Job">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </section>

        <a href="#body-main" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a>

        </div>
    </body>
@endsection
<!-- Jquery code -->
@push('scripts')
    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js?v=1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
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
    <script type="text/javascript">
        //
        $('.menu-left-right ul li a').on('click', function(e) {
            var target = this.hash,
                $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 100
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
        //
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

            initializeCarousel('.owl-carousel1', "navigation-count1");
            initializeCarousel('.owl-carousel2', "navigation-count2");
            initializeCarousel('.owl-carousel3', "navigation-count3");
            initializeCarousel('.owl-carousel4', "navigation-count4");
            initializeCarousel('.owl-carousel5', "navigation-count5");
            initializeCarousel('.owl-carousel6', "navigation-count6");
            initializeCarousel('.owl-carousel7', "navigation-count7");
            initializeCarousel('.owl-carousel8', "navigation-count8");
            initializeCarousel('.owl-carousel9', "navigation-count9");
            initializeCarousel('.owl-carousel10', "navigation-count10");
            initializeCarousel('.owl-carousel11', "navigation-count11");

        });
    </script> --}}


    <script>
        $(document).ready(function() {
            function initializeCarousel(carouselId, navigationCountId) {
                let $carousel = $("#" + carouselId);
                let totalSlides = $carousel.find(".item").length; // Count slides

                // If no slides exist, show "0 / 0" and return
                if (totalSlides === 0) {
                    $("#" + navigationCountId).text("0 / 0");
                    return;
                }

                // Initialize Owl Carousel only if there are slides
                $carousel.owlCarousel({
                    loop: totalSlides > 1, // Loop only if more than 1 slide
                    margin: 20,
                    dots: true,
                    nav: totalSlides > 1, // Show nav only if more than 1 slide
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

            function updateNavigationCount(event, navigationCountId) {
                if (!event.namespace) return;
                let carousel = event.relatedTarget;
                let currentSlide = carousel.relative(carousel.current()) + 1;
                let totalSlides = carousel.items().length;
                $("#" + navigationCountId).text(currentSlide + " / " + totalSlides).show();
            }

            // Dynamically initialize each carousel inside .carousel-wrap
            $(".carousel-wrap").each(function(index) {
                let $carousel = $(this).find(".owl-carousel");
                let carouselId = "owl-carousel-" + index;
                let counterId = "navigation-count-" + index;

                // Assign unique IDs if not already set
                if (!$carousel.attr("id")) {
                    $carousel.attr("id", carouselId);
                }

                if (!$("#" + counterId).length) {
                    $(this).append(`<div id="${counterId}" class="count-nav-box"></div>`);
                }

                initializeCarousel(carouselId, counterId);
            });
        });
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
    <script>
        $(document).ready(function() {
            // Function to update the active tab based on scroll position
            function updateActiveTab() {
                var scrollPosition = $(window).scrollTop();
                var offset = 150; // Adjust this offset if needed

                // Loop through each category section
                $('.rbg1, .rbg2, .rbg3, .rbg4').each(function() {
                    var sectionId = $(this).attr('id');
                    var sectionTop = $(this).offset().top - offset;
                    var sectionBottom = sectionTop + $(this).outerHeight();

                    // Check if the section is in view
                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        // Remove active class from all tabs
                        $('.tab-sec ul li a').removeClass('active');
                        // Add active class to the corresponding tab
                        $('.tab-sec ul li a[href="#' + sectionId + '"]').addClass('active');
                    }
                });
            }

            // Call the function on scroll
            $(window).scroll(function() {
                updateActiveTab();
            });

            // Call the function on page load
            updateActiveTab();
        });
    </script>
    @include('frontend.layouts.right-menu-js')
@endpush
