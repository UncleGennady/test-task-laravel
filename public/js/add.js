/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/add.js ***!
  \*****************************/


var button = document.querySelector("#add");
var container = document.querySelector("#numbers");
var createChild = function createChild() {
  var child = document.createElement("div");
  child.classList.add("mb-2");
  child.innerHTML = "\n    <label for=\"number\" class=\"form-label\"></label>\n    <input type=\"number\" name=\"numbers[]\" class=\"mb-2 form-control phone-number\" id=\"number\" placeholder=\"380987654321\" required />\n    <button class=\"btn btn-warning\" type=\"button\">Remove</button>\n  ";
  child.querySelector("button").addEventListener("click", function () {
    return child.remove();
  });
  return child;
};
button.addEventListener("click", function () {
  container.appendChild(createChild());
});
/******/ })()
;