function handleTabChange(event, tabIdToDisplay) {
    let tabcontent, tablinks;
    // to change the position of active bar line
    let activeBarNumber = Number(tabIdToDisplay.split('-')[1]) * 60;
    document.getElementsByClassName('tabs__activebar')[0].style.transform = `translateY(${activeBarNumber}px)`;

    tabcontent = document.getElementsByClassName("tabcontent");

    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display ='none';
    }

    tablinks = document.getElementsByClassName("tabs__item");

    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabIdToDisplay).style.display = "block";

    event.currentTarget.className += " active";
}

document.getElementById("defaultSelectedTab").click();


const featureHeadingsSwitcher = {
    featureHeadingsTextAndURL: [
        {
            text: 'App Monitoring and Debugging',
            imgURL: './images/sneak-peek-1.gif'
        },
        {
            text: 'Customizable Security Policies & Visibility',
            imgURL: './images/sneak-peek-2.gif'
        },
        {
            text: 'Insightful Deployment metrics',
            imgURL: './images/sneak-peek-3.gif'
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
            }
        }
        document.getElementById('sneakPeekImage').src = this.featureHeadingsTextAndURL[0].imgURL
    }
}

featureHeadingsSwitcher.fillValuesInDivsAndApplyImage();

function handleLinkedinClick (index, deviceType) {
    if (deviceType === 'web') {
        index += 6;
    }
    const gridItems = document.getElementsByClassName('section-why__why');
    const text = gridItems[index].innerText;
    const dummyTextArea = document.createElement("textarea");
    document.body.appendChild(dummyTextArea);
    dummyTextArea.value = text;
    dummyTextArea.select();
    document.execCommand("copy");
    document.body.removeChild(dummyTextArea);
    $('#linkedin-toast').toast({
        delay: 3000,
    })
    $("#linkedin-toast").toast('show');
    setTimeout ( () => {
        window.open('http://linkedin.com/', '_blank');
    }, 3000)
}

function handleTwitterIconClick (itemCountInClass) {
    const gridItems = document.getElementsByClassName('section-why__why');
    const currentItemContent = encodeURIComponent(gridItems[itemCountInClass].innerText);
    const twitterURL = `https://twitter.com/intent/tweet?text=${currentItemContent}`;
    window.open(twitterURL, '_blank');
}

function setRemainigTime() {
    const countDownDate = new Date("Oct 15, 2020 00:00:01").getTime();

    let intervalId = setInterval(() => {

    const now = new Date().getTime();
  
    const distance = countDownDate - now;
  
    // Time calculations for days, hours, minutes and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
    document.getElementById("ävailableTime").innerText = 'Available In ' + days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
  
    if (distance < 0) {
      clearInterval(intervalId);
      document.getElementById("ävailableTime").innerText = "Check out our product!!";
    }
  }, 1000);
}

setRemainigTime()


function addButtonTestimonials() {
  const testimonialsWrapperWidth = document.getElementsByClassName('section-learning__grid')[0].offsetWidth;
  const gridItemsGap = 30;
  const items = 4;
  // reducing 30 as last one's gap is irrelevant
  const gridItemsWidth = document.getElementsByClassName('section-learning__grid')[0].children[0].clientWidth * items + gridItemsGap * items - (30);

  if (gridItemsWidth > testimonialsWrapperWidth) {
    document.getElementById('testimonial-LR-buttons').style.display = 'flex';
  }
} 

addButtonTestimonials()

function moveScroll(leftVal) {
  document.getElementsByClassName('section-learning__grid')[0].scrollBy({
    left: leftVal,
    behavior : "smooth"
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

function moveLearningCarouselLeft () {
  moveScroll(-1000000);
  toggleDisplay();
}

function moveLearningCarouselRight () {
  moveScroll(1000000)
  toggleDisplay();
}