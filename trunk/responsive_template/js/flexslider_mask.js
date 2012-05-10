function maskSliderImages() {
    var windowWidth = $(window).width();
    var idealHeight = Math.round($(window).height()*0.55);

    $('.imagemask').find('img').each(function(){
        var imgTag = $(this);
        var mask   = imgTag.parent();
        var img    = new Image();
        img.onload = function() {
            var imgDisplayHeight = Math.round(windowWidth * img.height / img.width);
            console.log('Ideal: '+idealHeight);
            if (imgDisplayHeight > idealHeight) {
                mask.css({
                    'height'  : idealHeight,
                    'overflow': 'hidden'
                });
                imgTag.css({
                    'top'     : Math.round(-((imgDisplayHeight-idealHeight)/2)),
                    'position': 'absolute'
                });
            }
        }
        img.src = imgTag.attr('src');
    });
}

function unMaskSliderImages() {
    $('.imagemask').each(function(){
        var mask = $(this);

        mask.css({
            'height'  : 'auto',
            'overflow': 'auto'
        });

        mask.find('img').first().css({
            'top'     : 0,
            'position': 'relative'
        });
    });
}