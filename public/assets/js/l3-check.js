// Device detection logic
function loadScript(scriptUrl) {
    const script = document.createElement('script');
    script.src = scriptUrl;
    document.body.appendChild(script);
}
function isMobile() {
    const userAgent = navigator.userAgent.toLowerCase();
    return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/.test(userAgent);
}

// Load the appropriate script
if (isMobile()) {
    // alert("Mob");
    // loadScript("assets/js/l3-mobile.js?v-1");
    // loadScript("assets/js/common_mobile.js?v-1");
    // loadScript("assets/js/main_mobile.js?v-3");



    //second mobile scripts starts
    // tab start
    $(document).ready(function () {
        // Function to handle tab clicks
        function handleTabClick(tabNav, tabContent) {
            // Show the first tab and hide the rest
            $(tabNav + " li:first-child").addClass("active");
            $(tabContent).hide();
            $(tabContent + ":first").show();

            // Click function
            $(tabNav + " li").click(function () {
                $(tabNav + " li").removeClass("active");
                $(this).addClass("active");
                $(tabContent).hide();

                var activeTab = $(this).find("a").attr("href");
                $(activeTab).fadeIn();
                return false;
            });
        }


        // Call the function for each set of tabs
        handleTabClick("#tabs-nav", ".tab-content");
        handleTabClick("#tabs-nav1", ".tab-content1");
        handleTabClick("#tabs-nav2", ".tab-content2");
        handleTabClick("#tabs-nav3", ".tab-content3");
        handleTabClick("#tabs-nav4", ".tab-content4");
    });
    //
    //  right menu
    // document.addEventListener('DOMContentLoaded', function () {
    //     const menuLinks = document.querySelectorAll('.mobile-ser-menu li a');
    //     const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    //     menuLinks.forEach(link => {
    //         link.addEventListener('click', function (event) {
    //             event.preventDefault();
    //             const targetId = link.getAttribute('href').substring(1);
    //             const targetSection = document.getElementById(targetId);
    //             if (targetSection) {
    //                 let sectionTop = targetSection.offsetTop;
    //                 if (isMobile) {
    //                     sectionTop -= 50;
    //                 }
    //                 window.scrollTo({ top: sectionTop, behavior: isMobile ? 'auto' : 'instant' });
    //             }
    //         });
    //     });
    // });


    function openCity(evt, cityName) {
        var i, tabcontent1, tablinks1;
        tabcontent1 = document.getElementsByClassName("tabcontent1");
        for (i = 0; i < tabcontent1.length; i++) {
            tabcontent1[i].style.display = "none";
        }
        tablinks1 = document.getElementsByClassName("tablinks1");
        for (i = 0; i < tablinks1.length; i++) {
            tablinks1[i].className = tablinks1[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

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

    //second mobile scripts ends 

    // thirds mobile scripts start
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
        
        


        //   $('.close-acrodin').click(function(e) {
        //     e.preventDefault();
        //     var $panel = $(this).closest('.acc__panel');
        //     $panel.slideUp();
        //     $(this).closest('.acc').find('.acc__title.active').removeClass('active');
        // });


        //
        //      $('.acc__title').click(function (e) {
        //       e.preventDefault();
        //       var $accordion = $(this).closest('.acc');
        //       var $panel = $(this).next('.acc__panel');

        //       // Close all panels within this accordion except the one being toggled
        //       $accordion.find('.acc__panel').not($panel).slideUp();

        //       // Toggle active class for the clicked title
        //       $(this).toggleClass('active');

        //       // Toggle the panel associated with the clicked title
        //       $panel.stop().slideToggle();
        //     });
        //   });

        // $(document).ready(function() {
        //     $(document).on('click', '.acc__title', function(e) {
        //         e.preventDefault(); // Prevent default anchor behavior
        //         var $accordion = $(this).closest('.acc');
        //         var $panel = $(this).next('.acc__panel');

        //         // Close other open panels
        //         $accordion.find('.acc__title').not(this).removeClass('active');
        //         $accordion.find('.acc__panel').not($panel).slideUp();

        //         // Toggle the clicked panel
        //         $(this).toggleClass('active');
        //         $panel.slideToggle();
        //     });
        // });


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


    });
    // thirds mobile scripts end

    // first mobile scripts l3-mobile.js?v-1 start
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
    if(document.getElementById("defaultOpen")){
        document.getElementById("defaultOpen").click();
    }

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
    // $('.mobile-view .acc__title').on('click', function () {
    //     $('.mobile-view .acc__title.active').animate({
    //         scrollTop: ($(".mobile-view .acc__title.active").offset().top) - 40
    //     }, 500);
    // })

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
    //     $('#owl-demo62').on('click', '.owl-nav, .owl-dots', function (e) {
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
    // $('.close-acrodin, .mobile-view .acc__title').on('click', function () {
    //     $('.box-height').scrollTop(0);
    // })
    // $('.mobile-view .acc__title').on('click', function () {
    //     $('.mobile-outline').scrollTop(0);
    // })
    $('.popup-testo .close-acrodin, .bottom-close-d, .popup').on('click', function () {
        $('.testo-popup-body').scrollTop(0);
    })
    $('.cn-content').click(function () {
        $(this).css({
            "height": "0%"
        }).find('p').css({
            "display": "none"
        });
    });
    
    $('.cn-hover-img').click(function () {
        $(this).siblings('.cn-content').css({
            "height": "100%"
        }).find('p').css({
            "display": "block",
            "color": "#fff"
        });
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
        $(".box-height").animate({ scrollTop: 0 }, 0);
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
    // first mobile scripts l3-mobile.js?v-1 End

    //script for course features mobile pop box scripts start
    $(document).on("click", ".mobile-cf", function () {
        var title = $(this).attr("data-title"); // Use .attr() instead of .data()
        var image = $(this).attr("data-image");
        var description = $(this).attr("data-description"); // Get raw HTML
        // Decode HTML entities before inserting
        var decodedDescription = $("<textarea/>").html(description).text();

        // Debugging console logs
        // console.log("clicked:");

        // Update popup content
        $("#mobilecf1 .mobile-cf-content-popup h3").text(title);
        $("#mobilecf1 .mobile-cf-content-popup p").html(decodedDescription);
        $("#mobilecf1 #popup-images").attr("src", image);


        // Show the popup
        $("#mobilecf1").fadeIn();
    });
    //script for course features mobile pop box scripts End
    $(document).ready(function () {
        function resetTabs_mob(sectionSelector) {
            const $section = $(sectionSelector);
        
            if ($section.length === 0) return; // Exit if section is not found
        
            $section.find(".acc__title").removeClass("active");
        
            $section.find(".acc__panel").each(function() {
                const $panel = $(this);
                const $scrollBox = $panel.find(".box-height");
        
                // Temporarily show the panel (if hidden) to allow scrolling
                const wasHidden = $panel.css("display") === "none";
                if (wasHidden) $panel.css({ display: "block", visibility: "hidden", position: "absolute" });
        
                // Scroll to the top
                $scrollBox.scrollTop(0);
        
                // Restore the original display state
                if (wasHidden) $panel.css({ display: "none", visibility: "", position: "" });
        
                $panel.slideUp();
            });
        
            // Activate the first tab and panel in this section
            const $firstAccTitle = $section.find(".acc__title").first();
            const $firstAccPanel = $section.find(".acc__panel").first();
        
            $firstAccTitle.addClass("active");
            $firstAccPanel.slideDown();
        }
       
        
        //  // Create an Intersection Observer using jQuery
        //  const observer0 = new IntersectionObserver((entries) => {
        //     entries.forEach(entry => {
        //         if (!entry.isIntersecting) {
        //             resetTabs_mob("#significance_mob");
        //         }
        //     });
        // });
        // // Target the menu element and observe it
        // const menu0 = $("#significance_mob")[0]; // Convert jQuery object to DOM element for observer
        // observer0.observe(menu0);


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


        const observer2 = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    resetTabs_mob("#why-cyberwind");
                }
            });
        });
        // Target the menu element and observe it
        const menu2 = $("#why-cyberwind")[0];
        if(menu2){
            observer2.observe(menu2);
        } // Convert jQuery object to DOM element for observer
    
        // Create an Intersection Observer using jQuery
        const observer3 = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    resetTabs_mob("#faqs_mob");
                }
            });
        });
    
        // Target the menu element and observe it
        const menu3 = $("#faqs_mob")[0]; // Convert jQuery object to DOM element for observer
        if(menu3){
            observer3.observe(menu3);
        }

    });

} else {
    // alert("Desk");
    // loadScript("assets/js/l3-desktop.js?v-1");
    // loadScript("assets/js/common.js?v-1");
    // loadScript("assets/js/main.js?v-3");


    //comman js for des scripts start
    // tab start
    $(document).ready(function () {
        // Function to handle tab clicks
        function handleTabClick(tabNav, tabContent) {
            // Show the first tab and hide the rest
            $(tabNav + " li:first-child").addClass("active");
            $(tabContent).hide();
            $(tabContent + ":first").show();

            // Click function
            $(tabNav + " li").click(function () {
                $(tabNav + " li").removeClass("active");
                $(this).addClass("active");
                $(tabContent).hide();

                var activeTab = $(this).find("a").attr("href");
                $(activeTab).fadeIn();
                return false;
            });
        }

        // Call the function for each set of tabs
        handleTabClick("#tabs-nav", ".tab-content");
        handleTabClick("#tabs-nav1", ".tab-content1");
        handleTabClick("#tabs-nav2", ".tab-content2");
        handleTabClick("#tabs-nav3", ".tab-content3");
        handleTabClick("#tabs-nav4", ".tab-content4");
    });
    //
    //  right menu
    document.addEventListener('DOMContentLoaded', function () {
        const menuLinks = document.querySelectorAll('.mobile-ser-menu li a');
        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        menuLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const targetId = link.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    let sectionTop = targetSection.offsetTop;
                    if (isMobile) {
                        sectionTop -= 50;
                    }
                    window.scrollTo({ top: sectionTop, behavior: isMobile ? 'auto' : 'instant' });
                }
            });
        });
    });


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

    //comman js for des scripts End



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


    // l3-desktop.js?v-1 start script


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
        if (evt) {
            evt.currentTarget.className += " tab3-active";
        }
        else {
            for (i = 0; i < tablinks.length; i++) {
                if (tablinks[i].classList.contains(cityName)) {
                    tablinks[i].classList.add("tab3-active");
                }
            }
        }
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
            $('.services-menu ul li:first a').addClass("sapme_active");
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
        if(menu){
            observer.observe(menu); // Start observing the menu
        }
        // Reset course features menu
        function resetTabs2() {
            // Remove 'active' class from all tabs and content
            $('#tabmenu2 li').removeClass('active');
            $('.tab-pane_cf_d').removeClass('in active');

            // Set the first tab and content as active
            $('#tabmenu2 li:first-child').addClass('active');
            $('.tab-pane_cf_d:first-child').addClass('in active');
            $('.sample7-tb-content').animate({
                scrollTop: 0
            }, 0);
            const elements_click = document.querySelectorAll('.btn-hide_cf_d'); // Replace with your class name
            elements_click.forEach(element => {
                element.click(); // Triggers click even if the element is hidden
            });
        }
        // Attach a click event listener to the tabs
        $('#tabmenu2 a').on('click', function () {
            // Trigger a click on all elements with the class 'btn-hide_sig'
            $('.btn-hide_cf_d').click();
        });
        // Create an Intersection Observer
        const observer2 = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Check if the menu is not intersecting (not in view)
                if (!entry.isIntersecting) {
                    resetTabs2(); // Reset tabs when the menu is out of view
                }
            });
        });
        // Target the menu element
        const menu2 = document.querySelector('#tabmenu2');
        if(menu2){
            observer2.observe(menu2); // Start observing the menu
        }

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
        if(menu4){
            observer4.observe(menu4); // Start observing the menu
        }
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
                $(this).find('.acc__panel').slideUp().removeClass('active'); // Remove active from panels
                $(this).find('.acc__title').removeClass('active'); // Remove active from titles
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
        if(menu5){
            observer5.observe(menu5); // Start observing the menu
        }
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
            openCity(event, '-industry-challenges');
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
        if(menu3){
            observer3.observe(menu3); // Start observing the menu
        }
    });


    // l3-desktop.js?v-1 End script 


}