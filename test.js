function handleTwitterIconClick (itemCountInClass) {
    const gridItems = document.getElementsByClassName('section-why__why');
    // console.log(gridItems);
    const currentItemContent = encodeURIComponent(gridItems[itemCountInClass].innerText);
    // console.log(currentItemContent)
    const twitterURL = `https://twitter.com/intent/tweet?text=${currentItemContent}`;
    // const linkedinURL = 'http://www.linkedin.com/shareArticle?mini=true&url=https://stackoverflow.com/questions/10713542/how-to-make-custom-linkedin-share-button/10737122&title=How%20to%20make%20custom%20linkedin%20share%20button&summary=some%20summary%20if%20you%20want&source=stackoverflow.com'
    // console.log(twitterURL)
    // const linkedinURL = `https://www.linkedin.com/shareArticle?mini=true&&url=https://stackoverflow.com/questions/10713542/how-to-make-custom-linkedin-share-button/10737122&title=How%20to%20make%20custom%20linkedin%20share%20button&summary=${currentItemContent}`
    window.open(twitterURL, '_blank');
}

function setRemainigTime() {
    const countDownDate = new Date("Oct 15, 2020 00:00:01").getTime();

    let x = setInterval(() => {

    const now = new Date().getTime();
  
    const distance = countDownDate - now;
  
    // Time calculations for days, hours, minutes and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
    // Display the result in the element with id="demo"
    document.getElementById("ävailableTime").innerText = 'Available In ' + days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
  
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("ävailableTime").innerText = "Check out our product!!";
    }
  }, 1000);
}

setRemainigTime()