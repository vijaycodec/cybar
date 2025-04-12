@extends('frontend.layouts.app')
{{--
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
{{--
<link rel="stylesheet" type="text/css" href="assets/css/style.css"> --}}
{{--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menutoggle.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menubar.css') }}"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cninsight.css') }}">
{{--
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/resouces/owl-carousel.css') }}"> --}}
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main-menu.js') }}"></script>

{{-- <style type="text/css">
    .active {
        color: #18ba60 !important;
        background: transparent;
        border: 2px solid #18ba60 !important;
        padding-bottom: 10px;
    }

    .header-wrap {
        -webkit-box-shadow: 0 0px 0px 0px rgba(0, 0, 0, .1);
        box-shadow: 0 0x 0px 0px rgba(0, 0, 0, .1);
    }

    #owl-demo7 .active {
        border-bottom: 0px solid #18ba60 !important;
        background: #e5e8ee !important;
    }

    #owl-demo8 .active {
        border-bottom: 0px solid #18ba60 !important;
    }

    ul#tabs-nav1 li {
        background: #dae4f7 !important;
    }

    #owl-demo8 .owl-controls .owl-buttons>div.owl-next {
        top: 0px;
        right: -5px !important;
    }
</style> --}}
@section('content')

    <body id="template15">

        <!-- Header start -->
        @include('frontend.layouts.header')
        <!-- Header end -->
        <!-- banner start -->
        <section class="template_12_banner">

            <div class="template_12-header">
                <h1>Don't just learn it, Master it!</h1>
                <p>The most effective learning system. World's highest course completion rate.</p>

            </div>
        </section>

        <!-- banner end-->
        <!-- main section-->
        <!-- tab menu start -->

        <section class="services-menu sticky_nav">

            <div class=" sticky_nav_container_wrapper">
                <div class="container-fluid sticky_nav_container ">
                    <div class="row body_container">
                        <div class="col-md-12 text-center">
                            <ul id="sticky-control" class="anchor-nav">
                                <li><a href="#cnn" class="sticky_link">Blogs</a></li>
                                <li><a href="#sp" class="sticky_link">Newsletters</a></li>
                                <li><a href="#cr" class="sticky_link">Podcasts</a></li>
                                <li><a href="#mf" class="sticky_link">Events and Webinars</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tab menu end -->

        <!-- objective start -->

        <section class="codec-page-section anchor-link" id="cnn">

            <div class="container desktop-view">
                <div class="home-blog">
                    @if ($TrendingBlogs->count() <= 3)
                        <div class="vertical-text vertical-text-single">TRENDING BLOGS</div> {{-- for single row --}}
                    @else
                        <div class="vertical-text">TRENDING BLOGS</div>       {{-- for two row --}}
                    @endif
                    
                    <div class="row">
                        <!-- blog box1 -->
                        @foreach ($TrendingBlogs as $trendingblog)
                            <div class="col-md-4">
                                <div class="template15-wrap-main">
                                    <a href="{{ route('blog-view',  ['category_slug' => $trendingblog->category->slug, 'blog_slug' => $trendingblog->slug]) }}">
                                       
                                        <div class="template15-wrap-main-img">
                                            <img src="{{ asset('storage/uploads/backend/blog/' . $trendingblog->images) }}" />
                                        </div>
                                    </a>
                                    <div class="template15-wrap-main-content">
                                        <span><i>{{ \Carbon\Carbon::parse($trendingblog->created_at)->format('d M Y') }}</i></span>
                                            <h4><a href="{{ route('blog-view',  ['category_slug' => $trendingblog->category->slug, 'blog_slug' => $trendingblog->slug]) }}">{{ $trendingblog->sub_category	 }}</a>
                                        </h4>
                                        <p>
                                            {{ $trendingblog->short_desc}}
                                            <a href="{{ route('blog-view',  ['category_slug' => $trendingblog->category->slug, 'blog_slug' => $trendingblog->slug]) }}">Read More[...]</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- blog box1 end -->
                    </div>
                    <div class="blog-view">
                        <a href="{{ route('blogs') }}">View all</a>
                    </div>
                </div>

            </div>

            <div class="container mobile-view" id="mhome-div1">
                <div class="home-blog">
                    <div class="m-title" style="background-color: #ccc">
                        <h3>Trending Blogs</h3>
                    </div>
                    <div id="cninsight-slider11" class="owl-carousel owl-theme">
                        <!-- blog box1 -->
                        @foreach ($TrendingBlogs->take(3) as $trendingblog)
                        <div class="item">
                            <div class="template15-wrap-main">
                                <div class="template15-wrap-main-img">
                                    {{-- <img src="{{ asset('assets/images/networks-8.jpg') }}"> --}}
                                    <img src="{{ asset('storage/uploads/backend/blog/' . $trendingblog->images) }}" />
                                </div>
                                <div class="template15-wrap-main-content">
                                    {{-- <span><i>19 Oct 2020</i></span> --}}
                                    <span><i>{{ \Carbon\Carbon::parse($trendingblog->created_at)->format('d M Y') }}</i></span>
                                    <h4>
                                        <a href="{{ route('blog-view',  ['category_slug' => $trendingblog->category->slug, 'blog_slug' => $trendingblog->slug]) }}">
                                            
                                            {{ $trendingblog->sub_category	 }}</a>
                                    <p>
                                        {{ $trendingblog->short_desc}}
                                        <a href="{{ route('blog-view',  ['category_slug' => $trendingblog->category->slug, 'blog_slug' => $trendingblog->slug]) }}"> Read More[...]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- blog box1 end -->

                    </div>
                    <div id="cninsight-nav-count11" class="count-nav-box"></div>

                    <div id="cninsight-slider12" class="owl-carousel owl-theme">
                        <!-- + -->
                        <!-- blog box1 -->
                        @foreach ($TrendingBlogs->skip(3) as $trendingblog)
                        <div class="item">
                            <div class="template15-wrap-main">
                                <div class="template15-wrap-main-img">
                                    <img src="{{ asset('storage/uploads/backend/blog/' . $trendingblog->images) }}" />
                                </div>
                                <div class="template15-wrap-main-content">
                                    <span><i>{{ \Carbon\Carbon::parse($trendingblog->created_at)->format('d M Y') }}</i></span>
                                    
                                    <!-- Correctly passing both category_slug and blog_slug -->
                                    <h4>
                                        <a href="{{ route('blog-view', ['category_slug' => $trendingblog->category->slug, 'blog_slug' => $trendingblog->slug]) }}">
                                            {{ $trendingblog->sub_category }}
                                        </a>
                                    </h4>
                                    
                                    <p>
                                        {{ $trendingblog->short_desc }}
                                        <a href="{{ route('blog-view', ['category_slug' => $trendingblog->category->slug, 'blog_slug' => $trendingblog->slug]) }}">
                                            Read More [...]
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <!-- blog box1 end -->
                    </div>
                    <div id="cninsight-nav-count12" class="count-nav-box"></div>
                    <div class="blog-view" style="margin-top: -10px;">
                        <a href="{{ route('blogs') }}">View all Blogs</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- objective end -->
        <!-- Why Codec Network start  -->
        <section class=" light-grey why-codec codec-page-section anchor-link" id="sp">

            <div class="container desktop-view">
                <div class="newsletters">
                    <div class="vertical-text">TRENDING NEWSLETTERS</div>
                    <div class="row">
                        <div class="cn-tabs1">
                            <ul id="tabs-nav1" class="mobile">
                                <div id="owl-demo7">
                                    @foreach ($NewsLetters as $newsletter)
                                    {{-- <li class="item"><a href="#tab11">Automating trust</a></li> --}}
                                    <li class="item"><a href="#tab11{{ $newsletter->slug}}">{{ $newsletter->name}}</a></li>
                                    @endforeach
                                </div>
                            </ul>

                            <ul id="tabs-nav1" class="desktop">
                                @foreach ($NewsLetters as $index=>$newsletter)
                                    <li class="{{ $loop->first ? 'active' : ' ' }}"><a href="#tab11{{ $newsletter->slug}}">{{ $newsletter->name}}</a></li>
                                @endforeach
                            </ul> <!-- END tabs-nav -->
                            <div id="tabs-content">
                                @foreach ($NewsLetters as $newsletter)
                                    <div id="tab11{{ $newsletter->slug}}" class="tab-content1" style="display: block;">
                                        <div class="container ppp20">
                                            <ul id="codec-items2" class="code-pagination">
                                                @foreach ($newsletter->newsletters as $letter)
                                                <li class="col-md-3">
                                                    <div class="codec-wrap-main">
                                                        {{-- <a href="{{ route('newLetter.View',$letter->slug) }}"> --}}
                                                        <a href="{{ route('newLetter.View', ['category_slug' => $newsletter->slug, 'slug' => $letter->slug]) }}">

                                                            <div class="codec-wrap-main-img">
                                                                <img src="{{ asset('storage/uploads/backend/newsletter/' . $letter->images) }}" />
                                                            </div>
                                                        </a>
                                                        <div class="codec-wrap-main-content">
                                                            <h4><a href="{{ route('newLetter.View', ['category_slug' => $newsletter->slug, 'slug' => $letter->slug]) }}">
                                                                {{ $letter->sub_category }}</a></h4>
                                                            <p>{{ $letter->short_desc }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="blog-view">
                                <a href="{{ route('newsletter.main') }}">View all</a>
                                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mobile-view" id="mhome-div2">
                <div class="m-title" style="background-color: #ADD8E6;">
                    <h3>Trending Newsletters</h3>
                </div>
                <div class="acc">
                    <!-- box first start -->
                    @foreach ($NewsLetters as $index=>$newsletter)
                    
                    <div class="acc__card">
                        <a href="#news1{{ $newsletter->slug}}" class="acc__title {{ $loop->first ? 'active' : ' ' }}">{{ $newsletter->name}}</a>
                        <div class="acc__panel" style="{{ $loop->first ? 'display:block' : ' ' }} " id="news1{{ $newsletter->slug}}">
                            <!--  -->
                            <div id="cninsight-slider2{{ $index+1 }}" class="owl-carousel owl-theme">
                                <!-- + -->
                                <!-- blog box1 -->
                                @foreach ($newsletter->newsletters as $letter)
                                <div class="item">
                                    <div class="col-md-3">
                                        <div class="codec-wrap-main">
                                                <a href="{{ route('newLetter.View', ['category_slug' => $newsletter->slug, 'slug' => $letter->slug]) }}">
                                                <div class="codec-wrap-main-img">
                                                    <img src="{{ asset('storage/uploads/backend/newsletter/' . $letter->images) }}" />
                                                </div>
                                            </a>
                                            <div class="codec-wrap-main-content">
                                                <h4> <a href="{{ route('newLetter.View', ['category_slug' => $newsletter->slug, 'slug' => $letter->slug]) }}">{{ $letter->sub_category }}</a></h4>
                                                <p>{{ $letter->short_desc }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div id="cninsight-nav-count2{{ $index+1 }}" class="count-nav-box"></div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>

                    </div>
                    @endforeach 

                    <!-- box three end -->
                </div>
                <div class="blog-view">
                    <a href="{{ route('blogs') }}">View all Newsletters</a>
                </div>
            </div>
        </section>
        <!-- end--->

        <section id="cr" class="codec-page-section anchor-link">
            <div class="container desktop-view">
                <div class="podcast">
                    <div class="vertical-text">TRENDING PODCASTS</div>
                    <div class="row">
                        @foreach ($Trendingpodcast as $podcast)
                        <div class="col-md-4">
                            <div data-videourl="{{ $podcast->video_url }}" class="podcast-video">
                                {{-- <img src="{{asset('assets/images/video-thumb.jpg')}}"> --}}
                                <img src="{{ asset('storage/uploads/backend/podcast/' . $podcast->images) }}" />
                            </div>
                        </div>
                        @endforeach
                       
                    </div>

                    <div class="blog-view">
                        <a href="{{ route('podcast.View') }}">View all</a>
                    </div>
                </div>
            </div>
            <div class="container mobile-view" id="mhome-div3">
                <div class="m-title" style="background-color: #90EE90">
                    <h3>Trending Podcasts</h3>
                </div>
                <div id="cninsight-slider3" class="owl-carousel owl-theme">
                    <!-- + -->
                    @foreach ($Trendingpodcast as $podcast)
                    <div class="item">
                        <div data-videourl="{{ $podcast->video_url }}" class="podcast-video">
                            <img src="{{ asset('storage/uploads/backend/podcast/' . $podcast->images) }}" />
                        </div>
                    </div>
                    @endforeach
                    <!--  -->
                </div>
                <div id="cninsight-nav-count3" class="count-nav-box"></div>
                <div class="blog-view">
                    <a href="{{ route('podcast.View') }}">View all Podcasts</a>
                </div>
            </div>
        </section>

        <!-- Why Codec Network start  -->
        <section id="mf" class="light-grey codec-page-section anchor-link">
            <div class="container desktop-view">
                <div class="events">
                    <div class="vertical-text">TRENDING EVENTS</div>
                    <div class="row">
                        <div class="cn-tabs">

                            <ul id="tabs-nav" class="mobile">
                                <div id="owl-demo6" class="owl-carousel owl-theme" style="display: block; opacity: 0;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 1000px; left: 0px; display: block;">
                                            <div class="owl-item" style="width: 100px;">
                                                @foreach ($Events as $event)
                                                <li class="{{ $loop->first ? 'active' : ' '}}"><a href="#{{ $event->slug }}">{{ $event->name }}</a></li>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-controls clickable">
                                        <div class="owl-pagination">
                                            <div class="owl-page active"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                        </div>
                                        <div class="owl-buttons">
                                            <div class="owl-prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                            </div>
                                            <div class="owl-next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </ul>
                            <ul id="tabs-nav" class="desktop">
                                @foreach ($Events as $event)
                                <li class="{{ $loop->first ? 'active' : ' '}}"><a href="#{{ $event->slug}}">{{ $event->name }}</a></li>
                                 @endforeach
                            </ul> <!-- END tabs-nav -->

                            <div id="tabs-content">
                                <!-- 1-->
                                @foreach ($Events as $event)
                                <div id="{{ $event->slug}}" class="tab-content" style="display: block;">
                                    <div class="container">
                                        <ul id="codec-items5" class="code-pagination">
                                            @foreach ($event->events as $eventItem)
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="{{ route('events-view', $event->slug) }}">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="{{ asset('storage/uploads/backend/event/' . $eventItem->images) }}" />
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="{{ route('events-view', $event->slug) }}">{{ $eventItem->sub_category }}</a></h4>
                                                        <p>{{ $eventItem->short_desc }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                                <!-- 5/-->

                            </div>
                        </div>
                    </div>
                    <div class="blog-view" style="margin-top: -80px;">
                        <div class="blog-view">
                            <a href="{{ route('events') }}">View all</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mobile-view" id="mhome-div4">
                <div class="m-title" style="background-color: #F08080">
                    <h3>Trending Events and Webinars</h3>
                </div>
                <div id="cninsight-slider4" class="owl-carousel owl-theme">
                    @foreach ($TrendingEvents as $trendingEvent)
                    @foreach ($trendingEvent->events as $event)
                        <div class="item">
                            <div class="col-md-3">
                                <div class="codec-wrap-main">
                                    <a href="{{ route('events-view', $trendingEvent->slug) }}">
                                        <div class="codec-wrap-main-img">
                                            <img src="{{ asset('storage/uploads/backend/event/' . $event->images) }}" />
                                        </div>
                                    </a>
                                    <div class="codec-wrap-main-content">
                                        <h4><a href="{{ route('events-view', $trendingEvent->slug) }}">{{ $event->sub_category }}</a></h4>
                                        <p>{{ $event->short_desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endforeach
                    
                </div>
                <div id="cninsight-nav-count4" class="count-nav-box"></div>

                <div class="blog-view">
                    <a href="{{ route('events') }}">View all Events and webinars</a>
                </div>
            </div>
        </section>

        <a href="#template15" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>

    </body>
@endsection
<!-- Jquery code -->
@push('scripts')
    <script src="{{asset('assets/js/slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/common.js?v-1')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/homepage.js?v14')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/mobile-menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js?v=32')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/swiper.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#menu-icon').on('click', function () {
                $('.top-menu-main').toggle();
                return false;
            });
        });
        // Show the first tab and hide the rest
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show(500);
        // Click function
        $('#tabs-nav li').click(function () {
            $('#tabs-nav li').removeClass('active');
            $(this).addClass('active');
            $('.tab-content').hide();

            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
        });
        // Show the first tab and hide the rest
        $('#tabs-nav1 li:first-child').addClass('active');
        $('.tab-content1').hide();
        $('.tab-content1:first').show();
        // Click function
        $('#tabs-nav1 li').click(function () {
            $('#tabs-nav1 li').removeClass('active');
            $(this).addClass('active');
            $('.tab-content1').hide();

            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
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

        // bottom to top scroll
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
        $(function () {
            initializeCarousel("cninsight-slider11", "cninsight-nav-count11");
            initializeCarousel("cninsight-slider12", "cninsight-nav-count12");
            initializeCarousel("cninsight-slider21", "cninsight-nav-count21");
            initializeCarousel("cninsight-slider22", "cninsight-nav-count22");
            initializeCarousel("cninsight-slider23", "cninsight-nav-count23");
            initializeCarousel("cninsight-slider3", "cninsight-nav-count3");
            initializeCarousel("cninsight-slider4", "cninsight-nav-count4");
            function initializeCarousel(carouselID, navigationCountID) {
                var owl = $("#" + carouselID);

                owl.owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    navigationText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
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
                            items: 1
                        }
                    },
                    onInitialized: updateNavigationCount,
                    onChanged: updateNavigationCount
                });

                function updateNavigationCount(e) {
                    if (!e.namespace) {
                        return;
                    }
                    var carousel = e.relatedTarget;
                    $("#" + navigationCountID).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
                }
            }
        });
    </script>
    <script>
        $('.close-acrodin').click(function (e) {
            e.preventDefault();
            var $panel = $(this).closest('.acc__panel');
            $panel.slideUp();
            $(this).closest('.acc').find('.acc__title.active').removeClass('active');

            var $accTitle = $(this).closest('.acc__card').find('.acc__title');
            if ($accTitle.length > 0) {
                $('html, body').scrollTop($accTitle.offset().top - 60);
            }
        });
    </script>
    @include('frontend.layouts.right-menu-js')
@endpush