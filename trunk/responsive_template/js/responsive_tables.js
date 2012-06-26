$(document).ready(function() {
    var switched = false;
    var updateTables = function() {
        if (($(window).width() < 720) && !switched ){
            switched = true;
            $('#contents').find('table').each(function(i, element) {
                splitTable($(element));
            });
            return true;
        } else if (switched && ($(window).width() > 720)) {
            switched = false;
            $('#contents').find('table').each(function(i, element) {
                unsplitTable($(element));
            });
        }
    };
     
    $(window).load(updateTables);
    $(window).bind('resize', updateTables);
     
    function splitTable(original) {

        // Fetch caption
        var caption = original.children('caption').get();
        if (caption.length === 1) {
            $(caption).remove();
        } else {
            caption = null;
        }
        original.wrap('<div class="table-wrapper" />');
       
        var copy = original.clone();
        copy.find('td:not(:first-child), th:not(:first-child)').css('display', 'none');
        original.addClass('responsive');
        
        original.closest('.table-wrapper').append(copy);
        copy.wrap('<div class="pinned" />');
        
        if (caption.length === 1) {
            original.closest('.table-wrapper').prepend('<div class="caption">' + $(caption).html() + '</div>');
            copy.closest('.pinned').css('top', '40px');
        }
        
        original.wrap("<div class='scrollable' />");
    }
    
    function unsplitTable(original) {
        var wrapper = original.closest('.table-wrapper');
        wrapper.find('.pinned').remove();
        var caption = wrapper.children('.caption').get();
        if (caption.length === 1) {
            original.prepend('<caption>' + $(caption).html() + '</caption>');
            $(caption).remove();
        }
        original.removeClass('responsive');
        original.unwrap();
        original.unwrap();
    }

});
