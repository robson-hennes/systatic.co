let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

mix.js('js/app.js', 'dist/js')
   .sass('sass/app.scss', 'dist/css')
     .options({
       processCssUrls: false,
       postCss: [ tailwindcss('./tailwind.js') ],
     });