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