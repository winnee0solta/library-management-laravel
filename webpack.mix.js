const mix = require('laravel-mix');

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

mix.js('resources/js/dashboard/app.js', 'public/js/dashboard')
mix.js('resources/js/site/app.js', 'public/js/site')
    .sass('resources/sass/dashboard/app.scss', 'public/css/dashboard')
    .sass('resources/sass/site/app.scss', 'public/css/site');

