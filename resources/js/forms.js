const previews = document.querySelectorAll(".preview");

if (window.location.href === 'http://127.0.0.1:8000/hyrut') {
    document.querySelector('header').style.display = "none";
    document.querySelector('.footerWrapper').style.display = "none";
}


previews.forEach((preview) => {
    preview.onchange = function (e) {
        preview.src = URL.createObjectURL(window.event.target.files[0]);
        preview
            .closest("div")
            .querySelector(
                ".imageSrc"
            ).innerHTML = `<img src="${preview.src}">`;
        // preview.closest("div").querySelector(".description").style.display =
        //     "block";
    };
});

let currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form ...
    let x = document.getElementsByClassName("tab");
    // .buttonWrapper {
    //     display: flex;
    //     justify-content: center;
    //     align-items: flex-end;
    //     align-self: flex-end;
    //     position: absolute;
    //     right: calc(50% - 82px);
    //     bottom:20px;
    // }

    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("back").style.display = "none";
    } else {
        document.getElementById("back").style.display = "inline";
    }
    if (n == x.length - 1) {
        document.getElementById("next").innerHTML = "Skicka in";
    } else {
        document.getElementById("next").innerHTML = "Nästa";
    }
}

const next = document.getElementById("next");
next.addEventListener("click", function nextStep(n) {
    var n = 1;
    // This function will figure out which tab to display
    let x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    //   if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    window.scrollTo({
        top: 100,
        left: 100,
        behavior: 'smooth'
      });
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
});

const back = document.getElementById("back");
back.addEventListener("click", function nextStep(n) {
    var n = -1;
    // This function will figure out which tab to display
    let x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    //   if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
});
