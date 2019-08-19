let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.js('src/js/app.js', 'dist/js')
   .postCss('src/css/app.css', 'dist/css', [
     require('tailwindcss')
   ]);

if (mix.inProduction()) {
    mix.purgeCss({
        folders: ['views', 'src', 'content']
    });
}