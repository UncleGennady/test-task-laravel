/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/add.js ***!
  \*****************************/
// "use strict";

// const button = document.querySelector("#add");
// const container = document.querySelector("#numbers");

// const createChildren = () => {
//     const childElement = document.createElement("div");
//     childElement.className = "mb-2";
//     childElement.innerHTML = `
//         <label for="number" class="form-label"></label>
//         <input type="text" name='number' class="form-control" id="number" placeholder="(726) 450-8938">
//         <button type="button">Remove</button>
//     `;
//     const removeButton = childElement.querySelector("button");
//     removeButton.onclick = ()=>{
//         childElement.remove();
//     }

//     return childElement;
// };

// const addEvent = () => {
//     container.appendChild(createChildren());
// };

// button.onclick = addEvent;



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