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