// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'public/assets/js').postCss('src/app.css', 'public/assets/css', [require("tailwindcss")]);