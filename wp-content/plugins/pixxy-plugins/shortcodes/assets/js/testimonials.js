;(function ($, window, document, undefined) {
    'use strict';

    if ($('.flipster-slider').length) {
        $('.flipster-slider').each(function (index) {

            var that = $(this);

            var sliderIndex = 'flipster-slider-unique-id-' + index;

            that.addClass(sliderIndex + ' initialized').attr('id', sliderIndex);

            var VarKeyboardControl = parseInt(that.attr('data-keyboard'), 10);
            var VarMousewheel = parseInt(that.attr('data-mousewheel'), 10);
            var VarNavButtons = parseInt(that.attr('data-controls'), 10);

            that.flipster({
                style: 'carousel',
                enableKeyboard: VarKeyboardControl || false,
                enableMousewheel: VarMousewheel || false,
                enableNavButtons: VarNavButtons || false
            })

        })
    }


})(jQuery, window, document);