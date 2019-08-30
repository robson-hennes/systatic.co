let mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('src/js/app.js', 'dist/js')
   .postCss('src/css/app.css', 'dist/css', [
     require('tailwindcss'),
     require('postcss-nested')
   ])
   .browserSync({
   		proxy: 'systatic-site.test',
   		files: [
   			'./content/*/*.md',
   			'./src/js/*.js',
   			'./src/css/*.css',
   			'./views/*.blade.php',
   			'./views/*/*.blade.php'
   		]
   });

if (mix.inProduction()) {
    mix.purgeCss({
        folders: ['content', 'src', 'views'],
        whitelist: ['blockquote']
    });
}