var image1 = $('#image-1')
var image2 = $('#image-2')

var $sectionOne = $(".section-hero");
var $navbar = $(".main-nav");
var $sectionTwo = $(".section-why");
var $sectionThree = $(".section-landscape");

$(function () {

  $(document).scroll(function () {

    if ($(this).scrollTop() == 0) {
      $navbar.removeClass("main-nav-dark main-nav-light");
    }

    if ($(this).scrollTop() > $navbar.height()) {
      $navbar.addClass("main-nav-light");
      $navbar.removeClass("main-nav-dark");
    }

    if ($(this).scrollTop() > ($sectionOne.height() + 2 * $navbar.height())) {
      $navbar.removeClass("main-nav-light");
      $navbar.addClass("main-nav-dark");
      $(image1).removeClass('fixed-pos fixed-pos__current-landscape');
      $(image2).removeClass('fixed-pos fixed-pos__vision-landscape');
    }

    if ($(this).scrollTop() > $sectionOne.height() + 431) {
      console.log($(this).scrollTop());
      $(image1).addClass('fixed-pos fixed-pos__current-landscape')
      $(image2).addClass('fixed-pos fixed-pos__vision-landscape')
      // $(image1).removeClass('hidden')
    }

    if ($(this).scrollTop() > ($sectionOne.height() + $sectionTwo.height() + (5 * $navbar.height()))) {
      $navbar.addClass("main-nav-light");
      $navbar.removeClass("main-nav-dark");
      $(image1).removeClass('fixed-pos')
      $(image2).removeClass('fixed-pos')
    }

    if ($(this).scrollTop() > ($sectionOne.height() + $sectionTwo.height() + $sectionThree.height() + (7 * $navbar.height()))) {
      $navbar.removeClass("main-nav-light");
      $navbar.addClass("main-nav-dark");
    }
  });
});