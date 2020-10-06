function handleTwitterIconClick (itemCountInClass) {
    const gridItems = document.getElementsByClassName('section-why__why');
    console.log(gridItems);
    const currentItemContent = encodeURIComponent(gridItems[itemCountInClass].innerText);
    console.log(currentItemContent)
    const twitterURL = `https://twitter.com/intent/tweet?text=${currentItemContent}`;
    console.log(twitterURL)
    window.open(twitterURL, '_blank');
}