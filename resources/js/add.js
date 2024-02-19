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

"use strict";

const button = document.querySelector("#add");
const container = document.querySelector("#numbers");

const createChild = () => {
    const child = document.createElement("div");
    child.classList.add("mb-2");
    child.innerHTML = `
    <label for="number" class="form-label"></label>
    <input type="number" name="numbers[]" class="mb-2 form-control phone-number" id="number" placeholder="380987654321" required />
    <button class="btn btn-warning" type="button">Remove</button>
  `;

    child
        .querySelector("button")
        .addEventListener("click", () => child.remove());

    return child;
};

button.addEventListener("click", () => {
    container.appendChild(createChild());
});
