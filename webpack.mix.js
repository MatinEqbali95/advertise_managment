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
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/dashboard.scss', 'public/css')
    .js('resources/assets/js/dashboard.js', 'public/js');


// mix.combine([
//     'resources/assets/js/files/bootstrap.min.js',
//     'resources/assets/js/files/chart.min.js',
//     'resources/assets/js/files/father.min.js',
//     'resources/assets/js/files/jquery-3.2.1.slim.min'
// ],'public/js/dashboard.js');