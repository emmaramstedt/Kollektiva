const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/header.js", "public/js")
    .js("resources/js/forms.js", "public/js")
    .js("resources/js/userPage.js", "public/js")
    .css("resources/css/userPage.css", "public/css")
    .css("resources/css/footer.css", "public/css")
    .css("resources/css/app.css", "public/css")
    .css("resources/css/header.css", "public/css")
    .css("resources/css/helpcenter.css", "public/css")
    .css("resources/css/testimonies.css", "public/css")
    .css("resources/css/stepbystep.css", "public/css")
    .css("resources/css/quote.css", "public/css")
    .css("resources/css/ctaCards.css", "public/css")
    .css("resources/css/hero.css", "public/css")
    .css("resources/css/forms.css", "public/css");
