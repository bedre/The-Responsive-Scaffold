$(window).load(function() {
    var max_ratio = 0;
    var imageholders = $(".fit-images").find('.imageholder');
    var images = new Array();
    
    imageholders.each(function(){
        $(this).find('img').each(function(){
            var img = $(this);
            max_ratio = Math.max(max_ratio, img.attr('data-width')/img.attr('data-height'));
            images.push(img);
        });
    });
    
    var width = 0;
    imageholders.each(function(){
        var holder = $(this);
        if (width == 0) {
            width  = holder.width();
            height = width/max_ratio; 
        }
        
        holder.css({
            'height'  : height+'px',
            'overflow': 'hidden'
        });
    });
    
    images.each(function(i){
        var imgHeight = i.attr('data-height') * width / i.attr('data-width');
        if (imgHeight > height) {
            i.css('top', ((height-imgHeight)/2)+'px');
        }
    });
});  