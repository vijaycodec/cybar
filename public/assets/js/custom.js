// Do the magic!
$(document).ready(function(){
$('.template15-menu li a').each(function(index) {
if(this.href.trim() == window.location) {
$(this).addClass('active');
$(this).hover(function(){
$(this).addClass('active');
});
}
});
});

$(function () {

$("#owl-demo10").owlCarousel({
//autoPlay: 3000, //Set AutoPlay to 3 seconds
items: 1,
slideSpeed : 1000,
paginationSpeed : 1000,

//Autoplay
// autoPlay : true,
goToFirst : true,
goToFirstSpeed : 1000,

// Navigation

navigation : true,
navigationText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
dots:true,
// Responsive
pagination:true,


});

});
$(function () {

$("#owl-demo9").owlCarousel({
//autoPlay: 3000, //Set AutoPlay to 3 seconds
items: 1,
slideSpeed : 1000,
paginationSpeed : 1000,

//Autoplay
// autoPlay : true,
goToFirst : true,
goToFirstSpeed : 1000,

// Navigation

navigation : true,
navigationText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
dots:true,
// Responsive
pagination:true,


});

});
$("#owl-demo8").owlCarousel({
        items: 5,
        slideSpeed: 1000,
        paginationSpeed: 1000,

        // Autoplay
        // autoPlay: true,
        goToFirst: true,
        goToFirstSpeed: 1000,

        // Navigation
        navigation: true,
        navigationText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
        dots: true,
        // Responsive
        responsive: {           
            0: {
                items: 1 // 1 item for screen width less than 600px
            },
            600: {
                items: 1 // 2 items for screen width between 600px and 992px
            },
            992: {
                items: 4 // 3 items for screen width between 992px and 1200px
            },
            1200: {
                items: 5 // 4 items for screen width greater than 1200px
            }
        },
        pagination: true
    });
$(function () {

$("#owl-demo7").owlCarousel({
//autoPlay: 3000, //Set AutoPlay to 3 seconds
items: 1,
slideSpeed : 2000,
paginationSpeed : 2000,

//Autoplay
// autoPlay : true,
goToFirst : true,
goToFirstSpeed : 1000,

// Navigation

navigation : true,
navigationText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
dots:true,
// Responsive
pagination:true,


});

});
$(function () {

$("#owl-demo6").owlCarousel({
//autoPlay: 3000, //Set AutoPlay to 3 seconds
items: 1,
slideSpeed : 2000,
paginationSpeed : 2000,

//Autoplay
// autoPlay : true,
goToFirst : true,
goToFirstSpeed : 1000,

// Navigation

navigation : true,
navigationText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
dots:true,
// Responsive
pagination:true,


});

});
$(function () {

$("#owl-demo5").owlCarousel({
//autoPlay: 3000, //Set AutoPlay to 3 seconds
items: 1,
slideSpeed : 2000,
paginationSpeed : 2000,

//Autoplay
// autoPlay : true,
goToFirst : true,
goToFirstSpeed : 1000,

// Navigation

navigation : true,
navigationText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
dots:true,
// Responsive
pagination:true,


});

});
$(function () {

$("#owl-demo4").owlCarousel({
//autoPlay: 3000, //Set AutoPlay to 3 seconds
items: 1,
slideSpeed : 2000,
paginationSpeed : 2000,

//Autoplay
// autoPlay : true,
goToFirst : true,
goToFirstSpeed : 1000,

// Navigation

navigation : true,
navigationText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
dots:true,
// Responsive
pagination:true,


});

});

// menu start
$(document).ready(function(){
$('#menu-icon').on('click', function(){
$('.top-menu-main').toggle();
return false;
});
});
// Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show(500);
// Click function
$('#tabs-nav li').click(function(){
$('#tabs-nav li').removeClass('active');
$(this).addClass('active');
$('.tab-content').hide();

var activeTab = $(this).find('a').attr('href');
$(activeTab).fadeIn();
return false;
});
// Show the first tab and hide the rest
$('#tabs-nav1 li:first-child').addClass('active');
$('.tab-content1').hide();
$('.tab-content1:first').show();
// Click function
$('#tabs-nav1 li').click(function(){
$('#tabs-nav1 li').removeClass('active');
$(this).addClass('active');
$('.tab-content1').hide();

var activeTab = $(this).find('a').attr('href');
$(activeTab).fadeIn();
return false;
});
// Show the first tab and hide the rest
$('#tabs-nav2 li:first-child').addClass('active');
$('.tab-content2').hide();
$('.tab-content2:first').show();
// Click function
$('#tabs-nav2 li').click(function(){
$('#tabs-nav2 li').removeClass('active');
$(this).addClass('active');
$('.tab-content2').hide();

var activeTab = $(this).find('a').attr('href');
$(activeTab).fadeIn();
return false;
});
//
$(document).ready(function() {
$("#owl-demo").owlCarousel({
autoPlay: 5000,
items : 5,
itemsDesktop : [1199,6],
itemsDesktopSmall : [979,3]
});
});
//

//
$(function () {

$("#owl-demo12").owlCarousel({
//autoPlay: 3000, //Set AutoPlay to 3 seconds
items: 1,
slideSpeed : 3000,
paginationSpeed : 3000,

//Autoplay
// autoPlay : true,
goToFirst : true,
goToFirstSpeed : 1000,

// Navigation

navigation : true,
navigationText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
dots:true,
// Responsive
pagination:true,

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
});

});
//
var swiper = new Swiper('.swiper-container', {
slidesPerView: 3,
spaceBetween: 50,
init: true,
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},

autoplay: {
delay: 6000,
disableOnInteraction: false,
},

breakpoints: {
1024: {
slidesPerView: 4,
spaceBetween: 40,
},
768: {
slidesPerView: 3,
spaceBetween: 30,
},
640: {
slidesPerView: 2,
spaceBetween: 20,
},

480: {
slidesPerView: 1,
spaceBetween: 10,

},
320: {
slidesPerView: 1,
spaceBetween: 10,

}
}

});
//
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
// content hide show
$(document).ready(function(){
$("#btn-show1").click(function(){
$("#content-hide1").show();
$("#btn-hide1").show();
$("#btn-show1").hide();
});
$("#btn-hide1").click(function(){
$("#content-hide1").hide();
$("#btn-hide1").hide();
$("#btn-show1").show();
});
$("#btn-show").click(function(){
$("#content-hide").show();
$("#btn-hide").show();
$("#btn-show").hide();
});
$("#btn-hide").click(function(){
$("#content-hide").hide();
$("#btn-hide").hide();
$("#btn-show").show();
});
$("#btn-show2").click(function(){
$("#content-hide2").show();
$("#btn-hide2").show();
$("#btn-show2").hide();
});
$("#btn-hide2").click(function(){
$("#content-hide2").hide();
$("#btn-hide2").hide();
$("#btn-show2").show();
});
$("#btn-show3").click(function(){
$("#content-hide3").show();
$("#btn-hide3").show();
$("#btn-show3").hide();
});
$("#btn-hide3").click(function(){
$("#content-hide3").hide();
$("#btn-hide3").hide();
$("#btn-show3").show();
});
$("#btn-show4").click(function(){
$("#content-hide4").show();
$("#btn-hide4").show();
$("#btn-show4").hide();
});
$("#btn-hide4").click(function(){
$("#content-hide4").hide();
$("#btn-hide4").hide();
$("#btn-show4").show();
});
$("#btn-show5").click(function(){
$("#content-hide5").show();
$("#btn-hide5").show();
$("#btn-show5").hide();
});
$("#btn-hide5").click(function(){
$("#content-hide5").hide();
$("#btn-hide5").hide();
$("#btn-show5").show();
});
$("#btn-show6").click(function(){
$("#content-hide6").show();
$("#btn-hide6").show();
$("#btn-show6").hide();
});
$("#btn-hide6").click(function(){
$("#content-hide6").hide();
$("#btn-hide6").hide();
$("#btn-show6").show();
});
$("#btn-show7").click(function(){
$("#content-hide7").show();
$("#btn-hide7").show();
$("#btn-show7").hide();
});
$("#btn-hide7").click(function(){
$("#content-hide7").hide();
$("#btn-hide7").hide();
$("#btn-show7").show();
});
$("#btn-show8").click(function(){
$("#content-hide8").show();
$("#btn-hide8").show();
$("#btn-show8").hide();
});
$("#btn-hide8").click(function(){
$("#content-hide8").hide();
$("#btn-hide8").hide();
$("#btn-show8").show();
});
$("#btn-show9").click(function(){
$("#content-hide9").show();
$("#btn-hide9").show();
$("#btn-show9").hide();
});
$("#btn-hide9").click(function(){
$("#content-hide9").hide();
$("#btn-hide9").hide();
$("#btn-show9").show();
});
$("#btn-show10").click(function(){
$("#content-hide10").show();
$("#btn-hide10").show();
$("#btn-show10").hide();
});
$("#btn-hide10").click(function(){
$("#content-hide10").hide();
$("#btn-hide10").hide();
$("#btn-show10").show();
});
});
//
//
$(window).scroll(function(){
if ($(window).scrollTop() >= 500) {

$('.menu-hide').hide();

}
else {

$('.menu-hide').show();

}
});
// menu menu active
jQuery(function($) {
$(window).load(function() {
//If the sticky-nav exists on the page then execute the following functions
if ($('.sticky_nav_container').length) {
//Sets the height of the wrapper to the height of sticky-nav to account for the fixed position
function fixHeight() {
//Get the height of the sticky-nav on page load
var sticky_nav_container = $('.sticky_nav_container').height();
//get the height of the sticky-nav wrapper on page load
var sticky_nav_container_wrapper = $('.sticky_nav_container_wrapper').height();
//set the height of the sticky-nav wrapper to the height of the sticky-nav
$('.sticky_nav_container_wrapper').css({
height: (sticky_nav_container) + 'px'
});
//does the same thing but with a setTimeout to account for the toggle animation
setTimeout(function() {
var sticky_nav_container = $('.sticky_nav_container').height();
var sticky_nav_container_wrapper = $('.sticky_nav_container_wrapper').height();
$('.sticky_nav_container_wrapper').css({
height: (sticky_nav_container) + 'px'
});
}, 150);
}
fixHeight();
//The sticky-nav's distance from the top of the screen on page-load
var stickyNavTop = $('.sticky_nav_container').position().top;
//Add or remove sticky-nav depending on where the sticky-nav is
var stickyNav = function() {
//Current distance from the top
var scrollTop = $(window).scrollTop();
if (scrollTop >= stickyNavTop) {
$('.sticky_nav_container').addClass('sticky');
var scrollDistance = $(window).scrollTop() + 100;
// Show/hide menu on scroll
// if (scrollDistance >= 500) {
//     $('.sticky_nav_container').fadeIn("fast");
// } else {
//     $('.sticky_nav_container').fadeOut("fast");
// }
// Assign active class to nav links while scolling
$('.anchor-link').each(function(i) {
if ($(this).position().top <= scrollDistance) {
$('#sticky-control a').removeClass('active');
$('#sticky-control a').eq(i).addClass('active');
}
});
} else {
$('.sticky_nav_container').removeClass('sticky');
}
};
//Unbind is equivalent to prevent default, executes the following function on click
$('.sticky_link').unbind('click').click(function() {
//shows and hides the anchor-nav
// $('.anchor-nav').slideToggle('fast', 'swing', fixHeight());
//toggles icon from x to hamburger
// $('#open-anchor').find('.glyphicon-remove').addClass('glyphicon-menu-hamburger').removeClass('glyphicon-remove');
//Current distance from the top
var scrollTop = $(window).scrollTop();
//checks if this is a relative link pointing to somewhere on the page
if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//gets the name of the url, everything after the hash symbol
var target = $(this.hash);
//checks if the name has a length
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//if it does exist
if (target.length) {
//if the sticky-nav is currently sticky
if (scrollTop >= stickyNavTop) {
//move the current position of the page to the target, minus 50px
fixHeight();
$('html,body').animate({
scrollTop: target.offset().top - $('.sticky_nav_container').height() + 50
}, 1000, fixHeight());
}
//however if the sticky-nav is not currently sticky
else {
//move the current position of the page to the position of the target, minus the height of the sticky nav minus 40px
fixHeight();
$('html,body').animate({
scrollTop: target.offset().top - $('.sticky_nav_container').height() + 50
}, 1000);
}
return false;
}
}
});
//toggles icons again?
/*  $('#open-anchor').unbind('click').click(function(event) {
event.preventDefault();
if ($(this).find('span').hasClass('glyphicon-menu-hamburger')) {
$(this).find('.glyphicon-menu-hamburger').addClass('glyphicon-remove').removeClass('glyphicon-menu-hamburger');
} else if ($(this).find('span').hasClass('glyphicon-remove')) {
$(this).find('.glyphicon-remove').addClass('glyphicon-menu-hamburger').removeClass('glyphicon-remove');
}
$('.anchor-nav').slideToggle({duration: 'fast', easing: 'swing', step: function(){
fixHeight();
}});
});*/
$(window).scroll(function() {
stickyNav();
});
} //End If Sticky Nav is on page
});
});
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
$(".popup-form").on('click', function() {
$(".popup-form-box").show();
});
$(".close, .new-close-btn").click(function(){
$(".popup-form-box").hide();
});
// left right menu
// popup
$(".Click-here").on('click', function() {
$(".popup1").addClass('model-open');
});
$(".close-btn, .bg-overlay").click(function(){
$(".popup1").removeClass('model-open');
});
$(".Click-here1").on('click', function() {
$(".popup2").addClass('model-open');
});
$(".close-btn, .bg-overlay").click(function(){
$(".popup2").removeClass('model-open');
});
$(".Click-here2").on('click', function() {
$(".popup3").addClass('model-open');
});
$(".close-btn, .bg-overlay").click(function(){
$(".popup3").removeClass('model-open');
});
//
// menu left and right
$('.resocues').slick({
dots: false,
prevArrow: $('.prev'),
nextArrow: $('.next'),
infinite: false,
speed: 3000,
slidesToShow: 7,
slidesToScroll: 4,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: false
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
//You can unslick at a given breakpoint now by adding:
//settings: "unslick"
//instead of a settings object
]
});
