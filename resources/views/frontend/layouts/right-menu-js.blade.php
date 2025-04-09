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

    $('.ser-menu-close, .right-back').click(function() {
        $('.mobile-ser-tab').removeClass('ser-menu-show');
    });

    // Handle mobile menu item clicks with proper scrolling
    $('.mobile-ser-menu li a').click(function(e) {
        e.preventDefault();
        $('.mobile-ser-tab').removeClass('ser-menu-show');
        
        var targetId = $(this).attr('href');
        var $targetElement = $(targetId);
        if ($targetElement.length) {
            // Get header height for offset
            var headerHeight = $('.mobile-nav-top').outerHeight() || 0;
            
            // Calculate the target position with offset
            var targetPosition = $targetElement.offset().top - headerHeight;
            console.log(targetPosition);
            // Smooth scroll to target
            $('html, body').animate({
                scrollTop: targetPosition
            }, 800);
        }
    });

    $('.mobile-nav-top .hamburger').click(function() {
        $('.mobile-ser-tab').removeClass('ser-menu-show');
        $('body').click(function(event) {
            // Check if the clicked element is not inside '.mobile-nav-top'
            if (!$(event.target).closest('.mobile-nav-top').length) {
                $('.mobile-ser-tab').removeClass('ser-menu-show');
            }
        });
    });
</script>