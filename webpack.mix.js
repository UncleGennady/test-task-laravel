let mix = require("laravel-mix");

mix.js("resources/js/app.js", "js")
    .sass("resources/sass/app.scss", "css")
    .js("resources/js/add.js", "js")
    .js("resources/js/validation/validation.js", "js")
    .js("resources/js/validation/name-validation.js", "js")
    .js("resources/js/validation/phone-validation.js", "js");
