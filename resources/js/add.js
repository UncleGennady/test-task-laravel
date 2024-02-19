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
