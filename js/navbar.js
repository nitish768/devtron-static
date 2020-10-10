var image1 = $('#image-1')
var image2 = $('#image-2')
var $navbar = $(".main-nav");
var $sectionOne = $(".section-hero");
var $sectionTwo = $(".section-why");
var $sectionThree = $(".section-landscape__wrapper");
var $footer = $(".devtron-footer");
var $devtronLandscape = $(".devtron-landscape");
var $paraContainer = $(".section-hero__paragraph-container");
var $imgContainer = $(".section-hero__gif-wrapper");
var $policyTab = $(".devtron-landscape #policy-tab");

$(document).ready(function () {
  $(".owl-carousel").owlCarousel();

  setInterval(() => {
    var $para1 = $(".section-hero__paragraph:nth-child(1)");
    var $new = $para1.clone();
    $new.appendTo($paraContainer);

    var $img = $(".section-hero__gif:nth-child(1)");
    var $newImage = $img.clone();
    $newImage.appendTo($imgContainer);

    setTimeout(() => {
      $para1.remove();
      $img.remove();
    }, 100)

  }, 4000);
});

$('.owl-carousel').owlCarousel({
  margin: 8,
  autoplay: false,
  stagePadding: 40,
  margin: 20,
  dots: false,
  responsive: {
    0: {
      items: 1
    },
    550: {
      items: 2
    },
  }
})

$('sneakpeek-mob').owlCarousel({
  loop: false,
  nav: false,
  dots: true,
  stagePadding: 40,
  margin: 20,
  items: 1,
  responsive: {
    0: {
      items: 1
    },
    550: {
      items: 2
    },
  }
})

$.fn.isInViewport = function () {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();
  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();
  return elementBottom > viewportTop && elementTop < viewportBottom;
};


$(function () {
  $(document).scroll(function () {
    var viewportOffset = $(".devtron-footer").get(0).getBoundingClientRect();

    //Navbar 
    if ($(this).scrollTop() > $navbar.height() && $(this).scrollTop() < ($sectionOne.height() + $navbar.height())) {
      $navbar.addClass("main-nav-dark");
      $navbar.removeClass("main-nav-light bg-white");
    }
    else if ($(this).scrollTop() > ($sectionOne.height() + $navbar.height())
      && $(this).scrollTop() < ($sectionOne.height() + $sectionTwo.height() + (5 * $navbar.height()))
    ) {
      $navbar.removeClass("main-nav-dark");
      $navbar.addClass("main-nav-light");

      // if ($sectionThree.isInViewport() && !$policyTab.isInViewport()) {
      //   var image = image1.get(0).getBoundingClientRect();
      //   $(image1).css("position", "fixed").css("top", image.top).css("right", 135);
      // }
      // else {
      //   $(image1).css("visibility", "visible");
      // }
    }

    else if ($(this).scrollTop() > ($sectionOne.height() + $sectionTwo.height() + (5 * $navbar.height()))
      && $(this).scrollTop() < ($sectionOne.height() + $sectionTwo.height() + $sectionThree.height() + (5 * $navbar.height()))) {

      // if ($policyTab.isInViewport()) {
      //   $(image1).css("visibility", "visible");
      // }

      $navbar.addClass("main-nav-dark");
      $navbar.removeClass("main-nav-light bg-white");
      $(image1).removeClass('fixed-pos');
      $(image2).removeClass('fixed-pos');
    }

    else if ($(this).scrollTop() > ($sectionOne.height() + $sectionTwo.height() + $sectionThree.height() + (5 * $navbar.height())) && viewportOffset.top > 80) {
      $navbar.removeClass("main-nav-dark");
      $navbar.addClass("main-nav-light bg-white");
      $(image1).css("visibility", "hidden");
    }

    //footer 
    else if (viewportOffset.top < 80) {
      $navbar.addClass("main-nav-dark");
      $navbar.removeClass("main-nav-light bg-white");
    }
  });
});


function emptyErrorandSuccess() {
  const id = ['successMessage', 'errorMessage'];
  for (let i = 0; i < id.length; i++) {
    document.getElementById(id[i]).innerText = '';
  }
}

function handleEarlyAccessFormSubmit(event) {
  emptyErrorandSuccess()
  event.preventDefault();
  const xhr = new XMLHttpRequest();
  const url = 'https://api.hsforms.com/submissions/v3/integration/submit/6866519/d4003723-6514-4bc7-bccd-c5a72010a357';
  const email = document.getElementById('email').value;
  const firstname = document.getElementById('first-name').value;
  const lastname = document.getElementById('last-name').value;

  const data = {
    "fields": [
      {
        "name": "email",
        "value": email
      },
      {
        "name": "firstname",
        "value": firstname
      },
      {
        "name": "lastname",
        "value": lastname
      }
    ]
  }
  const final_data = JSON.stringify(data);
  xhr.open('POST', url);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const successMessage = JSON.parse(xhr.responseText);
      document.getElementById("successMessage").innerHTML = successMessage.inlineMessage;
    } else if (xhr.readyState == 4 && xhr.status == 400) {
      document.getElementById("errorMessage").innerText = "Email field is required";
    }
  }
  xhr.send(final_data)
}