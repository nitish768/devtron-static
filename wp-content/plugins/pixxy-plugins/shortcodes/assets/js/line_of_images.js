;(function ($, window, document, undefined) {
    'use strict';

    var breakpoints = [1200, 991, 768];

    function setWidth() {
        if($('.line-of-images.logos2').length) {

            $('.line-of-images.logos2').each(function () {
                var position;

                if ( $(window).width() > breakpoints[0] ) {
                    position = parseInt($(this).data( 'xl-count' )) || null;
                } else if ( $(window).width() > breakpoints[1] ) {
                    position = parseInt($(this).data( 'lg-count' )) || null;
                } else if ( $(window).width() > breakpoints[2] ) {
                    position = parseInt($(this).data( 'md-count' )) || null;
                } else if ( $(window).width() < breakpoints[2] ) {
                    position = parseInt($(this).data( 'sm-count' )) || null;
                }

                if(position !== null) {
                    $('.light-gallery > a').each(function () {
                        $(this).css({ 'width' : 'auto' }).css({ 'width' : 100 / position + '%' });
                    });
                }
            });
        }
    }

    setWidth();

    $(window).resize(function () {
        setWidth();
    })

})(jQuery, window, document);