var image1 = $('#image-1')
var image2 = $('#image-2')

$(function () {
  var $sectionOne = $(".section-hero");
  var $navbar = $(".main-nav");

  var $sectionTwo = $(".section-why");
  var $sectionThree = $(".section-landscape");

  $(document).scroll(function () {

    if ($(this).scrollTop() == 0) {
      $navbar.removeClass("main-nav-dark main-nav-light");

      $(image1).removeClass('fixed-pos');
      $(image2).removeClass('fixed-pos');
    }

    if ($(this).scrollTop() > $navbar.height()) {
      $navbar.addClass("main-nav-light");
      $navbar.removeClass("main-nav-dark");
    }

    if ($(this).scrollTop() > $sectionOne.height()) {
      $navbar.removeClass("main-nav-light");
      $navbar.addClass("main-nav-dark");

      $(image1).addClass('fixed-pos')
      $(image2).addClass('fixed-pos')
      $(image1).removeClass('hidden')
    }

    if ($(this).scrollTop() > $sectionTwo.height()) {
      $navbar.removeClass("main-nav-light");
      $navbar.addClass("main-nav-dark");

      $(image1).addClass('fixed-pos')
      $(image2).addClass('fixed-pos')
      $(image1).removeClass('hidden')
    }

    if ($(this).scrollTop() > 1510) {
      console.log(window.scrollY);

      $navbar.removeClass("main-nav-light");
      $navbar.addClass("main-nav-dark");

      $(image1).removeClass('fixed-pos')
      $(image2).removeClass('fixed-pos')
      $(image1).removeClass('hidden')
    }

  });
});