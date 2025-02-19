// tab start
$(document).ready(function() {
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
document.addEventListener('DOMContentLoaded', function() {
   const menuLinks = document.querySelectorAll('.mobile-ser-menu li a');
   const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
   menuLinks.forEach(link => {
       link.addEventListener('click', function(event) {
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
