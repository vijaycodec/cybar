
<script>
    $('.ser-menu').click(function() {
    $('.mobile-ser-tab').toggleClass('ser-menu-show');
    $('body').removeClass('nav-is-toggled');
    $('body').click(function(event) {

        // Check if the clicked element is not inside '.mobile-nav-top'
        if (!$(event.target).closest('.mobile-nav-top').length) {

            $('.mobile-ser-tab').removeClass('ser-menu-show');
        }
    });
});
$('.ser-menu-close, .mobile-ser-menu li a, .right-back').click(function() {
    $('.mobile-ser-tab').removeClass('ser-menu-show');
});
$('.mobile-nav-top .hamburger').click(function() {
    $('.mobile-ser-tab').removeClass('ser-menu-show');
    //$('.nav-drill').css('transform', 'translateX(0)');
    $('body').click(function(event) {

        // Check if the clicked element is not inside '.mobile-nav-top'
        if (!$(event.target).closest('.mobile-nav-top').length) {

            $('.mobile-ser-tab').removeClass('ser-menu-show');
        }
    });

});
</script>