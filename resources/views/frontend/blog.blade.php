@extends('frontend.layouts.app')

@section('title', 'Blogs')

@section('content')

    <body id="body-main">
        <a id="button"></a>
        <!-- Header start -->
        @include('frontend.layouts.blog-header')
        <!-- banner start -->
        <section class="sec_ban" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/resouces.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>Blog</h2>
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
                            <li><a href="#ps" class="active">Professional Services</a></li>
                            <li><a href="#so">Security Operations</a></li>
                            <li><a href="#as">Application Security</a></li>
                            <li><a href="#ws">Web Security</a></li>
                            <li><a href="#vapt">VAPT</a></li>
                            <li><a href="#echical-hacker">Ethical Hacker</a></li>
                            <li><a href="#pecb">PECB</a></li>
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
        <section class="resc-sec blog-sec" id="ps">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button bbg1">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Professional Services</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel1 owl-carousel owl-theme">
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/networks-8.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/ec-council-1.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/PECB-Acc-Certification.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-security-pene.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/Security-oprations-4.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-forensic-5.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div id="navigation-count" class="count-nav-box"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="resc-sec blog-sec blog-bg" id="so">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button bbg2 ">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Security Operations</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel2 owl-carousel owl-theme">
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/networks-8.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/ec-council-1.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/PECB-Acc-Certification.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-security-pene.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/Security-oprations-4.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-forensic-5.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div id="navigation-count1" class="count-nav-box"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <!-- tab menu end -->
        <section class="resc-sec blog-sec" id="as">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button bbg3">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Application Security</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel3 owl-carousel owl-theme">
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/networks-8.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/ec-council-1.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/PECB-Acc-Certification.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-security-pene.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/Security-oprations-4.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-forensic-5.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div id="navigation-count2" class="count-nav-box"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="resc-sec blog-sec blog-bg" id="ws">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button bbg4">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Web Security</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel4 owl-carousel owl-theme">
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/networks-8.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/ec-council-1.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/PECB-Acc-Certification.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-security-pene.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/Security-oprations-4.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-forensic-5.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div id="navigation-count3" class="count-nav-box"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <!-- tab menu end -->
        <section class="resc-sec blog-sec " id="vapt">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button bbg5">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>VAPT</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel5 owl-carousel owl-theme">
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/networks-8.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/ec-council-1.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/PECB-Acc-Certification.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-security-pene.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/Security-oprations-4.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-forensic-5.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div id="navigation-count4" class="count-nav-box"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="resc-sec blog-sec blog-bg" id="echical-hacker">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button bbg6">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>Ethical Hacker</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel6 owl-carousel owl-theme">
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/networks-8.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/ec-council-1.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/PECB-Acc-Certification.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-security-pene.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/Security-oprations-4.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-forensic-5.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div id="navigation-count5" class="count-nav-box"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <!--  -->
        <section class="resc-sec blog-sec" id="pecb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="title-button bbg7">
                                    <h3 class="style1"><i class="fa fa-2x fa-file"></i>PECB</h3>
                                </div>
                                <div class="carousel-wrap">
                                    <div class="owl-carousel7 owl-carousel owl-theme">
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/networks-8.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/ec-council-1.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/PECB-Acc-Certification.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-security-pene.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/Security-oprations-4.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="item">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="assets/images/cyber-forensic-5.jpg" />
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="{{ route('blog-view') }}">Network Administration and
                                                            Security</a></h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="{{ route('blog-view') }}"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div id="navigation-count6" class="count-nav-box"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        {{-- <a href="#body-main" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a> --}}
        {{-- @include('frontend.layouts.footer') --}}
        </div>
    </body>
@endsection

@push('scripts')
    <!-- Jquery code -->
    {{-- <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script> --}}
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

            initializeCarousel('.owl-carousel1', "navigation-count");
            initializeCarousel('.owl-carousel2', "navigation-count1");
            initializeCarousel('.owl-carousel3', "navigation-count2");
            initializeCarousel('.owl-carousel4', "navigation-count3");
            initializeCarousel('.owl-carousel5', "navigation-count4");
            initializeCarousel('.owl-carousel6', "navigation-count5");
            initializeCarousel('.owl-carousel7', "navigation-count6");

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
@endpush
