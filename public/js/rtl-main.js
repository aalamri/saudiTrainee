(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {


        /*-------------------------------
        Blog Carousel
        ---------------------------------*/
        $('.slider-area').owlCarousel({
            singleItem: true,
            pagination: false,
            autoPlay: true,
            rtl: true,
            transitionStyle: "fade"
        });
        /*-------------------------------
                Typed Js
                ---------------------------------*/
        $(".element").typed({
            strings: ["مصمم جرافيك.", "مصمم الويب.", "مطور ويب."],
            typeSpeed: -1,
            loop: true,
        });
        /*-------------------------------
        Skill Js
        ---------------------------------*/
        if (typeof($.fn.knob) != 'undefined') {
            $('.knob').each(function () {
                var $this = $(this),
                    knobVal = $this.attr('data-rel');
                $this.knob({
                    'draw': function () {
                        $(this.i).val(this.cv + '%')
                    }
                });
                $this.appear(function () {
                    $({
                        value: 0
                    })
                        .animate({
                            value: knobVal
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.val(Math.ceil(this.value)).trigger('change');
                            }
                        });
                }, {
                    accX: 0,
                    accY: 150
                });
            });
        }
        /*-------------------------------
        Blog Carousel
        ---------------------------------*/
        $('.carousel-blog').owlCarousel({
            singleItem: true,
            pagination: true,
            autoPlay: true,
            rtl: true,
        });
        $('.home-banner').owlCarousel({
            singleItem: true,
            pagination: false,
            autoPlay: true,
            rtl: true,
            transitionStyle: "fade",
        });
        /*-------------------------------
        Riview Carousel
        ---------------------------------*/
        $('.review-wrap').owlCarousel({
            singleItem: true,
            pagination: true,
            autoPlay: false,
            rtl: true,
        });

        /*-------------------------------
        Brand Carousel
        ---------------------------------*/
        $('.brand-wrap').owlCarousel({
            items: 5,
            center: true,
            loop: true,
            pagination: false,
            rtl: true,
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });

    });


}(jQuery));

