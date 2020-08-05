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
    .js('resources/js/header.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

    .sass('resources/sass/main/main.scss', 'public/css/main')
    .sass('resources/sass/main/mobile-main.scss', 'public/css/main')

    .sass('resources/sass/about.scss', 'public/css')

    .sass('resources/sass/docs.scss', 'public/css')

    .sass('resources/sass/contact.scss', 'public/css')

    .sass('resources/sass/dashboard.scss', 'public/css')

    .sass('resources/sass/footer.scss', 'public/css')
    .sass('resources/sass/footer-white.scss', 'public/css')

    .sass('resources/sass/poweredby.scss', 'public/css')
    
    .sass('resources/sass/pricing.scss', 'public/css')

    .sass('resources/sass/stores.scss', 'public/css')

    .sass('resources/sass/jobs.scss', 'public/css')

    .sass('resources/sass/blog.scss', 'public/css')
    .sass('resources/sass/blog-create.scss', 'public/css')
    .sass('resources/sass/blog-show.scss', 'public/css')
    .sass('resources/sass/blog-edit.scss', 'public/css');
    
    
