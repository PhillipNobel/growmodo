    jQuery(function($){
    // Initialize Properties Slider
    if ($('.properties-slider').length > 0) {
        new Swiper('.properties-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.prop-next',
                prevEl: '.prop-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    }

    // Initialize FAQs Slider
    if ($('.faqs-slider').length > 0) {
        new Swiper('.faqs-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.faq-next',
                prevEl: '.faq-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    }
    // Initialize Testimonials Slider
    if ($('.testimonials-slider').length > 0) {
        new Swiper('.testimonials-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }

    // Mobile Menu Toggle
    $('.menu-toggle').on('click', function() {
        var expanded = $(this).attr('aria-expanded') === 'true' || false;
        $(this).attr('aria-expanded', !expanded);
        $('.main-navigation ul').slideToggle();
    });
});
