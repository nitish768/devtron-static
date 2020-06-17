;(function ($, window, document, undefined) {
    'use strict';

    var breakpoints = [1200, 991, 768];

    function setPosition() {
        $('.px-media__item').each(function () {
            var position, max_width;

            if ( $(window).width() > breakpoints[0] ) {
                position = $(this).data( 'xl-size' ) || null;
            } else if ( $(window).width() > breakpoints[1] ) {
                position = $(this).data( 'lg-size' ) || null;
            } else if ( $(window).width() > breakpoints[2] ) {
                position = $(this).data( 'md-size' ) || null;
            } else if ( $(window).width() < breakpoints[2] ) {
                position = $(this).data( 'sm-size' ) || null;
            }

            if( position !== null ) {
                position = position.split(' ');
            } else {
                position = [0, 0, 0, 0];
            }

            function getSpaceValue(positionOne, positionTwo) {
                var value = +position[positionOne] + +position[positionTwo],
                    operation = isNaN( parseInt( value.toString().charAt(0) ) ) ? '+' : '-',
                    space = (operation == '+') ? value.toString().slice(1) : value;

                return {
                    oparation: operation,
                    space: space
                };
            }

            $(this).css({
                'top' : position[0] + 'px',
                'right' : position[1] + 'px',
                'bottom' : position[2] + 'px',
                'left' : position[3] + 'px',
                'width' : 'calc(100% ' + getSpaceValue(1, 3).oparation + ' ' + getSpaceValue(1, 3).space + 'px)',
                'height' : 'calc(100% ' + getSpaceValue(0, 2).oparation + ' ' + getSpaceValue(0, 2).space + 'px)'
            });

            if ( $(window).width() < breakpoints[2] ) {
              max_width = $(this).data( 'max-width' ) || null;
              $(this).children().css('width', max_width + 'px');
            } else {
              $(this).children().css('width', '100%');
            }
        });
    }

    setPosition();

    $(window).resize(function () {
        setPosition();
    })

})(jQuery, window, document);