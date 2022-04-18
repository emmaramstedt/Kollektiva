/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/userPage.js ***!
  \**********************************/
var drop = document.querySelector(".dropDownButton");
var svg = document.querySelector(".buttonSvg");
drop.addEventListener("click", function () {
  var x = document.getElementById("hidden");

  if (x.style.display === "none") {
    x.style.display = "block";
    svg.style.transform = "scaleY(-1)";
  } else {
    x.style.display = "none";
    svg.style.transform = "scaleY(1)";
  }
});
/******/ })()
;