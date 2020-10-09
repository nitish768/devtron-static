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