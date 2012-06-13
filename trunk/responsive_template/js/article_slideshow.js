$(window).load(function() {

    // Slider init
    $('.article-slider').flexslider({
        animation         : 'slide',
        animationDuration : 400,
        controlsContainer : '.article-image-wrapper',
        slideshow         : false, // don't autostart
        manualControls    : '.controls li',
        //controlNav        : false, // remove the navigation
        directionNav      : false, // remove left/right arrows
        start: function(slider) {

            // Add swipe instructions
            if (Modernizr.touch && !$.cookie('skagen_swipeinfo_shown')) {
                $('#swipe-instructions').show(200);
                $('#swipe-instructions-button').on('click touchend', function(event){
                    event.preventDefault();
                    $(this).parent().fadeOut(250);
                });
            }
            $.cookie('skagen_swipeinfo_shown', true, 30);
        }
    });
});

$(window).on('load resize', function(){
    resizeSliderControls();
});

function resizeSliderControls() {
    var controls = $('.article-image-wrapper').find('.controls'); 
    var width = 0;

    controls.find('li').each(function(i, item){
        var li = $(item);
        if (!width > 0) {
            width = li.css('width');
        }
        li.height(width);
    });

    var img_width = 0;
    controls.find('img').each(function(i, img){
        var i     = $(img);
        img_width = Math.round(parseInt(width) * i.attr('data-width') / i.attr('data-height'));

        i.css({
            'height': width,
            'width' : img_width+'px',
            'left'  : ((parseInt(width)-img_width)/2)+'px'
        });
        console.log((parseInt(width)-img_width)/2);
    });
}