/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
var header = document.getElementById('header');
var navIcon = document.getElementById('mobile-nav-button');
navIcon.addEventListener("click", showNavMenu);
showNavClass = 'show-nav';

function showNavMenu() {
  //   alert("I'm working");
  if (!header.classList.contains(showNavClass)) {
    header.classList.add(showNavClass);
    navIcon.innerHTML = 'X';
    navIcon.style.fontSize = '25px';
  } else {
    header.classList.remove(showNavClass);
    navIcon.innerHTML = '| | |';
    navIcon.style.fontSize = 'initial';
  }
}
/******/ })()
;