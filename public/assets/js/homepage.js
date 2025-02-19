// sider start for web
$("#home-slider1, #home-slider2, #home-slider3, #home-slider4, #home-slider5, #home-slider11, #home-slider12, #home-slider13, #home-slider14, #home-slider15").owlCarousel({
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
          items: 1
       }
    }

 });

 // review
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
 
 // industry slider start
 $("#industry-slider").owlCarousel({
   loop: true,
   margin: 10,
   nav: true,
   dots: true,
   responsive: {
      0: {
         items: 2,
      },
      600: {
         items: 2,
      },
      900: {
         items: 2
      },
      1200: {
         items: 6

      }
   },
   onInitialized: function () {
      showContent(0); // Show content for the initial active item
   },
   onChanged: function (event) {
      var activeIndex = event.item.index;
      let next;
      if(activeIndex==18){
          next = 0;
      }else{
          next = Math.floor((activeIndex - 7) + 1);
      }

      // console.log(next);
      showContent(next); // Show content for the newly active item
   }
});

$(".items a").click(function (e) {
   e.preventDefault();
   var target = $(this).attr("href");
   $(".items").removeClass("active");
   $(this).closest(".items").addClass("active");
   $(".partner-logo").hide();
   $(target).show();
});

$(".industry-slider .owl-nav button").click(function () {
   var activeIndex = $("#industry-slider .owl-item.active").index();

   console.log(activeIndex, Math.floor((activeIndex - 7) + 1) );
   const next = Math.floor((activeIndex - 7) + 1);
   // console.log(next);
   showContent(next); // Show content for the newly active item after navigation
});

function showContent(index) {
   // console.log(index,"shdcsbdcjh")
   $(".items").removeClass("active");
   $("#industry-slider .owl-item").eq(index).find(".items").addClass("active");
   $(".partner-logo").hide();
   $(".partner-logo").eq(index).show();
}
// mobile slider
$(function () {
   initializeCarousel("mhome-slider1", "navigation-count");
   initializeCarousel("mhome-slider2", "navigation-count1");
   initializeCarousel("mhome-slider3", "navigation-count2");
   initializeCarousel("mhome-slider4", "navigation-count3");
   initializeCarousel("mhome-slider5", "navigation-count4");
   initializeCarousel("mhome-slider6", "navigation-count5");
   initializeCarousel("mhome-slider7", "navigation-count6");
   initializeCarousel("mhome-slider8", "navigation-count7");
   initializeCarousel("mhome-slider9", "navigation-count8");
   initializeCarousel("mhome-slider10", "navigation-count9");
   initializeCarousel("mhome-slider11", "navigation-count10");
   initializeCarousel("mhome-slider12", "navigation-count11");
   initializeCarousel("mhome-slider13", "navigation-count12");
   initializeCarousel("mhome-slider14", "navigation-count13");
   initializeCarousel("mhome-slider15", "navigation-count14");
   initializeCarousel("mhome-slider16", "navigation-count15");
   initializeCarousel("mhome-slider17", "navigation-count16");
   initializeCarousel("mhome-slider18", "navigation-count17");
   initializeCarousel("mhome-slider19", "navigation-count18");
   initializeCarousel("mhome-slider20", "navigation-count19");
   initializeCarousel("mhome-slider21", "navigation-count20");
   initializeCarousel("mhome-slider22", "navigation-count21");
   initializeCarousel("mhome-slider23", "navigation-count22");
   initializeCarousel("mhome-slider24", "navigation-count23");
   initializeCarousel("mhome-slider25", "navigation-count24");
   initializeCarousel("mhome-slider26", "navigation-count25");
   initializeCarousel("mhome-slider27", "navigation-count26");
   initializeCarousel("mhome-slider28", "navigation-count27");
   initializeCarousel("mhome-slider29", "navigation-count28");
   initializeCarousel("mhome-slider30", "navigation-count29");
   initializeCarousel("mhome-slider31", "navigation-count30");
   initializeCarousel("mhome-slider40", "navigation-count40");
   initializeCarousel("mhome-slider41", "navigation-count41");
   initializeCarousel("mhome-slider42", "navigation-count42");
   initializeCarousel("mhome-slider43", "navigation-count43");
   initializeCarousel("mhome-slider44", "navigation-count44");
   function initializeCarousel(carouselID, navigationCountID) {
      var owl = $("#" + carouselID);

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
         $("#" + navigationCountID).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
      }
   }
});

