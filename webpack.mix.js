let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');





// mix.scripts([

//     'resources/assets/store/js/jquery-1.8.3.min.js',
//     'resources/assets/store/js/jquery-ui.min.js',
    


    
// ], 'public/js/store.js');
//
// mix.styles([
//     'resources/assets/store/css/components.css',
// 'resources/assets/store/css/responsee.css ',
// 'resources/assets/store/owl-carousel/owl.carousel.css',
// 'resources/assets/store/owl-carousel/owl.theme.css',
// 'resources/assets/store/css/template-style.css',
//
//
//     'resources/assets/store/css/icons.cs',
//
//
//
// ], 'public/css/store.css');


