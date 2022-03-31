/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/header.js ***!
  \********************************/
// Display and hide search "form"
var searchButton = document.querySelector(".searchButton");
searchButton.addEventListener("click", function (e) {
  var x = document.querySelector(".searchContainer");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
});
/******/ })()
;