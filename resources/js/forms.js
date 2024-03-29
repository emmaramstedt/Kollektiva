const previews = document.querySelectorAll(".preview");
const tenant = document.getElementById("specifyTenant");
const skip = document.getElementById("skip");
const stepTen = document.querySelector(".stepTen");
const stepEleven = document.querySelector(".stepEleven");
const stepThirteen = document.querySelector(".stepThirteen");


previews.forEach((preview) => {
    preview.onchange = function () {
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

//check if on step 10. If on step 10 the "next" button should be disabled
function checkCurrentTabCount(){
    if (currentTab == 10) {
      document.getElementById("next").disabled = true;
    }
    else{
      document.getElementById("next").disabled = false;
    }
}

function backToHome(){

}

function showTab(n) {
    // This function will display the specified tab of the form ...
    let x = document.getElementsByClassName("tab");

    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("back").style.visibility = "hidden";
        document.getElementById("back").style.display = "none";
    } else {
        document.getElementById("back").style.visibility = "visible";
        document.getElementById("back").style.display = "block";
    }
    if (n == x.length - 1) {
        document.getElementById("next").innerHTML = "Se din annons";
        document.getElementById("next").style.width = "343px";
        document.getElementById("next").style.marginBottom = "18px";
        document.getElementById("next").style.padding = "0px";
        document.getElementById("back").innerHTML = "Stäng formulär";
        document.getElementById("back").style.width = "343px";
        document.getElementById("back").style.padding = "0px";
        document.getElementById("back").style.margin = "0px";
        document.getElementById("nextAndBack").style.flexDirection = "column-reverse";
        document.getElementById("back").onclick = function () {
            location.href = "/userPage";
        };
        document.getElementById("next").onclick = function () {
            location.href = "/adposted";
        };
    }
    else if(n == x.length - 2){
        document.getElementById("next").innerHTML = "Publicera";
    }
    else {
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
    //scroll to top
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
      //check to see view width for responsive styling
      document.getElementById("nextAndBack").style.flexDirection = "row";
      if (window.outerWidth < '500') {
        document.getElementById("next").style.width = "164px";
        document.querySelector(".buttonWrapper").style.alignSelf = "center";

      }
      else {
        document.getElementById("next").style.width = "343px";
        document.getElementById("back").style.width = "343px";
        document.querySelector(".buttonWrapper").style.alignSelf = "flex-end";

      };
      checkCurrentTabCount();
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
});
let skipped = false;
//logic for "specify tenant" button on step 10
tenant.addEventListener("click", () => {
    stepTen.style.display = "none";
    stepEleven.style.display = "block";
    currentTab = 11;
    checkCurrentTabCount();
    skipped = false;
    return skipped;
});

//logic for "skip" button on step 10
skip.addEventListener("click", () =>  {
    stepTen.style.display = "none";
    stepThirteen.style.display = "block";
    currentTab = 13;
    checkCurrentTabCount();
    skipped = true;
    document.getElementById("next").innerHTML = "Publicera";
    return skipped;
});

const back = document.getElementById("back");
back.addEventListener("click", function nextStep(n) {
    stepEleven.style.display = "none";
    var n = -1;
    // This function will figure out which tab to display
    let x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    //   if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
        //correct the count if the user chose to skip on step 10:
        if(skipped == true){
            currentTab = currentTab - 2;
        }
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    //if on first tab, style the next button accordingly
    if (currentTab == 0) {
        document.getElementById("next").style.width = "95vw";
      }
      if(currentTab == 0 && window.outerWidth >= '990'){
        document.getElementById("nextAndBack").style.flexDirection = "row-reverse";

      }
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    checkCurrentTabCount();
    // Otherwise, display the correct tab:
    showTab(currentTab);
});

