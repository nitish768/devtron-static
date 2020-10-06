var image1 = $('#image-1')
var image2 = $('#image-2')

var $sectionOne = $(".section-hero");
var $navbar = $(".main-nav");
var $sectionTwo = $(".section-why");
var $sectionThree = $(".section-landscape");

$(document).ready(function () {
  $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
  loop: false,
  margin: 10,
  nav: false,
  dots: false,
  autoplay: true,
  margin: 12,
  stagePadding: 20,
  items: 1,
})
 
$(function () {

  $(document).scroll(function () {

    if ($(this).scrollTop() == 0) {
      $navbar.removeClass("main-nav-dark main-nav-light");
    }

    if ($(this).scrollTop() > $navbar.height()) {
      $navbar.addClass("main-nav-dark");
      $navbar.removeClass("main-nav-light");
    }

    if ($(this).scrollTop() > ($sectionOne.height() + 2 * $navbar.height())) {
      $navbar.removeClass("main-nav-dark");
      $navbar.addClass("main-nav-light");
      $(image1).removeClass('fixed-pos fixed-pos__current-landscape');
      $(image2).removeClass('fixed-pos fixed-pos__vision-landscape');
    }

    if ($(this).scrollTop() > 1451 && $(this).scrollTop() < 1558) {
      // console.log($(this).scrollTop());
      $(image1).addClass('fixed-pos fixed-pos__current-landscape')
      // $(image2).addClass('fixed-pos fixed-pos__vision-landscape')
      // $(image1).removeClass('hidden')
    }

    if ($(this).scrollTop() > ($sectionOne.height() + $sectionTwo.height() + (5 * $navbar.height()))) {
      $navbar.addClass("main-nav-dark");
      $navbar.removeClass("main-nav-light");
      $(image1).removeClass('fixed-pos');
      $(image2).removeClass('fixed-pos');
    }

    if ($(this).scrollTop() > ($sectionOne.height() + $sectionTwo.height() + $sectionThree.height() + (7 * $navbar.height()))) {
      $navbar.removeClass("main-nav-dark");
      $navbar.addClass("main-nav-light");
    }
  });
});