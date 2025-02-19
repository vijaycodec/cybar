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


