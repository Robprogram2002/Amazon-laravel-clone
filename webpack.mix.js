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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/appStyle.scss', 'public/css')
    .sass('resources/sass/registerStyle.scss', 'public/css')
    .sass('resources/sass/adminStyle.scss', 'public/css')
    .sass('resources/sass/products.scss', 'public/css')
    .sass('resources/sass/new-category.scss', 'public/css')
    .sass('resources/sass/productStyle.scss', 'public/css')
    .sass('resources/sass/comment-form.scss', 'public/css')
    .sass('resources/sass/cartStyle.scss', 'public/css')
    .sass('resources/sass/wish-form.scss', 'public/css')