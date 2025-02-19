<!DOCTYPE html>
<html>

  <head>
    <title> Events View   </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS start -->
    @include('frontend.layouts.header-css')
			<link rel="stylesheet" type="text/css" href="assets/css/resources.css">
  </head>

  <body id="main-body">
    <a id="button">
    </a>
    <!-- Header start -->
    @include('frontend.layouts.eventv-header')
      <!-- banner start -->
      <section class="sec_ban resource-detail-banner" id="resources-banner">
        <div class="home-ban">
            <div class="rs-img">
                <img src="assets/images/resouces-bg-img.jpg" class="img-fluid rs-banner" alt="home banner">
            </div>
            <div class="over-h2">
                <h1>Event</h1>

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
                  <h2> Application Security</h2>
                </div>
                </div>

                <div class="col-md-3">
                        <div class="event-box">
                        <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio" class="ceh-video button">
                <img src="assets/images/video-thumb.jpg">
          </div>
                        </div>
                </div>
                <!--  -->
                <div class="col-md-3">
                        <div class="event-box">
                        <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio" class="ceh-video button">
                <img src="assets/images/video-thumb.jpg">
          </div>
                        </div>
                </div>
                <!--  -->
                 <!--  -->
                 <div class="col-md-3">
                        <div class="event-box">
                          <img src="assets/images/vapt-services.jpg"
                          class="img-fluid" alt="t1">
                        </div>
                </div>
                <!--  -->
                 <!--  -->
                 <div class="col-md-3">
                        <div class="event-box">
                          <img src="assets/images/vapt-services.jpg"
                          class="img-fluid" alt="t1">
                        </div>
                </div>
                <!--  -->
                 <!--  -->
                 <div class="col-md-3">
                        <div class="event-box">
                          <img src="assets/images/vapt-services.jpg"
                          class="img-fluid" alt="t1">
                        </div>
                </div>
                <!--  -->
                 <!--  -->
                 <div class="col-md-3">
                        <div class="event-box">
                          <img src="assets/images/vapt-services.jpg"
                          class="img-fluid" alt="t1">
                        </div>
                </div>
                <!--  -->
                 <!--  -->
                 <div class="col-md-3">
                        <div class="event-box">
                          <img src="assets/images/vapt-services.jpg"
                          class="img-fluid" alt="t1">
                        </div>
                </div>
                <!--  -->
                 <!--  -->
                 <div class="col-md-3">
                        <div class="event-box">
                          <img src="assets/images/vapt-services.jpg"
                          class="img-fluid" alt="t1">
                        </div>
                </div>
                <!--  -->
          </div>
        </div>
      </section>

      <a href="#main-body" class="scrollToTop" style="display: block;">
        <i class="fa fa-arrow-up">
        </i>
      </a>
      @include('frontend.layouts.footer')
        </div>
  </body>
  <!-- Jquery code -->
  <script src="assets/js/slider.js"></script>
	<script type="text/javascript" src="assets/js/common.js"></script>
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
    $('.owl-carousel1').owlCarousel({
      loop: true,
      // Enable loop
      margin: 20,
      // Increase margin between items
      dots: true,
      nav: true,
      // Enable navigation buttons
      navText: ["<i class='fa fa-angle-left'></i>", // Custom navigation icons
      "<i class='fa fa-angle-right'></i>"],

      responsive: {
        0 : {
          items: 1 // Display one item on small screens
        },
        768 : {
          items: 2 // Display two items on medium screens
        },
        992 : {
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
</html>