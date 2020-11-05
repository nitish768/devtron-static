function handleTabChange(event, tabIdToDisplay) {
  let tabcontent, tablinks;
  // to change the position of active bar line
  let activeBarNumber = Number(tabIdToDisplay.split('-')[1]) * 60;
  document.getElementsByClassName('tabs__activebar')[0].style.transform = `translateY(${activeBarNumber}px)`;

  tabcontent = document.getElementsByClassName("tabcontent");

  for (let i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = 'none';
  }

  tablinks = document.getElementsByClassName("tabs__item");

  for (let i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(tabIdToDisplay).style.display = "block";

  event.currentTarget.className += " active";
}
// simulating click to have 1st one selected

const featureHeadingsSwitcher = {
  featureHeadingsTextAndURL: [
    {
      text: 'App Monitoring and Debugging',
      videoURL: './videos/App detail-comp-vdo.mp4',
      imgURL: './images/app-detail-thumb.jpg',
    },
    {
      text: 'Customizable Security Policies & Visibility',
      videoURL: './videos/Security-comp-vdo.mp4',
      imgURL: './images/security-thumb.jpg',
    },
    {
      text: 'Insightful Deployment metrics',
      videoURL: './videos/deployment-metrics.mp4',
      imgURL: './images/dep-metrics-thumb.jpg',
    },
  ],
  handleHeadingClick(indexClicked) {
    const currentlySelected = this.featureHeadingsTextAndURL[0];
    this.featureHeadingsTextAndURL[0] = this.featureHeadingsTextAndURL[indexClicked];
    this.featureHeadingsTextAndURL[indexClicked] = currentlySelected;
    this.fillValuesInDivsAndApplyImage();
  },
  fillValuesInDivsAndApplyImage() {
    const featureHeadings = document.getElementsByClassName("featureHeading");
    for (let i = 0; i < featureHeadings.length; i++) {
      if (i === 0) {
        featureHeadings[i].innerText = this.featureHeadingsTextAndURL[i].text;
      }
      else {
        featureHeadings[i].innerHTML = `<div style="line-height: 1.5"><img src="${this.featureHeadingsTextAndURL[i].imgURL}" style="width: 80px; height: 50px; float: left; margin: 0 20px 0 0"/> ${this.featureHeadingsTextAndURL[i].text}</div>`
        // featureHeadings[i].innerHTML = `<div style="line-height: 1.5">${this.featureHeadingsTextAndURL[i].text}</div>`

      }
    }
    document.getElementById('sneakPeekImage').src = this.featureHeadingsTextAndURL[0].videoURL
  }
}

featureHeadingsSwitcher.fillValuesInDivsAndApplyImage();

function handleLinkedinClick(index, deviceType) {
  const textToAppend = `
https://devtron.ai/?utm_source=linkedin&utm_medium=post&utm_campaign=quote
  
#devtron #kubernetes #continuousdeployment #devops
`;
  if (deviceType === 'web') {
    index += 6;
  }
  const gridItems = document.getElementsByClassName('section-why__why');
  const text = gridItems[index].innerText;
  const finalText = `${text}
${textToAppend}`;
  const dummyTextArea = document.createElement("textarea");
  document.body.appendChild(dummyTextArea);
  dummyTextArea.value = finalText;
  dummyTextArea.select();
  document.execCommand("copy");
  document.body.removeChild(dummyTextArea);
  $('#linkedin-toast').toast({
    delay: 3000,
  })
  $("#linkedin-toast").toast('show');
  setTimeout(() => {
    window.open('http://linkedin.com/', '_blank');
  }, 3000)
}

function handleTwitterIconClick(itemCountInClass, deviceType) {
  const textToAppend = `
https://devtron.ai/?utm_source=twitter&utm_medium=tweet&utm_campaign=quote
  
#devtron #kubernetes #continuousdeployment #devops
`;

  if (deviceType === 'web') {
    itemCountInClass += 6;
  }
  const gridItems = document.getElementsByClassName('section-why__why');
  const completeCurrentItemContent = `${gridItems[itemCountInClass].innerText}
  ${textToAppend}`;
  const currentItemContent = encodeURIComponent(completeCurrentItemContent);
  const twitterURL = `https://twitter.com/intent/tweet?text=${currentItemContent}`;
  window.open(twitterURL, '_blank');
}

function setRemainigTime() {
  const countDownDate = new Date("Nov 5, 2020 00:00:01").getTime();

  // let intervalId = setInterval(() => {

  //   const now = new Date().getTime();

  //   const timeLeft = countDownDate - now;

  //   // Time calculations for days, hours, minutes and seconds
  //   const days = Math.floor(timeLeft / (000 * 60 * 60 * 24));

  //   if (days > 2) {
  //     document.getElementById("ävailableTime").innerText = "Available 5th November 2020";
  //   }

  //   else if (days <= 2 && days >= 0) {
  //     const hours = Math.floor((timeLeft % (000 * 60 * 60 * 24)) / (000 * 60 * 60));
  //     const minutes = Math.floor((timeLeft % (000 * 60 * 60)) / (000 * 60));
  //     const seconds = Math.floor((timeLeft % (000 * 60)) / 000);
  //     document.getElementById("ävailableTime").innerText = 'Available In ' + days + "d " + hours + "h "
  //       + minutes + "m " + seconds + "s ";
  //   }


  //   // to handle text for live if needed
  //   // if (timeLeft < 0) {
  //   //   clearInterval(intervalId);
  //   //   document.getElementById("ävailableTime").innerText = "Check out our product!!";
  //   // }
  // }, 000);
}

setRemainigTime()


function addButtonTestimonials() {
  const testimonialsWrapperWidth = document.getElementsByClassName('section-learning__grid')[0].offsetWidth;
  const gridItemsGap = 30;
  const items = 4;
  // reducing 30 as last one's gap is irrelevant
  const gridItemsWidth = document.getElementsByClassName('section-learning__grid')[0].children[0].clientWidth * items + gridItemsGap * items - (30);

  if (gridItemsWidth < testimonialsWrapperWidth) {
    document.getElementsByClassName('testimonial-right-button')[0].style.visibility = 'hidden';
  }
}

addButtonTestimonials()

function moveScroll(leftVal) {
  document.getElementsByClassName('section-learning__grid')[0].scrollBy({
    left: leftVal,
    behavior: "smooth"
  })
}

function toggleDisplay() {
  const classes = ['testimonial-left-button', 'testimonial-right-button'];

  for (let i = 0; i < classes.length; i++) {
    if (document.getElementsByClassName(classes[i])[0].style.visibility === 'hidden') {
      document.getElementsByClassName(classes[i])[0].style.visibility = 'visible';
    }
    else {
      document.getElementsByClassName(classes[i])[0].style.visibility = 'hidden';
    }
  }
}

function moveLearningCarouselLeft() {
  moveScroll(-000000);
  toggleDisplay();
}

function moveLearningCarouselRight() {
  moveScroll(000000)
  toggleDisplay();
}

function openBlogPage(index) {
  const urls = [
    "https://devtron.ai/blog/upgrade-eks-1-16-cluster-to-eks-1-17-using-eksctl-in-6-steps/",
    "https://devtron.ai/blog/ultimate-guide-of-pod-eviction-on-kubernetes/",
    "https://devtron.ai/blog/how-to-use-spot-to-achieve-cost-savings-on-kubernetes/",
    "https://devtron.ai/blog/advantages-disadvantages-of-migrating-to-kubernetes/"
  ];
  const currentUrl = urls[index];
  window.open(currentUrl, "_blank");
}

var image1 = $('#image-1')
var image2 = $('#image-2')
var $navbar = $(".main-nav");
var $sectionOneHeight = $(".section-hero").outerHeight();
var $sectionTwo = $(".section-why");
var $sectionThree = $(".section-landscape__wrapper");
var $devtronStack = $(".devtron-stack");
var $easilyIntegrate = $(".easily-integrate");
var $testimonials = $(".section-testimonials");
var $joinCommunity = $(".join-community");
var $getStarted = $(".get-started");
var $contributor = $(".section-contributor");
var $learning = $(".section-learning--mob");
var $footer = $(".devtron-footer");
var $devtronLandscape = $(".devtron-landscape");
var $paraContainer = $(".section-hero__paragraph-container");
var $imgContainer = $(".section-hero__gif-wrapper");
var $policyTab = $(".devtron-landscape #policy-tab");
const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
let triggeerHeight = ((Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0) - image1.height()) / 2);

$(document).ready(function () {
  //Set initial positions
  // if (!isMobile() && !isLandscape() && vw > 768) {
  //   let bottom = $(".section-why__bottom").get(0).getBoundingClientRect();
  //   let image1Rect = image1.get(0).getBoundingClientRect()
  //   let rightOffset = $(window).width() - bottom.right;
  //   if (image1Rect.top < triggeerHeight && $sectionThree.isInViewport()) {
  //     $(image1).css("position", "fixed").css("top", bottom.top).css("right", rightOffset);
  //     $(image2).css("position", "fixed").css("top", bottom.top).css("right", rightOffset);
  //   }
  //   else {
  //     $(image2).css("position", "fixed").css("top", bottom.top).css("right", rightOffset);
  //   }
  // }

  getGithubStars();
  document.getElementById("defaultSelectedTab").click();
  if ($('.section-hero__gif-wrapper').is(':visible')) {
    ScrollOut({
      targets: ".slide-up",
      once: true,
      onShown(el) {
        el.classList.add("animate__animated", "animate__slideInUp");
      },
      onHidden(el) {
        el.classList.remove("animate__animated", "animate__slideInUp");
      }
    });

    ScrollOut({
      targets: ".card",
      once: true,
      onShown(el) {
        el.classList.add("animate__animated", "animate__slideInUp25");
      },
      onHidden(el) {
        // el.classList.remove("animate__animated", "animate__slideInUp25");
      }
    });

    ScrollOut({
      targets: ".section-hero__left",
      once: true,
      onShown(el) {
        el.classList.add("animate__animated");
        el.classList.add("animate__fadeIn");
      },
      onHidden(el) {
        el.classList.remove("animate__animated");
        el.classList.remove("animate__fadeIn");
      }
    });

    ScrollOut({
      targets: ".section-hero__gif-wrapper",
      once: true,
      onShown(el) {
        el.classList.add("animate__animated");
        el.classList.add("animate__fadeIn");
      },
      onHidden(el) {
        el.classList.remove("animate__animated");
        el.classList.remove("animate__fadeIn");
      }
    });

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
      }, 00)

    }, 4000);
  }

  $('.owl-carousel--section-why').owlCarousel({
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
      768: {
        items: 3,
        margin: 30,
      }
    }
  })

  let testimonials = $('.owl-carousel--testimonials');
  testimonials.on('initialized.owl.carousel', function (e) {
    let all = document.querySelectorAll('.carousel-testimonial__message-container');
    let allMessages = document.querySelectorAll('.carousel-testimonial__message');
    for (let i = 0; i < all.length; i++) {
      if ((all[i].clientHeight >= allMessages[i].scrollHeight)) {
        all[i].classList.add('hide-see-more');
      }
    }
  });

  testimonials.owlCarousel({
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
      768: {
        items: 3,
      }
    }
  })

  $('.sneakpeek-mob').owlCarousel({
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
});

$.fn.isInViewport = function () {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();
  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();
  return elementBottom > viewportTop && elementTop < viewportBottom;
};

function toggleSeeMore(btnId, containerId) {
  let btn = document.querySelector(btnId)
  let message = document.getElementById(containerId);
  let fixedHeight = document.querySelector(`#${containerId} .carousel-testimonial__message`).scrollHeight || 360;
  if (btn.textContent.includes('more')) {
    message.style.height = `${fixedHeight}px`;
    btn.textContent = "Read less"
  }
  else {
    message.style.height = "";
    btn.textContent = "Read more";
  }
}

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
    const scrollTop = $(this).scrollTop();
    if (scrollTop < ($sectionOneHeight - $navbar.height())) {
      $navbar.addClass("main-nav-dark");
      $navbar.removeClass("main-nav-light bg-white show-nav-github");
    }
    else if (scrollTop > ($sectionOneHeight - $navbar.height()) && scrollTop < ($sectionOneHeight + $sectionTwo.outerHeight() - $navbar.height())) {
      $navbar.removeClass("main-nav-dark");
      $navbar.addClass("main-nav-light show-nav-github");
    }
    else if (scrollTop > ($sectionOneHeight + $sectionTwo.outerHeight() - $navbar.height())
      && scrollTop < ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() - $navbar.height())) {
      $navbar.addClass("main-nav-dark show-nav-github");
      $navbar.removeClass("main-nav-light bg-white");
    }
    else if (scrollTop > ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() - $navbar.height())
      && scrollTop < ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() - $navbar.height())) {
      $navbar.addClass("bg-white show-nav-github");
      $navbar.removeClass("main-nav-dark main-nav-light");
    }
    else if (scrollTop > ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() - $navbar.height())
      && scrollTop < ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() + 0 - $navbar.height())) {
      $navbar.addClass("main-nav-light show-nav-github");
      $navbar.removeClass("main-nav-dark bg-white");
    }
    else if (scrollTop > ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() + 0 - $navbar.height())
      && scrollTop < ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() + 0 + $testimonials.outerHeight() + $joinCommunity.outerHeight() + 00 - $navbar.height())) {
      $navbar.addClass("bg-white show-nav-github");
      $navbar.removeClass("main-nav-dark main-nav-light");
    }
    else if (scrollTop > ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() + 0 + $testimonials.outerHeight() + $joinCommunity.outerHeight() + 00 - $navbar.height())
      && scrollTop < ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() + 0 + $testimonials.outerHeight() + $joinCommunity.outerHeight() + 00 + $getStarted.outerHeight() - $navbar.height())) {
      $navbar.addClass("main-nav-dark show-nav-github");
      $navbar.removeClass("bg-white main-nav-light");
    }
    else if (scrollTop > ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() + 0 + $testimonials.outerHeight() + $joinCommunity.outerHeight() + 00 + $getStarted.outerHeight() - $navbar.height())
      && scrollTop < ($sectionOneHeight + $sectionTwo.outerHeight() + $sectionThree.outerHeight() + $devtronStack.outerHeight() + 0 + $testimonials.outerHeight() + $joinCommunity.outerHeight() + 00 + $getStarted.outerHeight() + $contributor.outerHeight() + $learning.outerHeight() - $navbar.height())) {
      $navbar.addClass("bg-white show-nav-github");
      $navbar.removeClass("main-nav-dark main-nav-light");
    }
    //footer 
    else {
      var viewportOffset = $(".devtron-footer").get(0).getBoundingClientRect();
      if (viewportOffset.top <= 80) {
        $navbar.addClass("main-nav-dark show-nav-github");
        $navbar.removeClass("main-nav-light bg-white");
      }
    }

    ///Landscape transition 
    // if (!isMobile() && !isLandscape() && vw > 768) {

    //   if (scrollTop > ($sectionOne.height() + $navbar.height())) {
    //     let image = $(image1).get(0).getBoundingClientRect();
    //     let rightOffset = $(window).width() - image.right;
    //     let image1Rect = image1.get(0).getBoundingClientRect();
    //     if (!(image1Rect.top < triggeerHeight)) {
    //       let bottom = $(".section-why__bottom").get(0).getBoundingClientRect();
    //       $(image1).css("position", "static");
    //       $(image1).css("visibility", "visible");
    //       $(image2).css("position", "fixed").css("top", bottom.top).css("right", rightOffset);
    //     }

    //     else if (image1Rect.top < triggeerHeight) {
    //       $(image1).css("position", "fixed").css("right", rightOffset);
    //       $(image2).css("position", "fixed").css("right", rightOffset);
    //       if (image.top > 0) {
    //         $(image1).css("top", image.top);
    //         $(image2).css("top", image.top);
    //       }
    //     }

    //     if ($(image1).offset().top > $(".devtron-landscape").offset().top) {
    //       $(image1).css("visibility", "hidden");
    //     }
    //   }

    //   if (($(image2).offset().top < $(".section-landscape__top").offset().top)) {
    //     var image = $(image2).get(0).getBoundingClientRect();
    //     let rightOffset = $(window).width() - image.right;
    //     $(image1).css("position", "fixed").css("right", rightOffset);
    //     $(image2).css("position", "fixed").css("right", rightOffset);
    //     $(image1).css("visibility", "visible");
    //     if (image.top > 0) {
    //       $(image1).css("top", image.top);
    //       $(image2).css("top", image.top);
    //     }
    //   }

    //   if ($(image2).offset().top + $(image2).height() - 64 > $(".section-landscape__top").offset().top + $(".section-landscape__top").height()) {
    //     $(image2).css("position", "static");
    //     $(image1).css("visibility", "visible");
    //   }

    //   if (($(image1).offset().top > $(".section-testimonials").offset().top - 700)) {
    //     $(image1).css("visibility", "hidden");
    //   }
    //   if (($(image1).offset().top < $(".section-why__bottom").offset().top)) {
    //     $(image1).css("position", "static");
    //   }

    // }

  });
});

function getGithubStars() {
  const URL = 'https://api.github.com/orgs/devtron-labs/repos?type=all&per_page=90&page=1';
  const xhr = new XMLHttpRequest();
  xhr.open('GET', URL);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = JSON.parse(xhr.responseText);
      let list = response || [];
      let main = list.find(repo => repo.name.toLowerCase() === "devtron");
      let stars = main.stargazers_count || 0;
      if (stars >= 1000) stars = `${Math.trunc(10 * stars / 000) / 10}K`;
      document.querySelector('#star-count').innerText = stars;
    }
    else if (xhr.readyState == 4 && xhr.status == 400) {
    }
  }
  xhr.send();


}

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
  xhr.send(final_data);
  gtag('event', 'Early Access Form Submit', {
    'event_category': 'Early access',
    'event_label': '',
  });
}

function copy(command) {
  let body = document.querySelector('body');
  let textArea = document.createElement("textarea");
  textArea.value = command;
  body.appendChild(textArea);
  try {
    textArea.select();
    document.execCommand('copy');
    console.log("Copied");
  } catch (err) {
    console.error('Oops, unable to copy', err);
  }
  body.removeChild(textArea);
  $("#copy-toast").toast('show');
}

function getEarlyAccessGAEvent(label) {
  gtag('event', 'Early Access Button Clicked', {
    'event_category': 'Early access',
    'event_label': label
  });
}

function quoteShareGAEvent(quote, social) {
  gtag('event', quote, {
    'event_category': 'Quote Shared',
    'event_label': social
  });
}

function footerLinksGAEvent(social) {
  gtag('event', "Social Link clicked", {
    'event_category': 'Footer',
    'event_label': social
  });
}

function blogCLickGAEvent(social) {
  gtag('event', 'Blog Link Clicked', {
    'event_category': 'Blog',
    'event_label': social
  });
}
