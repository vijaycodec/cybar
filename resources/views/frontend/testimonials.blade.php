@extends('frontend.layouts.app')

@section('title', 'Testimonials')

@section('content')

  <body id="body-main">
    <a id="button">
    </a>
    <!-- Header start -->
    
    @include('frontend.layouts.testo-header')
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
      <section class="testimonials testimonials-page testo1 resc-sec "  id="ps">
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
                        <div class="ceh-testo-box" data-target="client-testimonials-popup1">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="ceh-testo-image">
                                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="ceh-testo-cont">
                                <div class="ceh-testo-title">
                                  <h3>
                                    Aditi Malhotra
                                  </h3>
                                  <span>
                                    Student
                                  </span>
                                </div>
                                <div class="ceh-testo-body">
                                  <p>
                                    Fresh-Net has a way of changing my perspective so that life's possibilities
                                    open up tremendously when I work with them. It feels great having when
                                    someone listens to you and helps you figure out your own next steps in
                                    your life.&nbsp;
                                  </p>
                                  <span>
                                    Read More
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- testo 1 end -->
                      <!-- testo 1 start -->
                      <div class="item">
                        <div class="ceh-testo-box" data-target="client-testimonials-popup2">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="ceh-testo-image">
                                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="ceh-testo-cont">
                                <div class="ceh-testo-title">
                                  <h3>
                                    Aditi Malhotra
                                  </h3>
                                  <span>
                                    Student
                                  </span>
                                </div>
                                <div class="ceh-testo-body">
                                  <p>
                                    Fresh-Net has a way of changing my perspective so that life's possibilities
                                    open up tremendously when I work with them. It feels great having when
                                    someone listens to you and helps you figure out your own next steps in
                                    your life.&nbsp;
                                  </p>
                                  <span>
                                    Read More
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- testo 1 end -->
                      <!-- testo 1 start -->
                      <div class="item">
                        <div class="ceh-testo-box" data-target="client-testimonials-popup3">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="ceh-testo-image">
                                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="ceh-testo-cont">
                                <div class="ceh-testo-title">
                                  <h3>
                                    Aditi Malhotra
                                  </h3>
                                  <span>
                                    Student
                                  </span>
                                </div>
                                <div class="ceh-testo-body">
                                  <p>
                                    Fresh-Net has a way of changing my perspective so that life's possibilities
                                    open up tremendously when I work with them. It feels great having when
                                    someone listens to you and helps you figure out your own next steps in
                                    your life.&nbsp;
                                  </p>
                                  <span>
                                    Read More
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- testo 1 end -->
                      <!-- testo 1 start -->
                      <div class="item">
                        <div class="ceh-testo-box" data-target="client-testimonials-popup4">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="ceh-testo-image">
                                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="ceh-testo-cont">
                                <div class="ceh-testo-title">
                                  <h3>
                                    Aditi Malhotra
                                  </h3>
                                  <span>
                                    Student
                                  </span>
                                </div>
                                <div class="ceh-testo-body">
                                  <p>
                                    Fresh-Net has a way of changing my perspective so that life's possibilities
                                    open up tremendously when I work with them. It feels great having when
                                    someone listens to you and helps you figure out your own next steps in
                                    your life.&nbsp;
                                  </p>
                                  <span>
                                    Read More
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- testo 1 end -->
                    </div>
                    <div id="navigation-count" class="count-nav-box"></div>
                  </div>
                </div>
               
                @include('frontend.mobile-components.m-testimonials')
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- tab menu end -->
      <section class="testimonials testimonials-page testo1 testimonials-bg resc-sec " id="so">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="wpb_text_column wpb_content_element">
                <div class="wpb_wrapper">
                  <div class="title-button">
                    <h3 class="style1 tbg1">
                      <i class="fa fa-2x fa-file">
                      </i>
                      Security Operations
                    </h3>
                  </div>
                  <div class="carousel-wrap">
                    <div class="owl-carousel2 owl-carousel owl-theme">
                      <!-- testo 1 start -->
                      <div class="item">
                        <div class="ceh-testo-box" data-target="client-testimonials-popup1">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="ceh-testo-image">
                                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="ceh-testo-cont">
                                <div class="ceh-testo-title">
                                  <h3>
                                    Aditi Malhotra
                                  </h3>
                                  <span>
                                    Student
                                  </span>
                                </div>
                                <div class="ceh-testo-body">
                                  <p>
                                    Fresh-Net has a way of changing my perspective so that life's possibilities
                                    open up tremendously when I work with them. It feels great having when
                                    someone listens to you and helps you figure out your own next steps in
                                    your life.&nbsp;
                                  </p>
                                  <span>
                                    Read More
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- testo 1 end -->
                      <!-- testo 1 start -->
                      <div class="item">
                        <div class="ceh-testo-box" data-target="client-testimonials-popup2">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="ceh-testo-image">
                                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="ceh-testo-cont">
                                <div class="ceh-testo-title">
                                  <h3>
                                    Aditi Malhotra
                                  </h3>
                                  <span>
                                    Student
                                  </span>
                                </div>
                                <div class="ceh-testo-body">
                                  <p>
                                    Fresh-Net has a way of changing my perspective so that life's possibilities
                                    open up tremendously when I work with them. It feels great having when
                                    someone listens to you and helps you figure out your own next steps in
                                    your life.&nbsp;
                                  </p>
                                  <span>
                                    Read More
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- testo 1 end -->
                      <!-- testo 1 start -->
                      <div class="item">
                        <div class="ceh-testo-box" data-target="client-testimonials-popup3">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="ceh-testo-image">
                                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="ceh-testo-cont">
                                <div class="ceh-testo-title">
                                  <h3>
                                    Aditi Malhotra
                                  </h3>
                                  <span>
                                    Student
                                  </span>
                                </div>
                                <div class="ceh-testo-body">
                                  <p>
                                    Fresh-Net has a way of changing my perspective so that life's possibilities
                                    open up tremendously when I work with them. It feels great having when
                                    someone listens to you and helps you figure out your own next steps in
                                    your life.&nbsp;
                                  </p>
                                  <span>
                                    Read More
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- testo 1 end -->
                      <!-- testo 1 start -->
                      <div class="item">
                        <div class="ceh-testo-box" data-target="client-testimonials-popup4">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="ceh-testo-image">
                                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="ceh-testo-cont">
                                <div class="ceh-testo-title">
                                  <h3>
                                    Aditi Malhotra
                                  </h3>
                                  <span>
                                    Student
                                  </span>
                                </div>
                                <div class="ceh-testo-body">
                                  <p>
                                    Fresh-Net has a way of changing my perspective so that life's possibilities
                                    open up tremendously when I work with them. It feels great having when
                                    someone listens to you and helps you figure out your own next steps in
                                    your life.&nbsp;
                                  </p>
                                  <span>
                                    Read More
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- testo 1 end -->
                    </div>
                    <div id="navigation-count1" class="count-nav-box"></div>
                  </div>
                </div>
                @include('frontend.mobile-components.m-testimonials')
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials testimonials-page testo1 resc-sec " id="as">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="wpb_text_column wpb_content_element">
                <!--  -->
                <div class="wpb_wrapper">
  <div class="title-button">
    <h3 class="style1 tbg2">
      <i class="fa fa-2x fa-file">
      </i>
      Application Security
    </h3>
  </div>
  <div class="carousel-wrap">
    <div class="owl-carousel3 owl-carousel owl-theme">
      <!-- testo 1 start -->
      <div class="item">
        <div class="ceh-testo-box" data-target="client-testimonials-popup1">
          <div class="row">
            <div class="col-md-4">
              <div class="ceh-testo-image">
                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
              </div>
            </div>
            <div class="col-md-8">
              <div class="ceh-testo-cont">
                <div class="ceh-testo-title">
                  <h3>
                    Aditi Malhotra
                  </h3>
                  <span>
                    Student
                  </span>
                </div>
                <div class="ceh-testo-body">
                  <p>
                    Fresh-Net has a way of changing my perspective so that life's possibilities
                    open up tremendously when I work with them. It feels great having when
                    someone listens to you and helps you figure out your own next steps in
                    your life.&nbsp;
                  </p>
                  <span>
                    Read More
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testo 1 end -->
      <!-- testo 1 start -->
      <div class="item">
        <div class="ceh-testo-box" data-target="client-testimonials-popup2">
          <div class="row">
            <div class="col-md-4">
              <div class="ceh-testo-image">
                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
              </div>
            </div>
            <div class="col-md-8">
              <div class="ceh-testo-cont">
                <div class="ceh-testo-title">
                  <h3>
                    Aditi Malhotra
                  </h3>
                  <span>
                    Student
                  </span>
                </div>
                <div class="ceh-testo-body">
                  <p>
                    Fresh-Net has a way of changing my perspective so that life's possibilities
                    open up tremendously when I work with them. It feels great having when
                    someone listens to you and helps you figure out your own next steps in
                    your life.&nbsp;
                  </p>
                  <span>
                    Read More
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testo 1 end -->
      <!-- testo 1 start -->
      <div class="item">
        <div class="ceh-testo-box" data-target="client-testimonials-popup3">
          <div class="row">
            <div class="col-md-4">
              <div class="ceh-testo-image">
                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
              </div>
            </div>
            <div class="col-md-8">
              <div class="ceh-testo-cont">
                <div class="ceh-testo-title">
                  <h3>
                    Aditi Malhotra
                  </h3>
                  <span>
                    Student
                  </span>
                </div>
                <div class="ceh-testo-body">
                  <p>
                    Fresh-Net has a way of changing my perspective so that life's possibilities
                    open up tremendously when I work with them. It feels great having when
                    someone listens to you and helps you figure out your own next steps in
                    your life.&nbsp;
                  </p>
                  <span>
                    Read More
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testo 1 end -->
      <!-- testo 1 start -->
      <div class="item">
        <div class="ceh-testo-box" data-target="client-testimonials-popup4">
          <div class="row">
            <div class="col-md-4">
              <div class="ceh-testo-image">
                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
              </div>
            </div>
            <div class="col-md-8">
              <div class="ceh-testo-cont">
                <div class="ceh-testo-title">
                  <h3>
                    Aditi Malhotra
                  </h3>
                  <span>
                    Student
                  </span>
                </div>
                <div class="ceh-testo-body">
                  <p>
                    Fresh-Net has a way of changing my perspective so that life's possibilities
                    open up tremendously when I work with them. It feels great having when
                    someone listens to you and helps you figure out your own next steps in
                    your life.&nbsp;
                  </p>
                  <span>
                    Read More
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testo 1 end -->
    </div>
    <div id="navigation-count2" class="count-nav-box"></div>
  </div>
</div>
@include('frontend.mobile-components.m-testimonials')
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- tab menu end -->
      <section class="testimonials testimonials-page testo1 testimonials-bg resc-sec " id="ws">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="wpb_text_column wpb_content_element">
              <div class="wpb_wrapper">
  <div class="title-button">
    <h3 class="style1 tbg3">
      <i class="fa fa-2x fa-file">
      </i>
      Web Security
    </h3>
  </div>
  <div class="carousel-wrap">
    <div class="owl-carousel4 owl-carousel owl-theme">
      <!-- testo 1 start -->
      <div class="item">
        <div class="ceh-testo-box" data-target="client-testimonials-popup1">
          <div class="row">
            <div class="col-md-4">
              <div class="ceh-testo-image">
                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
              </div>
            </div>
            <div class="col-md-8">
              <div class="ceh-testo-cont">
                <div class="ceh-testo-title">
                  <h3>
                    Aditi Malhotra
                  </h3>
                  <span>
                    Student
                  </span>
                </div>
                <div class="ceh-testo-body">
                  <p>
                    Fresh-Net has a way of changing my perspective so that life's possibilities
                    open up tremendously when I work with them. It feels great having when
                    someone listens to you and helps you figure out your own next steps in
                    your life.&nbsp;
                  </p>
                  <span>
                    Read More
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testo 1 end -->
      <!-- testo 1 start -->
      <div class="item">
        <div class="ceh-testo-box" data-target="client-testimonials-popup2">
          <div class="row">
            <div class="col-md-4">
              <div class="ceh-testo-image">
                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
              </div>
            </div>
            <div class="col-md-8">
              <div class="ceh-testo-cont">
                <div class="ceh-testo-title">
                  <h3>
                    Aditi Malhotra
                  </h3>
                  <span>
                    Student
                  </span>
                </div>
                <div class="ceh-testo-body">
                  <p>
                    Fresh-Net has a way of changing my perspective so that life's possibilities
                    open up tremendously when I work with them. It feels great having when
                    someone listens to you and helps you figure out your own next steps in
                    your life.&nbsp;
                  </p>
                  <span>
                    Read More
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testo 1 end -->
      <!-- testo 1 start -->
      <div class="item">
        <div class="ceh-testo-box" data-target="client-testimonials-popup3">
          <div class="row">
            <div class="col-md-4">
              <div class="ceh-testo-image">
                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
              </div>
            </div>
            <div class="col-md-8">
              <div class="ceh-testo-cont">
                <div class="ceh-testo-title">
                  <h3>
                    Aditi Malhotra
                  </h3>
                  <span>
                    Student
                  </span>
                </div>
                <div class="ceh-testo-body">
                  <p>
                    Fresh-Net has a way of changing my perspective so that life's possibilities
                    open up tremendously when I work with them. It feels great having when
                    someone listens to you and helps you figure out your own next steps in
                    your life.&nbsp;
                  </p>
                  <span>
                    Read More
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testo 1 end -->
      <!-- testo 1 start -->
      <div class="item">
        <div class="ceh-testo-box" data-target="client-testimonials-popup4">
          <div class="row">
            <div class="col-md-4">
              <div class="ceh-testo-image">
                <img src="assets/images/testo.jpg" class="img-fluid" alt="t1">
              </div>
            </div>
            <div class="col-md-8">
              <div class="ceh-testo-cont">
                <div class="ceh-testo-title">
                  <h3>
                    Aditi Malhotra
                  </h3>
                  <span>
                    Student
                  </span>
                </div>
                <div class="ceh-testo-body">
                  <p>
                    Fresh-Net has a way of changing my perspective so that life's possibilities
                    open up tremendously when I work with them. It feels great having when
                    someone listens to you and helps you figure out your own next steps in
                    your life.&nbsp;
                  </p>
                  <span>
                    Read More
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testo 1 end -->
    </div>
    <div id="navigation-count3" class="count-nav-box"></div>
  </div>
</div>
@include('frontend.mobile-components.m-testimonials')
              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- <a href="#body-main" class="scrollToTop" style="display: block;">
        <i class="fa fa-arrow-up">
        </i>
      </a> --}}
      {{-- @include('frontend.layouts.footer') --}}
        </div>
  </body>

  @endsection
  <!-- Jquery code -->

@push('scripts')
    
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
        if (!event.namespace)  {
      return;
    }
    var carousel = event.relatedTarget;
    $("#" + navigationCountId).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
    }

    initializeCarousel('.owl-carousel1', "navigation-count");
    initializeCarousel('.owl-carousel2', "navigation-count1");
    initializeCarousel('.owl-carousel3', "navigation-count2");
    initializeCarousel('.owl-carousel4', "navigation-count3");

});

   
  </script>
  <script>
    $("#resocues-menu").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<div class='prev'><i class='fa fa-caret-left'></i></div>", "<div class='next'><i class='fa fa-caret-right'></i></div>"],
      responsive: {
        0 : {
          items: 1
        },
        600 : {
          items: 1
        },
        900 : {
          items: 6
        },
        1200 : {
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
    $('#' + target).fadeIn();
    $('body').addClass('popup-open');  }

  function closePopup(target) {
    $('#' + target).fadeOut();
    $('body').removeClass('popup-open');
  }

  // Open the corresponding popup when clicking on elements with the class "popup-btn"
  $(".ceh-testo-box").click(function (e) {
    e.preventDefault();
    var target = $(this).data('target');
    openPopup(target);
  });

  // Close the popup when clicking on elements with the class "close_1"
  $(".close_1").click(function (e) {
    e.preventDefault();
    var target = $(this).closest('.popup').attr('id');
    closePopup(target);
  });

  // Close the popup when clicking outside the popup
  $(".popup").click(function (event) {
    if ($(event.target).is('.popup')) {
      var target = $(this).attr('id');
      closePopup(target);
    }
  });

  $('.close_1, .popup').on('click', function () {
    $('.testo-popup-body').scrollTop(0);
  })
</script>
@endpush  