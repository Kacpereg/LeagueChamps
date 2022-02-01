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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .postCss('resources/css/adminlte.min.css', 'public/css', [
        //
    ])
    .postCss('resources/css/animate.css', 'public/css', [
        //
    ])
    .postCss('resources/css/icofont.min.css', 'public/css', [
        //
    ])
    .postCss('resources/css/magnific-popup.css', 'public/css', [
        //
    ])
    .postCss('resources/css/nice-select.css', 'public/css', [
        //
    ])
    .postCss('resources/css/slick.css', 'public/css', [
        //
    ])
    .postCss('resources/css/style.css', 'public/css', [
        //
    ])
    .postCss('resources/css/vendor/bootstrap.min.css', 'public/css', [
        //
    ])
    .postCss('resources/css/custom.css', 'public/css', [
        //
    ]);

mix.scripts('resources/js/vendor/modernizr-3.7.1.min.js', 'public/js/vendor/modernizr-3.7.1.min.js');
mix.scripts('resources/js/vendor/jquery-3.6.0.min.js', 'public/js/vendor/jquery-3.6.0.min.js');
mix.scripts('resources/js/vendor/jquery-migrate-3.3.2.min.js', 'public/js/vendor/jquery-migrate-3.3.2.min.js');
mix.scripts('resources/js/vendor/popper.js', 'public/js/vendor/popper.js');
mix.scripts('resources/js/vendor/bootstrap.min.js', 'public/js/vendor/bootstrap.min.js');
mix.scripts('resources/js/slick.min.js', 'public/js/slick.min.js');
mix.scripts('resources/js/wow.min.js', 'public/js/wow.min.js');
mix.scripts('resources/js/jquery.nice-select.js', 'public/js/jquery.nice-select.js');
mix.scripts('resources/js/jquery.magnific-popup.min.js', 'public/js/jquery.magnific-popup.min.js');
mix.scripts('resources/js/jquery.counterup.min.js', 'public/js/jquery.counterup.min.js');
mix.scripts('resources/js/jquery-waypoints.js', 'public/js/jquery-waypoints.js');
mix.scripts('resources/js/main.js', 'public/js/main.js');

mix.copyDirectory('resources/img', 'public/img');
