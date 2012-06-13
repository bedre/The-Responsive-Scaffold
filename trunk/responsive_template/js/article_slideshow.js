$(window).load(function() {

    // Slider init
    $('.article-slider').flexslider({
        animation         : 'slide',
        animationDuration : 400,
        controlsContainer : '.article-image-wrapper',
        slideshow         : false, // don't autostart
        controlNav        : false,
        directionNav      : false,
        start: function(slider) {
            if (/*Modernizr.touch &&*/ !$.cookie('skagen_swipeinfo_shown')) {
                $('#swipe-instructions').show(200);
                $('#swipe-instructions-button').on('click touchend', function(event){
                    event.preventDefault();
                    $(this).parent().fadeOut(250);
                });
            }
            // $.cookie('skagen_swipeinfo_shown', true);
        }
    });
});