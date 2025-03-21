{{--
<!DOCTYPE html>
<html>

<head>
    <title>Codec Networks - Template 16</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS start -->


    {{--
</head> --}}

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
        <!-- Brecumb -->

        <!-- breadcromb end -->
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
            <div class="container">
                <div class="home-blog">
                    <div class="vertical-text">TRENDING BLOGS</div>
                    <div class="row">
                        <!-- blog box1 -->
                        <div class="col-md-4">
                            <div class="template15-wrap-main">
                                <a href="blog-view.php">
                                    <div class="template15-wrap-main-img">
                                        <img src="{{asset('assets/images/networks-8.jpg')}}">
                                    </div>
                                </a>
                                <div class="template15-wrap-main-content">
                                    <span><i>19 Oct 2020</i></span>
                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                    </h4>

                                    <p>
                                        Offers buffey of security programs, tools and techniques that are
                                        globally
                                        accepted in Information and Cyber Security Assurance.
                                        <a href="blog-view.php"> Read More[...]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- blog box1 end -->
                        <!-- blog box2 -->
                        <div class="col-md-4">
                            <div class="template15-wrap-main">
                                <a href="blog-view.php">
                                    <div class="template15-wrap-main-img">
                                        <img src="{{asset('assets/images/ec-council-1.jpg')}}">
                                    </div>
                                </a>
                                <div class="template15-wrap-main-content">
                                    <span><i>19 Oct 2020</i></span>
                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                    </h4>
                                    <p>
                                        Offers buffey of security programs, tools and techniques that are
                                        globally
                                        accepted in Information and Cyber Security Assurance.
                                        <a href="blog-view.php"> Read More[...]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- blog box2 end -->
                        <!-- blog box3 -->
                        <div class="col-md-4">
                            <div class="template15-wrap-main">
                                <a href="blog-view.php">
                                    <div class="template15-wrap-main-img">
                                        <img src="{{asset('assets/images/PECB-Acc-Certification.jpg')}}">
                                    </div>
                                </a>
                                <div class="template15-wrap-main-content">
                                    <span><i>19 Oct 2020</i></span>
                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                    </h4>
                                    <p>
                                        Offers buffey of security programs, tools and techniques that are
                                        globally
                                        accepted in Information and Cyber Security Assurance.
                                        <a href="blog-view.php"> Read More[...]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- blog box3 end -->
                    </div>
                    <div class="row">
                        <!-- blog box1 -->
                        <div class="col-md-4">
                            <div class="template15-wrap-main">
                                <a href="blog-view.php">
                                    <div class="template15-wrap-main-img">
                                        <img src="{{asset('assets/images/networks-8.jpg')}}">
                                    </div>
                                </a>
                                <div class="template15-wrap-main-content">
                                    <span><i>19 Oct 2020</i></span>
                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                    </h4>

                                    <p>
                                        Offers buffey of security programs, tools and techniques that are
                                        globally
                                        accepted in Information and Cyber Security Assurance.
                                        <a href="blog-view.php"> Read More[...]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- blog box1 end -->
                        <!-- blog box2 -->
                        <div class="col-md-4">
                            <div class="template15-wrap-main">
                                <a href="blog-view.php">
                                    <div class="template15-wrap-main-img">
                                        <img src="{{asset('assets/images/ec-council-1.jpg')}}">
                                    </div>
                                </a>
                                <div class="template15-wrap-main-content">
                                    <span><i>19 Oct 2020</i></span>
                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                    </h4>
                                    <p>
                                        Offers buffey of security programs, tools and techniques that are
                                        globally
                                        accepted in Information and Cyber Security Assurance.
                                        <a href="blog-view.php"> Read More[...]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- blog box2 end -->
                        <!-- blog box3 -->
                        <div class="col-md-4">
                            <div class="template15-wrap-main">
                                <a href="blog-view.php">
                                    <div class="template15-wrap-main-img">
                                        <img src="{{asset('assets/images/PECB-Acc-Certification.jpg')}}">
                                    </div>
                                </a>
                                <div class="template15-wrap-main-content">
                                    <span><i>19 Oct 2020</i></span>
                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                    </h4>
                                    <p>
                                        Offers buffey of security programs, tools and techniques that are
                                        globally
                                        accepted in Information and Cyber Security Assurance.
                                        <a href="blog-view.php"> Read More[...]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- blog box3 end -->
                    </div>
                    <div class="blog-view">
                        <a href="{{ route('blogs') }}">View all</a>
                    </div>
                </div>

            </div>


        </section>
        <!-- objective end -->
        <!-- Why Codec Network start  -->
        <section class=" light-grey why-codec codec-page-section anchor-link" id="sp">

            <div class="container">
                <div class="newsletters">
                    <div class="vertical-text">TRENDING NEWSLETTERS</div>
                    <div class="row">
                        <div class="cn-tabs1">

                            <ul id="tabs-nav1" class="mobile">
                                <div id="owl-demo7">

                                    <li class="item"><a href="#tab11">Automating trust</a></li>
                                    <li class="item"><a href="#tab12">Immersive interfaces</a></li>
                                    <li class="item"><a href="#tab13">Extended reality </a></li>


                                </div>

                            </ul>


                            <ul id="tabs-nav1" class="desktop">
                                <li class="active"><a href="#tab11">Automating trust</a></li>
                                <li><a href="#tab12">Immersive interfaces</a></li>
                                <li><a href="#tab13">Extended reality </a></li>

                            </ul> <!-- END tabs-nav -->
                            <div id="tabs-content">
                                <div id="tab11" class="tab-content1" style="display: block;">


                                    <div class="container ppp20">
                                        <ul id="codec-items2" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="{{ route('newLetter.View') }}">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="{{ route('newLetter.View') }}">Network Administration
                                                                and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>


                                </div>
                                <div id="tab12" class="tab-content1" style="display: none;">
                                    <div class="container ppp20">
                                        <ul id="codec-items1" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                                <div id="tab13" class="tab-content1" style="display: none;">
                                    <div class="container ppp20">
                                        <ul id="codec-items3" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>


                                    <!-- END tabs-content -->
                                </div> <!-- END tabs -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end--->


        <section id="cr" class="codec-page-section anchor-link">
            <div class="container">
                <div class="podcast">
                    <div class="vertical-text">TRENDING PODCASTS</div>
                    <div class="row">
                        <div class="col-md-4">
                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio" class="podcast-video">
                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio" class="podcast-video">
                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio" class="podcast-video">
                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio" class="podcast-video">
                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio" class="podcast-video">
                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio" class="podcast-video">
                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="blog-view">
                        <a href="{{ route('podcast.View') }}">View all</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Codec Network start  -->
        <section id="mf" class="light-grey codec-page-section anchor-link">
            <div class="container">
                <div class="events">
                    <div class="vertical-text">TRENDING EVENTS</div>
                    <div class="row">
                        <div class="cn-tabs">

                            <ul id="tabs-nav" class="mobile">
                                <div id="owl-demo6" class="owl-carousel owl-theme" style="display: block; opacity: 0;">

                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 1000px; left: 0px; display: block;">
                                            <div class="owl-item" style="width: 100px;">
                                                <li class="active"><a href="#tab1">Case</a></li>
                                            </div>
                                            <div class="owl-item" style="width: 100px;">
                                                <li><a href="#tab2">Cciso</a></li>
                                            </div>
                                            <div class="owl-item" style="width: 100px;">
                                                <li><a href="#tab3">Ceh </a></li>
                                            </div>
                                            <div class="owl-item" style="width: 100px;">
                                                <li><a href="#tab4">CHFI </a></li>
                                            </div>
                                            <div class="owl-item" style="width: 100px;">
                                                <li><a href="#tab5">CND</a></li>
                                            </div>
                                            <div class="owl-item" style="width: 100px;">
                                                <li><a href="#tab6">CSCU</a></li>
                                            </div>
                                            <div class="owl-item" style="width: 100px;">
                                                <li><a href="#tab7">ECSS</a></li>
                                            </div>
                                            <div class="owl-item" style="width: 100px;">
                                                <li><a href="#tab8">ECIH</a></li>
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
                                <li class="active"><a href="#tab1">Case</a></li>
                                <li><a href="#tab2">Cciso</a></li>
                                <li><a href="#tab3">Ceh </a></li>
                                <li><a href="#tab4">CHFI</a></li>
                                <li><a href="#tab5">CND </a></li>
                                <li><a href="#tab6">CSCU</a></li>
                                <li><a href="#tab7">ECSS</a></li>
                                <li><a href="#tab8">ECIH</a></li>
                            </ul> <!-- END tabs-nav -->

                            <div id="tabs-content">
                                <!-- 1-->
                                <div id="tab1" class="tab-content" style="display: block;">
                                    <div class="container">
                                        <ul id="codec-items5" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- 1 /-->
                                <!-- 2-->
                                <div id="tab2" class="tab-content" style="display: none;">
                                    <div class="container">
                                        <ul id="codec-items6" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- 2/-->
                                <!-- 3-->
                                <div id="tab3" class="tab-content" style="display: none;">
                                    <div class="container">
                                        <ul id="codec-items7" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- 3/-->
                                <!-- 4-->
                                <div id="tab4" class="tab-content" style="display: none;">
                                    <div class="container">
                                        <ul id="codec-items8" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- 4/-->
                                <!-- 5-->

                                <div id="tab5" class="tab-content" style="display: none;">
                                    <div class="container">
                                        <ul id="codec-items9" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- 5/-->
                                <!-- 5-->

                                <div id="tab6" class="tab-content" style="display: none;">
                                    <div class="container">
                                        <ul id="codec-items10" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 5/-->
                                <!-- 5-->

                                <div id="tab7" class="tab-content" style="display: none;">
                                    <div class="container">
                                        <ul id="codec-items11" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- 5/-->
                                <!-- 5-->

                                <div id="tab8" class="tab-content" style="display: none;">
                                    <div class="container">
                                        <ul id="codec-items12" class="code-pagination">
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="codec-wrap-main">
                                                    <a href="#">
                                                        <div class="codec-wrap-main-img">
                                                            <img src="assets/images/networks-8.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="codec-wrap-main-content">
                                                        <h4><a href="#">Network Administration and Security</a></h4>
                                                        <p>Offers buffey of security programs, tools and techniques that are
                                                            globally accepted in Information and Cyber Security Assurance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- 5/-->

                            </div>
                        </div>
                    </div>
                    <div class="blog-view" style="margin-top: -130px;">
                        <div class="blog-view">
                            <a href="{{ route('blogs') }}">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>



    </body>
@endsection
<!-- Jquery code -->
@push('scripts')
    <script type="text/javascript" src="assets/js/carousel.js"></script>
    <script type="text/javascript" src="assets/js/swiper.js"></script>
    <script src='assets/js/pagination.js'></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/pagination-custom.js"></script>
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
    @include('frontend.layouts.right-menu-js')
@endpush