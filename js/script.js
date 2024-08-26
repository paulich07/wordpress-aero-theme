(function($) {
    'use strict';

    // Document ready function
    $(function() {
        // Mobile menu toggle
        $('.menu-toggle').on('click', function() {
            $('body').toggleClass('mobile-menu-active');
        });

        // Smooth scroll for anchor links
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            }
        });

        // Back to top button
        var $backToTop = $('.back-to-top');
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $backToTop.fadeIn();
            } else {
                $backToTop.fadeOut();
            }
        });

        $backToTop.click(function() {
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

        // Add 'focus' and 'blur' events for better accessibility
        $('.main-navigation').find('a').on('focus blur', function() {
            $(this).parents('li').toggleClass('focus');
        });
    });

})(jQuery);