'use_strict';

(function ($) {

    $(window).on('load', function () {
        $('.wrapper').addClass('loaded');
    });

    // Homepage slider
    $('.homepageBanner').owlCarousel({
        loop:true,
        autoplay:true,
        margin:0,
        nav:false,
        dots:true,
        animateOut:'fadeOut',
        mouseDrag:false,
        touchDrag:false,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    // Oneheight
    $(document).ready(function(){
    $.fn.equivalent = function (){
        var $blocks = $(this),
            maxH    = $blocks.eq(0).height();
        $blocks.each(function(){
            maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;
        });
        $blocks.height(maxH);
    }
    $('.productItem').equivalent();
    $('.product_fullname').equivalent();
});

})(jQuery);
