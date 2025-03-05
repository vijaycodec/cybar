function isMobile() {
    const userAgent = navigator.userAgent.toLowerCase();
    return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/.test(
        userAgent
    );
}

// Load the appropriate script
if (isMobile()) {
    
    // thirds mobile scripts start
    // Content Read more


    // Faq js
    $(function () {
   


      $(document).ready(function () {
          let userScrolled = false;
      
          // Detect user scrolling
          $(window).on('scroll', function () {
              userScrolled = true;
          });
      
          $('.acc__title').click(function (e) {
              e.preventDefault();
              userScrolled = false; // Reset flag on click
      
              var $this = $(this);
              var targetId = $this.attr('href');
              var $panel = $(targetId);
              var $accordion = $this.closest('.acc');
      
              if (!$this.hasClass('active')) {
                  $accordion.find('.acc__title.active').removeClass('active');
                  $this.addClass('active');
              } else {
                  $this.removeClass('active');
              }
      
              // Close other panels and reset scroll position when closing
              $accordion.find('.acc__panel').not($panel).slideUp(function () {
                  $(".box-height.vert-box").animate({ scrollTop: 0 }, 0);
              });
      
              // Toggle clicked panel
              $panel.stop(false, true).slideToggle(function () {
                  if (!userScrolled) { // Only animate if the user hasn't scrolled
                      var scrollTopOffset = ($('.pro-mbile1 .acc__title.acc-top').length > 0)
                          ? $(this).offset().top - 160
                          : $panel.offset().top - 100;
      
                      $('html, body').stop().animate({
                          scrollTop: scrollTopOffset
                      }, 450);
                  }
              });
          });
      });

      $(document).ready(function () {
          $(document).on("scroll", onScroll);

          //smoothscroll
          $('.sticky_link').on('click', function (e) {
              e.preventDefault();
              $(document).off("scroll");

              $('a').each(function () {
                  $(this).removeClass('sapme_active');
              })
              $(this).addClass('sapme_active');

              var target = this.hash,
                  menu = target;
              $target = $(target);
              $('html, body').stop().animate({
                  'scrollTop': $target.offset().top - 80
              }, 500, 'swing', function () {
                  window.location.hash = target;
                  $(document).on("scroll", onScroll);
              });
          });
      });

      function onScroll(event) {
          var scrollPos = $(document).scrollTop() + 100;
          $('.sticky_link').each(function () {
              var currLink = $(this);
              var refElement = $(currLink.attr("href"));


              if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                  $('.anchor-nav li a').removeClass("sapme_active");

                  currLink.addClass("sapme_active");
              }
              else {
                  // currLink.removeClass("sapme_active");
              }


          });
      }


  });
  // thirds mobile scripts end

    $(document).ready(function () {
        function resetTabs_mob(sectionSelector) {
            const $section = $(sectionSelector);

            if ($section.length === 0) return; // Exit if section is not found

            $section.find(".acc__title").removeClass("active");

            $section.find(".acc__panel").each(function () {
                const $panel = $(this);
                const $scrollBox = $panel.find(".box-height");

                // Temporarily show the panel (if hidden) to allow scrolling
                const wasHidden = $panel.css("display") === "none";
                if (wasHidden)
                    $panel.css({
                        display: "block",
                        visibility: "hidden",
                        position: "absolute",
                    });

                // Scroll to the top
                $scrollBox.scrollTop(0);

                // Restore the original display state
                if (wasHidden)
                    $panel.css({
                        display: "none",
                        visibility: "",
                        position: "",
                    });

                $panel.slideUp();
            });

            // Activate the first tab and panel in this section
            const $firstAccTitle = $section.find(".acc__title").first();
            const $firstAccPanel = $section.find(".acc__panel").first();

            $firstAccTitle.addClass("active");
            $firstAccPanel.slideDown();
        }

        // // Create an Intersection Observer using jQuery
        // const observer = new IntersectionObserver((entries) => {
        //     entries.forEach(entry => {
        //         if (!entry.isIntersecting) {
        //             resetTabs_mob("#program_mob");
        //         }
        //     });
        // });
        // // Target the menu element and observe it
        // const menu = $("#program_mob")[0]; // Convert jQuery object to DOM element for observer
        // observer.observe(menu);
    });
} else {
    
    //main js for desk start
    // Content Read more

    $(document).ready(function () {
      $(document).on("scroll", onScroll);

      //smoothscroll
      $('.sticky_link').on('click', function (e) {
          e.preventDefault();
          $(document).off("scroll");

          $('a').each(function () {
              $(this).removeClass('sapme_active');
          })
          $(this).addClass('sapme_active');

          var target = this.hash,
              menu = target;
          $target = $(target);
          $('html, body').stop().animate({
              'scrollTop': $target.offset().top - 80
          }, 1000, 'swing', function () {
              window.location.hash = target;
              $(document).on("scroll", onScroll);
          });
      });
  });

  function onScroll(event) {
      var scrollPos = $(document).scrollTop() + 100;
      $('.sticky_link').each(function () {
          var currLink = $(this);
          var refElement = $(currLink.attr("href"));


          if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
              $('.anchor-nav li a').removeClass("sapme_active");

              currLink.addClass("sapme_active");
          }
          else {
              // currLink.removeClass("sapme_active");
          }


      });
  }

  //main js for desk end
}
