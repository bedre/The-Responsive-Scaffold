function maskSliderImages() {
    var windowWidth = $(window).width();
    var idealHeight = Math.round($(window).height()*0.55);

    $('.imagemask').find('img').each(function(){
        var img    = $(this);
        var mask   = img.parent();

        var imgDisplayHeight = Math.round(windowWidth * img.attr('data-height') / img.attr('data-width'));

        if (imgDisplayHeight > idealHeight) {
            mask.css({
                'height'  : idealHeight,
                'overflow': 'hidden'
            });
            img.css({
                'top'     : Math.round(-((imgDisplayHeight-idealHeight)/2)),
                'position': 'absolute'
            });
        }
    });
}

function unMaskSliderImages() {
    // Find image with highest width/height ratio
    var windowWidth = $(window).width();
    var images = $('.imagemask').find('img');
    var maxRatio = 0;

    images.each(function(){
        maxRatio = Math.max(maxRatio, $(this).attr('data-width')/$(this).attr('data-height'));
    });

    var slideshowHeight = windowWidth / maxRatio;

    var ratio = 0;
    images.each(function(){
        var img = $(this);
        img.parent().css({
            'height'  : slideshowHeight,
            'overflow': 'hidden'
        });

        var imgDisplayHeight = Math.round(windowWidth * img.attr('data-height') / img.attr('data-width'));
        img.css({
            'top'     : Math.round(-((imgDisplayHeight-slideshowHeight)/2)),
            'position': 'absolute'
        });
    });
}