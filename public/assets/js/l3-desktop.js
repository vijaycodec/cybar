

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
  const elements_click3 = document.querySelectorAll('.hide-btn_tab3'); // Replace with your class name
  elements_click3.forEach(element => {
    element.click(); // Triggers click even if the element is hidden
  });
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  
  
  
  $('#btn-hide1').on('click', function () {
    $('body, html').animate({
      scrollTop: $('#overview2').offset().top - 140
    }, 50);
  });
  $('.hide-btn_tab3').on('click', function () {
    $('.tab3-content').animate({
      scrollTop: 0
    }, 0);
  });
  $('.btn-hide_sig').on('click', function () {
    $('.sample7-content').animate({
      scrollTop: 0
    }, 0);
  });
  $('.btn-hide_features').on('click', function () {
    $('.sample7-tb-content').animate({
      scrollTop: 0
    }, 0);
  });
  $('.nav-tabs li').on('click', function () {
    $('.tab-content').animate({
      scrollTop: 0
    }, 0);
  });
  $('.tab3-tablinks').on('click', function () {
    $('.tab3-content').animate({
      scrollTop: 0
    }, 0);
  });
  
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
    $('body').addClass('popup-open');
  }
  
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
  
  
  // function addVersionToFiles() {
  //   var version = new Date().getTime();
  //   var links = document.getElementsByTagName('link');
  //   var scripts = document.getElementsByTagName('script');
  
  //   // Add version to CSS files
  //   for (var i = 0; i < links.length; i++) {
  //     var href = links[i].getAttribute('href');
  //     if (href && href.endsWith('.css')) {
  //       links[i].setAttribute('href', href + '?v=' + version);
  //     }
  //   }
  
  //   // Add version to script files
  //   for (var i = 0; i < scripts.length; i++) {
  //     var src = scripts[i].getAttribute('src');
  //     if (src) {
  //       scripts[i].setAttribute('src', src + '?v=' + version);
  //     }
  //   }
  // }
  
  // window.onload = function () {
  //   addVersionToFiles();
  // };
  
  $('.pro-mbile1 .acc__title').click(function () {
    $(this).addClass("acc-top");
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
  
  
    const headerHeight = $("header").outerHeight(); // Adjust the selector for your header if needed
  
    $(".btn-show").click(function () {
      $(this).next(".content-hide").show();
      $(this).hide();
      $(this).siblings(".btn-hide").show();
    });
  
    $(".btn-hide").click(function () {
      $(this).prev(".content-hide").hide();
      $(this).hide();
      $(this).siblings(".btn-show").show();
  
    });
  
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
  
    $('.sample-tab2-menu1 li a').click(function () {
      scrollToElement(".significance", 100);
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
  
  
    // Handle click event for accordion titles
    $('.acc__title').on('click', function () {
      // Prevent the default action of the anchor tag
      event.preventDefault();
  
      // Get the associated panel
      var panel = $(this).next('.acc__panel');
  
      // Check if the clicked title is already active
      var isActive = $(this).hasClass('active');
  
      // Remove active class from all titles and close all panels
      $('.acc__title').removeClass('active');
      $('.acc__panel').slideUp();
  
      // If the clicked title was not active, activate it and show its panel
      if (!isActive) {
        $(this).addClass('active');
        panel.slideDown();
      }
    });
  
    // Reset Significance menu
    function resetTabs() {
      // Remove 'active' class from all tabs and content
      $('#tabmenu1 li').removeClass('active');
      $('.tab-pane').removeClass('in active');
  
      // Set the first tab and content as active
      $('#tabmenu1 li:first-child').addClass('active');
      $('.tab-pane:first-child').addClass('in active');
      $('.sample7-content').animate({
        scrollTop: 0
      }, 0);
      const elements_click = document.querySelectorAll('.btn-hide_sig'); // Replace with your class name
      elements_click.forEach(element => {
        element.click(); // Triggers click even if the element is hidden
      });
    }
    // Attach a click event listener to the tabs
    $('#tabmenu1 a').on('click', function () {
      // Trigger a click on all elements with the class 'btn-hide_sig'
      $('.btn-hide_sig').click();
    });
    // Create an Intersection Observer
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        // Check if the menu is not intersecting (not in view)
        if (!entry.isIntersecting) {
          resetTabs(); // Reset tabs when the menu is out of view
        }
      });
    });
    // Target the menu element
    const menu = document.querySelector('#tabmenu1');
    observer.observe(menu); // Start observing the menu
  
  
  
  
  
  
    // Reset Program menu
    function resetTabs4() {
      // Remove 'active' class from all tabs and content
      $('#program_tab1 li').removeClass('active');
      $('.tab-pane').removeClass('in active');
  
      // Set the first tab and content as active
      $('#program_tab1 li:first-child').addClass('active');
      $('.tab-pane:first-child').addClass('in active');
  
      // Reset the vertical-ceh menu
      $('.vertical-ceh-nav li').removeClass('active');
      $('.vertical-ceh-nav li:first-child').addClass('active');
      $('.prog-content .tab-pane').removeClass('in active');
      $('.prog-content .tab-pane:first-child').addClass('in active');
  
      // Reset the acc__section parts
      $('.acc__section').each(function () {
        $(this).find('.acc__title').removeClass('active'); // Remove active from titles
        $(this).find('.acc__panel').stop(false, true).slideUp().removeClass('active'); // Remove active from panels
      });
    }
  
    // Create an Intersection Observer
    const observer4 = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        // Check if the menu is not intersecting (not in view)
        if (!entry.isIntersecting) {
          resetTabs4(); // Reset tabs when the menu is out of view
        }
      });
    });
  
    // Target the menu element
    const menu4 = document.querySelector('#program_tab1');
    observer4.observe(menu4); // Start observing the menu
  
    // Reset smaller menus when navigating to other tabs
    $('#program_tab1 a[data-toggle="tab"]').on('click', function () {
      resetTabs4(); // Reset all menus when a tab is clicked
    });
  
  
  
  
  
    // Reset FAQ menu
    function resetTabs5() {
      // Remove 'active' class from all tabs and content
      $('#program_tab2 li').removeClass('active');
      $('.tab-pan-prog').removeClass('in active');
  
      // Set the first tab and content as active
      $('#program_tab2 li:first-child').addClass('active');
      $('.tab-pan-prog:first-child').addClass('in active');
  
      // Reset the acc__section parts
      $('.acc__section_faq').each(function () {
        $(this).find('.faq_acc__title').removeClass('active'); // Remove active from titles
        $(this).find('.acc__panel').slideUp().removeClass('active'); // Remove active from panels
      });
    }
  
    // Create an Intersection Observer
    const observer5 = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        // Check if the menu is not intersecting (not in view)
        if (!entry.isIntersecting) {
          resetTabs5(); // Reset tabs when the menu is out of view
        }
      });
    });
  
    // Target the menu element
    const menu5 = document.querySelector('#program_tab2');
    observer5.observe(menu5); // Start observing the menu
  
    // Reset smaller menus when navigating to other tabs
    $('#program_tab2 a[data-toggle="tab"]').on('click', function () {
      resetTabs5(); // Reset all menus when a tab is clicked
    });
  
  
  
    // Reset "Why Choose" menu
    function resetTabs3() {
      var i, tabcontent3, tablinks3;
      tabcontent3 = document.getElementsByClassName("tab3-tabcontent");
  
      // Hide all tab contents
      for (i = 0; i < tabcontent3.length; i++) {
        tabcontent3[i].scrollTo({
          top: 0,
          behavior: 'smooth' // Adds smooth scrolling effect
        });
        tabcontent3[i].style.display = "none";
      }
  
      // Remove 'active' class from all tabs
      tablinks3 = document.getElementsByClassName("tab3-tablinks");
      for (i = 0; i < tablinks3.length; i++) {
        tablinks3[i].classList.remove("tab3-active"); // Use classList.remove for better compatibility
      }
  
      // Show the first tab content and set the first tab as active
      document.getElementById('industry_challenges').style.display = "block"; // Show the first tab content
      tablinks3[0].classList.add("tab3-active"); // Use classList.add to add the active class
      const elements_click3 = document.querySelectorAll('.hide-btn_tab3'); // Replace with your class name
      elements_click3.forEach(element => {
        element.click(); // Triggers click even if the element is hidden
      });
    }
  
    // Create an Intersection Observer for the "Why Choose" menu
    const observer3 = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        // Check if the menu is not intersecting (not in view)
        if (!entry.isIntersecting) {
          resetTabs3(); // Reset tabs when the menu is out of view
        }
      });
    });
  
    // Target the menu element
    const menu3 = document.querySelector('.why-chossetab');
    observer3.observe(menu3); // Start observing the menu
  
  });