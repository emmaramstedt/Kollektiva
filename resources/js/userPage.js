const drop = document.querySelector(".dropDownButton");
const svg = document.querySelector(".buttonSvg");
drop.addEventListener("click", () => {
    var x = document.getElementById("hidden");
    if (x.style.display === "none") {
        x.style.display = "block";
        svg.style.transform = "scaleY(-1)";
    } else {
        x.style.display = "none";
        svg.style.transform = "scaleY(1)";
    }
});
