/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/header.js ***!
  \********************************/
console.log("hai");
var searchButton = document.querySelector("searchFormButton");

searchButton.addEventListener = function () {
  var x = document.getElementById("searchcontainer");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  console.log("hai");
};
/******/ })()
;