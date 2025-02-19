// Content Read more


// Faq js
$(function () {
  //   $('.acc__title').click(function (e) {
  //   e.preventDefault();

  //   var $this = $(this);
  //   var $panel = $this.next('.acc__panel');

  //   if (!$this.hasClass('active')) {
  //     $this.closest('.acc').find('.acc__title.active').removeClass('active');
  //     $this.addClass('active');
  //   }

  //   $this.closest('.acc').find('.acc__panel').not($panel).slideUp();
  //   $panel.stop(false, true).slideToggle();
  // });
  

  $(document).ready(function() {
    $('.acc__title').click(function (e) {

        e.preventDefault();

        var $this = $(this);
        var targetId = $this.attr('href'); // Assuming href attribute holds the target ID

        // Find the panel corresponding to the clicked title
        var $panel = $(targetId);

        if (!$this.hasClass('active')) {
            $this.closest('.acc').find('.acc__title.active').removeClass('active');
            $this.addClass('active');
        }

        $this.closest('.acc').find('.acc__panel').not($panel).slideUp();
        $panel.stop(false, true).slideToggle(function() {
          // console.log($panel);
            // Scroll to the top of the opened panel
            if ($(window).width() <= 991) {
                // $('body').css("scroll-behavior", "smooth");
                var scrollTopOffset;
                if($('.pro-mbile1 .acc__title.acc-top').length > 0){
                    scrollTopOffset = $(this).offset().top - 160;
                    $('.pro-mbile1 .acc__title').removeClass('acc-top');
                } else {
                    scrollTopOffset = $panel.offset().top - 100;
                }
                $('html, body').animate({
                    scrollTop: scrollTopOffset
                }, 600);
            }
        });
    });
});


  //   $('.close-acrodin').click(function(e) {
  //     e.preventDefault();
  //     var $panel = $(this).closest('.acc__panel');
  //     $panel.slideUp();
  //     $(this).closest('.acc').find('.acc__title.active').removeClass('active');
  // });

  //
  //  $('.acc__title').click(function (e) {
  //   e.preventDefault();
  //   var $accordion = $(this).closest('.acc');
  //   var $panel = $(this).next('.acc__panel');

  //   // Close all panels within this accordion except the one being toggled
  //   $accordion.find('.acc__panel').not($panel).slideUp();

  //   // Toggle active class for the clicked title
  //   $(this).toggleClass('active');

  //   // Toggle the panel associated with the clicked title
  //   $panel.stop().slideToggle();
  // });
});

// scroll bar

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


