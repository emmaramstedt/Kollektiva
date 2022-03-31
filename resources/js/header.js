console.log("hai");

const searchButton = document.querySelector("searchFormButton");

searchButton.addEventListener = () => {
    let x = document.getElementById("searchcontainer");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    console.log("hai");
};
