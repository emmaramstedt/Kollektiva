// Display and hide search "form"

const searchButton = document.querySelector(".searchButton");

searchButton.addEventListener("click", (e) => {
    let x = document.querySelector(".searchContainer");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
});
