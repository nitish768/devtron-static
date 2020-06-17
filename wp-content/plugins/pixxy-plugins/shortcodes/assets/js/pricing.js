;(function ($, window, document, undefined) {
  'use strict';

  $('.js-tab-link').on('click', function (e) {
    e.preventDefault();
    var index = $(this).index();

    $(this).addClass('active').siblings().removeClass('active');
    $(this).closest('.js-tab-wrap').find('.js-tab-item').eq(index).addClass('active').siblings().removeClass('active');
  })

})(jQuery, window, document);
