;(function ($, window, document, undefined) {
    'use strict';

    $(document).on('click', '.px-accordion__item-title', function() {
        var parent = $(this).parent(),
            next = $(this).next();

        if( parent.hasClass('active') ) {
            parent.removeClass('active');
            next.slideUp(300);

            return;
        }
        parent.siblings().removeClass('active');
        parent.siblings().find('.px-accordion__item-description').slideUp(300);
        parent.addClass('active');
        next.slideToggle(300);
    });

})(jQuery, window, document);