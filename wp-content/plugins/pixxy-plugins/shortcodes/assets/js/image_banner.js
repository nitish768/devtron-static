;(function ($, window, document, undefined) {
  'use strict';

  $('.btn-scroll-down').on('click', function () {
    var scroll = $(this).closest('.top-banner').outerHeight() + $(this).closest('.top-banner').offset().top;
    $('html, body').animate({
      scrollTop: scroll
    }, 600);
    return false;
  });

  if ($('.top-banner').length) {
    if ($(window).width() > 767) {
      $('.top-banner').each(function () {
        var items = $(this).find('.images-wrap');
        items.each(function () {
          var id = $(this).attr('id');
          var scene = document.getElementById(id);
          var parallaxInstance = new Parallax(scene, {
            relativeInput: false,
            clipRelativeInput: false,
            calibrationThreshold: 100,
            calibrationDelay: 500,
            supportDelay: 500,
            calibrateX: true,
            calibrateY: false,
            invertX: true,
            invertY: true,
            limitX: false,
            limitY: false,
            scalarX: 5.0,
            scalarY: 5.0,
            frictionX: 0.1,
            frictionY: 0.1,
            originX: 0.5,
            originY: 0.5,
            hoverOnly: true
          });
        });
      });
    }
  }
})(jQuery, window, document);