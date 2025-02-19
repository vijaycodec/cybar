  // vertical tab

  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab3-tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tab3-tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("tab3-active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " tab3-active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  // bottom to top scrollbar
  // var btn = $('.codec-top a');
  // $(window).scroll(function () {
  //   if ($(window).scrollTop() > 1000) {
  //     btn.addClass('show');
  //   } else {
  //     btn.addClass('show');
  //   }
  // });

  // btn.on('click', function (e) {
  //   e.preventDefault();
  //   $('html, body').animate({ scrollTop: 0 }, '1000');
  // });

  $(document).ready(function () {
    // Smooth scrolling to target content
    $('.smooth-content').on('click', function (event) {
      var target = $($(this).attr('href'));
      if (target.length) {
        event.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top - 160
        }, 200);
      }
    });
  });

  $('#btn-hide1').on('click', function () {
    $('body, html').animate({
      scrollTop: $('#overview2').offset().top - 140
    }, 50);
  });
  $('.nav-tabs li').on('click', function () {
    $('.tab-content').animate({
      scrollTop: 0
    }, 0);
  })
  $('.tab3-tablinks').on('click', function () {
    $('.tab3-content').animate({
      scrollTop: 0
    }, 1000);
  })
  $('.mobile-view .acc__title').on('click', function () {
    $('.mobile-view .acc__title.active').animate({
      scrollTop: ($(".mobile-view .acc__title.active").offset().top) - 40
    }, 500);
  })

  //   $('.mobile-view .acc__title').on('click', function() {
  //     var $this = $(this);
  //     if ($this.hasClass('active')) {
  //         $('html, body').animate({
  //             scrollTop: $this.offset().top - 200
  //         }, 1000);
  //     }
  // });

  $(function () {
    $("#owl-demo63").owlCarousel({
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
          items: 3
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
      $("#navigation-count4").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
    }

  });

  $(function () {
    var owl = $("#owl-demo64");

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
          items: 4
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
      $("#navigation-count1").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
    }
  });

  $(document).ready(function () {
    $(".btn-show").click(function () {
      $(this).next(".content-hide").show();
      $(this).hide();
      $(this).siblings(".btn-hide").show();
    });

    $(".btn-hide").click(function () {
      $(this).prev(".content-hide").hide();
      $(this).hide();
      $(this).siblings(".btn-show").show();
      $('.tab-content').animate({
        scrollTop: 0
      }, 0);
    });
  });

  $(function () {
    var owl = $("#owl-demo65");

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
      $("#navigation-count").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
    }
  });

  $(function () {
    $("#client-testimonials").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: true,
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
          items: 2
        }
      }
    });
  });

  // Function to open the popup
  // function openPopup1(target) {
  //   $('#' + target).fadeIn();
  //   $('body').addClass('popup-open');
  // }

  // // Function to close the popup
  // function closePopup1(target) {
  //   $('#' + target).fadeOut();
  //   $('body').removeClass('popup-open');
  // }
  // function closePopup2(target) {
  //   $('#' + target).fadeOut();
  //   $('body').removeClass('popup-open');
  // }


  // // Open the corresponding popup when clicking on elements with the class "popup-btn"
  // $(".popup-btn").click(function () {
  //   var target = $(this).data('target');
  //   openPopup1(target);
  // });

  // // Close the popup when clicking on elements with the class "close"
  // $(".close_2").click(function () {
  //   var target = $(this).closest('.popup').attr('id');
  //   closePopup(target);
  // });

  // // Close the popup when clicking outside the popup
  // $(".popup").click(function (event) {
  //   if ($(event.target).is('.popup')) {
  //     var target = $(this).attr('id');
  //     closePopup(target);
  //   }
  // });

  $("#owl-demo9").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      900: {
        items: 4
      },
      1200: {
        items: 5
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
    $("#navigation-count5").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
  }

  $(function () {
    $("#owl-demo62").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: true,
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

      },
      onInitialized: updateNavigationCount,
      onChanged: updateNavigationCount
    });

    function updateNavigationCount(e) {
      if (!e.namespace) {
        return;
      }
      var carousel = e.relatedTarget;
      $("#navigation-count2").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
    }
  });

  function openPopup(target) {
    $('#' + target).fadeIn();
    $('body').addClass('popup-open');  }

  function closePopup(target) {
    $('#' + target).fadeOut();
    $('body').removeClass('popup-open');
  }

  // Open the corresponding popup when clicking on elements with the class "popup-btn"
  $(".popup-btn, .mobile-cf, .ceh-testo-box").click(function (e) {
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
  //         $('#owl-demo62').on('click', '.owl-nav, .owl-dots', function (e) {
  //     e.stopPropagation();
  // });
//   $('.owl-carousel').on('changed.owl.carousel', function(event) {
//     var target = $('.owl-item.active').find('.popup-btn').data('target');
//     openPopup(target);
// });

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

window.onload = function () {
  addVersionToFiles();
};

$('.pro-mbile1 .acc__title').click(function () {
  $(this).addClass("acc-top");
});

$(document).ready(function () {
  // Define a function to handle the click events and scrolling animation
  function scrollToElement(elementClass, offset) {
    $('html, body').animate({
      scrollTop: $(elementClass).offset().top - offset
    }, 300);
  }

  // Attach click event handlers to the respective elements
  $('.sample7-tab li a').click(function () {
    scrollToElement(".significance", 100);
  });

  $('.sample-tab2-menu li a').click(function () {
    scrollToElement(".course-features", 100);
  });

  $('.program-tab1 li a').click(function () {
    scrollToElement(".ceh-program", 100);
  });

  $('.tab3-tab .tab3-tablinks').click(function () {
    scrollToElement(".why-chossetab", 120);
  });

  $('.program-tab2 li a').click(function () {
    scrollToElement(".faq", 100);
  });
});

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

  //Click event to scroll to top
  $scrollToTopButton.click(function () {
    $('.services-menu ul li a').removeClass("sapme_active");

  });

});

$('.close_1, .popup').on('click', function () {
  $('.mobile-cf-popup').scrollTop(0);
})
$('.close-acrodin, .mobile-view .acc__title').on('click', function () {
  $('.box-height').scrollTop(0);
})
$('.mobile-view .acc__title').on('click', function () {
  $('.mobile-outline').scrollTop(0);
})
$('.popup-testo .close-acrodin, .bottom-close-d, .popup').on('click', function () {
  $('.testo-popup-body').scrollTop(0);
})
$('.cn-content').click(function () {
  $(this).addClass('height');
});
$('.cn-hover-img').click(function () {
  $('.cn-content').removeClass('height');
});



$('.close-acrodin').on('click', function () {
  var $accTitle = $(this).closest('.acc__card').find('.acc__title');
  if ($accTitle.length > 0) {
    $('html, body').animate({
      scrollTop: $accTitle.offset().top - 60
    }, 300);
  }
});

$('.close-acrodin').click(function (e) {
  e.preventDefault();
  var $panel = $(this).closest('.acc__panel');
  $panel.slideUp();
  $(this).closest('.acc').find('.acc__title.active').removeClass('active');
});
$('.close-acrodin').click(function (e) {
  e.preventDefault();
  var $panel = $(this).closest('.acc__panel');
  $panel.slideUp();

  if ($(window).width() < 768) {
    $('.mobile-outline').scrollTop(0);
  } else {
    $('html, body').animate({
      scrollTop: $(".acc__panel").offset().top - 230
    }, 300); // Added duration for the animation
  }
  $(this).closest('.acc').find('.acc__title.active').removeClass('active');
});

$('.close-acrodin1').on('click', function () {
  $('.pro-box-height').scrollTop(0);
})