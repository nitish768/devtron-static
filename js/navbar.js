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
const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)


$(document).ready(function () {
  $(".owl-carousel").owlCarousel();

  if (!isMobile() && !isLandscape() && vw > 786) {

    if ($sectionTwo.isInViewport() && $sectionThree.isInViewport()) {
      var bottom = $(".section-why__bottom").get(0).getBoundingClientRect();
      let rightOffset = $(window).width() - bottom.right;
      $(image1).css("position", "fixed").css("top", bottom.top).css("right", rightOffset);
      $(image2).css("position", "fixed").css("top", bottom.top).css("right", rightOffset);

    }

  }


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

function isMobile() {
  var a = navigator.userAgent || navigator.vendor || window.opera;
  return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4));
};

function isLandscape() {
  if (window.innerHeight > window.innerWidth) return true;

  else return false;
}


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
    }

    else if ($(this).scrollTop() > ($sectionOne.height() + $sectionTwo.height() + (5 * $navbar.height()))
      && $(this).scrollTop() < ($sectionOne.height() + $sectionTwo.height() + $sectionThree.height() + (5 * $navbar.height()))) {

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


    ///Landscap transition 
    if (!isMobile() && !isLandscape() && vw > 786) {

      if ($(this).scrollTop() > ($sectionOne.height() + $navbar.height())) {

        if (!$sectionThree.isInViewport()) {
          $(image1).css("position", "static");
          $(image1).css("visibility", "visible");

        }
        else if ($sectionThree.isInViewport()) {
          var image = $(image1).get(0).getBoundingClientRect();
          let rightOffset = $(window).width() - image.right;
          $(image1).css("position", "fixed").css("right", rightOffset);
          $(image2).css("position", "fixed").css("right", rightOffset);

          if (image.top > 0) {
            $(image1).css("top", image.top);
            $(image2).css("top", image.top);
          }
        }

        if ($(image1).offset().top > $(".devtron-landscape").offset().top) {
          $(image1).css("visibility", "hidden");
        }

      }

      if (($(image2).offset().top < $(".section-landscape__top").offset().top)) {
        var image = $(image2).get(0).getBoundingClientRect();
        let rightOffset = $(window).width() - image.right;
        $(image1).css("position", "fixed").css("right", rightOffset);
        $(image2).css("position", "fixed").css("right", rightOffset);
        $(image1).css("visibility", "visible");
        if (image.top > 0) {
          $(image1).css("top", image.top);
          $(image2).css("top", image.top);
        }

      }
      if ($(image2).offset().top + $(image2).height() - 64 > $(".section-landscape__top").offset().top + $(".section-landscape__top").height()) {
        $(image2).css("position", "static");
        $(image1).css("visibility", "visible");
      }

      if (($(image1).offset().top > $(".section-testimonials").offset().top - 700)) {
        $(image1).css("visibility", "hidden");
      }
      if (($(image1).offset().top < $(".section-why__bottom").offset().top)) {
        $(image1).css("position", "static");
      }

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

var isColliding = function ($div1, $div2) {
  // Div 1 data
  var d1_offset = $div1.offset();
  var d1_height = $div1.outerHeight(true);
  var d1_width = $div1.outerWidth(true);
  var d1_distance_from_top = d1_offset.top + d1_height;
  var d1_distance_from_left = d1_offset.left + d1_width;

  // Div 2 data
  var d2_offset = $div2.offset();
  var d2_height = $div2.outerHeight(true);
  var d2_width = $div2.outerWidth(true);
  var d2_distance_from_top = d2_offset.top + d2_height;
  var d2_distance_from_left = d2_offset.left + d2_width;

  var not_colliding = (d1_distance_from_top < d2_offset.top || d1_offset.top > d2_distance_from_top || d1_distance_from_left < d2_offset.left || d1_offset.left > d2_distance_from_left);

  // Return whether it IS colliding
  return !not_colliding;
};

function test() {

  if ($image2.offset().top < ($(".section-landscape__top").offset().top - 30)) {
    // image2.css("top", "30px");
    $image2.css("display", "block");
  } else {
    image2.css("display", "none");
  }

}