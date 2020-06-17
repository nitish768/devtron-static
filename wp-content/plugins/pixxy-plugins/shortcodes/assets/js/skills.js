// SKILLS
;(function ($, window, document, undefined) {
    'use strict';

    $(window).on('scroll load', function () {

      // linear style
      if ($('.skills').length) {
        $('.skills .skill').not('.active').each(function () {
          if ($(window).scrollTop() >= $(this).offset().top - $(window).height() * 1 && !$(this).closest('.js-split-slider').length) {
            $(this).addClass('active');
            $(this).each(function () {
              var procent = $(this).attr('data-value');
              $(this).find('.active-line').css('width', procent + '%').css('opacity', '1');
              $(this).find('.counter').countTo();
            }); // end each
          } // end if
        }); // end each
      }

      $('.counter').not('.counter--counted').each(function () {
          if ($(window).scrollTop() >= $(this).offset().top - $(window).height() * 1) {
              $(this).addClass('counter--counted');
              $(this).find('.js-counter').each(function () {
                  $(this).countTo();
              });
          }
      });
    });
})(jQuery, window, document);