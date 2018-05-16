jQuery(document).ready(function() {
    var slides_to_show = parseInt(slickslider.count);
    var slides_to_show_1 = parseInt(slides_to_show - 1);
    var slides_to_show_2 = parseInt(slides_to_show - 2);
    var slides_to_show_3 = parseInt(slides_to_show - 3);
    var slides_to_show_4 = parseInt(slides_to_show - 4);
    var carousel_load = jQuery('.video-list-slider').slick({
        infinite: true,
        slidesToShow: slides_to_show,
        slidesToScroll: slides_to_show,
        arrows: true,
        prevArrow: '<button class="slick-prev slick-arrow"></button>',
        nextArrow: '<button class="slick-next slick-arrow"></button>',
        responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: slides_to_show_1,
            slidesToScroll: slides_to_show_1
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: slides_to_show_2,
            slidesToScroll: slides_to_show_2,
            infinite: true,
          }
        },
        {
          breakpoint: 960,
          settings: {
            slidesToShow: slides_to_show_3,
            slidesToScroll: slides_to_show_3
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: slides_to_show_4,
            slidesToScroll: slides_to_show_4
          }
        }
        ]
    });
    
    jQuery('.video-slide').hover( function () {
        var prev_slide = jQuery(this).prevAll();
        var next_slide = jQuery(this).nextAll();
        prev_slide.toggleClass('shift-left');
        next_slide.toggleClass('shift-right');
    });
    
    jQuery.when(carousel_load).done( function() {
        jQuery('#vs-netflix-slide-loader').remove();
        jQuery('#video-list-container').css({'opacity': '1', 'max-height': 'none'});
    });
    
    
});

jQuery('.video-list-slider').on('afterChange', function(slick, currentSlide) {
    var current_slider = jQuery(this);
    current_slider.find('.slick-active').removeClass('slick-first');
    current_slider.find('.slick-slide').removeClass('slick-last');
    current_slider.find('.slick-active:first').addClass('slick-first');
    current_slider.find('.slick-active:last').addClass('slick-last');
});

jQuery('.video-list-slider').on('init', function(slick) {
    var current_slider = jQuery(this);
    current_slider.find('.slick-current').addClass('slick-first');
    current_slider.find('.slick-active:first').addClass('slick-first');
    current_slider.find('.slick-active:last').addClass('slick-last');
});