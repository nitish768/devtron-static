;(function ($, window, document, undefined) {
  'use strict';

  var breakpoints = [1200, 991, 768];

  function setMargin() {
    $('.px-media__item').each(function () {
      var margin;

      if ( $(window).width() > breakpoints[0] ) {
        margin = $(this).data( 'xl-margin' ) || null;
      } else if ( $(window).width() > breakpoints[1] ) {
        margin = $(this).data( 'lg-margin' ) || null;
      } else if ( $(window).width() > breakpoints[2] ) {
        margin = $(this).data( 'md-margin' ) || null;
      } else if ( $(window).width() < breakpoints[2] ) {
        margin = $(this).data( 'sm-margin' ) || null;
      }

      if( margin !== null ) {
        margin = margin.split(' ');
      } else {
        margin = [0, 0];
      }

      $(this).css({
        'margin-top' : margin[0] + 'px',
        'margin-bottom' : margin[1] + 'px',
      });
    });
  }

  function setPadding() {
    $('.js-discount').each(function () {
      var padding;

      if ( $(window).width() > breakpoints[0] ) {
        padding = $(this).data( 'xl-padding' ) || null;
      } else if ( $(window).width() > breakpoints[1] ) {
        padding = $(this).data( 'lg-padding' ) || null;
      } else if ( $(window).width() > breakpoints[2] ) {
        padding = $(this).data( 'md-padding' ) || null;
      } else if ( $(window).width() < breakpoints[2] ) {
        padding = $(this).data( 'sm-padding' ) || null;
      }

      if( padding !== null ) {
        padding = padding.split(' ');
      } else {
        padding = [0, 0];
      }

      $(this).css({
        'padding-top' : padding[0] + 'px',
        'padding-bottom' : padding[1] + 'px',
      });
    });
  }

  setPadding();
  setMargin();

  $(window).resize(function () {
    setPadding();
    setMargin();
  })

})(jQuery, window, document);