// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'public/js').postCss('src/app.css', 'public/css',[
    require("tailwindcss"),
  ]);

// mix.js('src/app.js', 'app/Views/js').postCss('src/app.css', 'app/Views/css',[
//   require("tailwindcss"),
// ]);