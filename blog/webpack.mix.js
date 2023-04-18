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

mix.js('resources/js/nav.js', 'public/js/app.js')
mix.styles(['resources/css/main.css', 'resources/css/home.css', 'resources/css/account.css', 'resources/css/selection.css'], 'public/css/app.css')
mix.copyDirectory('resources/images', 'public/images')