"use strict";

import { isValidPhoneNumber, nameRegex } from "./helpers";

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        const firstName = document.getElementById("firstName").value;
        const lastName = document.getElementById("lastName").value;

        if (!nameRegex.test(firstName) || !nameRegex.test(lastName)) {
            alert("Please enter valid first and last names.");
            event.preventDefault();
            return false;
        }

        const numbers = document.querySelectorAll(".phone-number");
        for (let i = 0; i < numbers.length; i++) {
            if (!isValidPhoneNumber(numbers[i].value)) {
                alert("Please enter a valid phone number.");
                event.preventDefault();
                return false;
            }
        }
    });
});
