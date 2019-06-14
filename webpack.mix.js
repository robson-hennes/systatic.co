let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

mix.js('js/app.js', 'dist/js')
   .postCss('css/app.css', 'dist/css', [
     require('tailwindcss')
   ]);