"use strict";

import { nameRegex } from "./helpers";

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        const firstName = document.getElementById("firstName").value;
        const lastName = document.getElementById("lastName").value;

        if (!nameRegex.test(firstName) || !nameRegex.test(lastName)) {
            alert("Please enter valid first and last names.");
            event.preventDefault();
            return false;
        }
    });
});
