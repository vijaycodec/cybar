$('#challenges-slider').owlCarousel({
   items:1,   
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    dots: true,
    nav: false,
})
$('#challenges-slider1').owlCarousel({
     items:1,   
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    dots: true,
    nav: false,
})
$('#m_industries').owlCarousel({
     items:1,   
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    dots: true,
    nav: false,
})
$('#d_industries').owlCarousel({
     items:3,   
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    dots: true,
    nav: false,
        responsiveClass: true,
     responsive: {
    0: {
      items: 1
    },

    600: {
      items: 1
    },

    1024: {
      items: 3
    },

    1366: {
      items: 3
    }
  }

})
// 

$('#m_info_security').owlCarousel({
   items:1,   
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    dots: true,
    nav: false,
})
$('#testimonial_owl').owlCarousel({
   items:2,   
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:7000,
    autoplayHoverPause:false,
    dots: false,
    nav: true,
     navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
    responsiveClass: true,
     responsive: {
    0: {
      items: 1
    },

    600: {
      items: 1
    },

    1024: {
      items: 2
    },

    1366: {
      items: 2
    }
  }
})
// 
$('#owl-demo12').owlCarousel({
   items:1,   
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:7000,
    autoplayHoverPause:false,
    dots: false,
    nav: true,
     navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
    responsiveClass: true,
     responsive: {
    0: {
      items: 1
    },

    600: {
      items: 1
    },

    1024: {
      items: 1
    },

    1366: {
      items: 1
    }
  }
})
$('#course-slider').owlCarousel({
    items: 1,
    margin: 10,
    autoPlay: false, 
   slideSpeed : 200,
    paginationSpeed : 800,
    goToFirst : true,
goToFirstSpeed : 1000,
slideSpeed : 200,
    paginationSpeed : 800,
    loop: true,
    navigation : true,
    pagination: false,
    navigationText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
})

$(document) .ready(function(){
var li =  $(".owl-item li ");
$(".owl-item li").click(function(){
li.removeClass('active');
});
});

$(document) .ready(function(){
var li =  $(".owl-item li ");
$(".owl-item li").click(function(){
li.removeClass('tab3-active');
});
});

$(document).ready(function(){
    $("#mobile-tab-btn").click(function(){
        $("#mobile-tab-content").toggleClass("mobile-tab-btn-show");
        $(this).toggleClass("mobile-tab-active");
    });
});
$(document).ready(function(){
    $("#mobile-tab-btn1").click(function(){
        $("#mobile-tab-content1").toggleClass("mobile-tab-btn-show");
        $(this).toggleClass("mobile-tab-active");
    });
});
$(document).ready(function(){
    $("#mobile-tab-btn2").click(function(){
        $("#mobile-tab-content2").toggleClass("mobile-tab-btn-show");
        $(this).toggleClass("mobile-tab-active");
    });
});
$(document).ready(function(){
    $("#mobile-tab-btn3").click(function(){
        $("#mobile-tab-content3").toggleClass("mobile-tab-btn-show");
        $(this).toggleClass("mobile-tab-active");
    });
});

$(document).ready(function(){
    $("#mobile-footer-menu1").click(function(){
        $("#mobile-footer-content1").toggleClass("mobile-footer-menu-show");
        $(this).toggleClass("mobile-footer-active");
    });
});

$(document).ready(function(){
    $("#mobile-footer-menu2").click(function(){
        $("#mobile-footer-content2").toggleClass("mobile-footer-menu-show");
        $(this).toggleClass("mobile-footer-active");
    });
});

$(document).ready(function(){
    $("#mobile-footer-menu3").click(function(){
        $("#mobile-footer-content3").toggleClass("mobile-footer-menu-show");
        $(this).toggleClass("mobile-footer-active");
    });
});

$(document).ready(function(){
    $("#mobile-footer-menu4").click(function(){
        $("#mobile-footer-content4").toggleClass("mobile-footer-menu-show");
        $(this).toggleClass("mobile-footer-active");
    });
});
// 
$(function() {
var Accordion = function(el, multiple) {
this.el = el || {};
this.multiple = multiple || false;
var links = this.el.find('.article-title');
links.on('click', {
el: this.el,
multiple: this.multiple
}, this.dropdown)
}
Accordion.prototype.dropdown = function(e) {
var $el = e.data.el;
$this = $(this),
$next = $this.next();
$next.slideToggle();
$this.parent().toggleClass('open');
if (!e.data.multiple) {
$el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
};
}
var accordion = new Accordion($('.accordion-container'), false);
});



