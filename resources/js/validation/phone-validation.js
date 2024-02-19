"use strict";

import { isValidPhoneNumber } from "./helpers";

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        const number = document.querySelector(".phone-number");
        if (!isValidPhoneNumber(number.value)) {
            alert("Please enter a valid phone number.");
            event.preventDefault();
            return false;
        }
    });
});
