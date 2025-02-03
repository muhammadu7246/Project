/* Theme Name: Doot - Responsive Chat App
   Author: Themesbrand
   Version: 1.0.0
   File Description: Main JS file of the template
*/
(function($) {

    'use strict';

    // Navbar
    function initNavbar() {
        $('.navbar-nav a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1000, 'easeInOutExpo');
            event.preventDefault();
        });

        $('.check-demo').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1000, 'easeInOutExpo');
            event.preventDefault();
        });
    }


    // Sticky Header
    function initSticky() {
        $(".sticky").sticky({
            topSpacing: 0
        });
    }

    // befote after image
    function initBeforeAfter() {
        $(".beforeafterdefault").cndkbeforeafter({
            showText: false,
            mode: "drag",
        });
    }


    function initContactForm() {
        $('#contact-form').submit(function() {

            var action = $(this).attr('action');

            $("#message").slideUp(750, function() {
                $('#message').hide();

                $('#submit')
                    .attr('disabled', 'disabled');

                $.post(action, {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        comments: $('#comments').val(),
                    },
                    function(data) {
                        document.getElementById('message').innerHTML = data;
                        $('#message').slideDown('slow');
                        $('#cform img.contact-loader').fadeOut('slow', function() {
                            $(this).remove()
                        });
                        $('#submit').removeAttr('disabled');
                        if (data.match('success') != null) $('#cform').slideUp('slow');
                    }
                );

            });

            return false;
        });
    }

    function init() {
        initNavbar();
        initSticky();
        initBeforeAfter();
        initContactForm();
    }

    init();

})(jQuery)