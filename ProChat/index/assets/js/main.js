(function($) {
    "use strict";
    const colorMode = document.querySelector('.theme-mode-control');
    const getMode = localStorage.getItem('theme');
    const darkBtn = document.querySelector('.dark-btn');
    const lightBtn = document.querySelector('.light-btn');
    if (getMode === 'dark') {
        document.body.classList.add('dark-theme-variables');
        if (lightBtn && darkBtn) {
            lightBtn.style.display = "none";
            darkBtn.style.display = "block";
        }
    }
    if (colorMode) {
        colorMode.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme-variables');
            const checkMode = document.body.classList.contains('dark-theme-variables');
            const setMode = checkMode ? 'dark' : 'light';
            localStorage.setItem('theme', setMode);
            if (checkMode) {
                lightBtn.style.display = "none";
                darkBtn.style.display = "block";
            } else {
                lightBtn.style.display = "block";
                darkBtn.style.display = "none";
            }
        });
    };
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    $('.status-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 4
            },
            600: {
                items: 6
            },
            1000: {
                items: 8
            },
            1200: {
                items: 5
            }
        }
    });
    if ($(".popup-gallery").length) {
        $(".popup-gallery").magnificPopup({
            delegate: '.popup-img',
            type: 'image',
            gallery: {
                enabled: false
            },
        });
    }
    $(".file-btn").on('click', function(e) {
        $(this).next('.file-input').click();
    });
    $('.search-btn button').on('click', function() {
        $(".search-form").toggleClass('active');
    });
    if ($('.bottom-scroll').length) {
        $(function() {
            var chatbox = $('.bottom-scroll');
            var chatheight = chatbox[0].scrollHeight;
            chatbox.scrollTop(chatheight);
        });
    }
    $('.layout-content-btn').on('click', function() {
        $(".layout-content").removeClass('active');
    });
    $(window).on('load', function() {
        audioMode()
    });
    $('.theme-mode-control').on('click', function() {
        audioMode()
    });

    function audioMode() {
        let dtv = document.querySelector('.dark-theme-variables');
        if (dtv) {
            $('audio').attr('data-bs-theme', 'dark');
        } else {
            $('audio').removeAttr('data-bs-theme', 'dark');
        }
    }
})(jQuery);