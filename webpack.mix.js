const mix = require('laravel-mix');

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

mix.js('resources/bootstrap/js/bootstrap.js', 'resources/bootstrap/js').postCss('resources/bootstrap/css/bootsrap.css', 'resources/bootstrap/js', [
    require('tailwindcss'),
    require('autoprefixer'),
]);
