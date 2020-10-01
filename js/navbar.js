
$(function () {
  var $sectionOne = $(".section-hero");
  var $navbar = $(".main-nav");
  $(document).scroll(function () {
    if ($(this).scrollTop() > $navbar.height()) {
      $navbar.addClass("main-nav-light");
      $navbar.removeClass("main-nav-dark");
    }
    else if ($(this).scrollTop() > $sectionOne.height()) {
      $navbar.removeClass("main-nav-light");
      $navbar.addClass("main-nav-dark");
    }

    $navbar.removeClass("main-nav--light main-nav--dark", $(this).scrollTop() > $sectionOne.height());
  });
});