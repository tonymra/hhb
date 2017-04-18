const { mix } = require('laravel-mix');

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


mix.styles([
    'resources/assets/css/libs/bootstrap.css',
    'resources/assets/css/libs/animations.css',
    'resources/assets/css/libs/main.css',
    'resources/assets/css/libs/datepicker.css'


], 'public/css/libs.css');

mix.scripts([
    'resources/assets/js/libs/vendor/respond.min.js',
    'resources/assets/js/libs/vendor/placeholders.min.js',
    'resources/assets/js/libs/vendor/jquery-1.10.2.min.js',
    'resources/assets/js/libs/vendor/bootstrap.min.js',
    'resources/assets/js/libs/vendor/hoverIntent.js',
    'resources/assets/js/libs/vendor/superfish.js',
    'resources/assets/js/libs/vendor/jquery.actual.min.js',
    'resources/assets/js/libs/vendor/jquery.elastislide.js',
    'resources/assets/js/libs/vendor/jquery.flexslider-min.js',
    'resources/assets/js/libs/vendor/jquery.prettyPhoto.js',
    'resources/assets/js/libs/vendor/jquery.easing.1.3.js',
    'resources/assets/js/libs/vendor/jquery.ui.totop.js',
    'resources/assets/js/libs/vendor/jquery.isotope.min.js',
    'resources/assets/js/libs/vendor/jquery.easypiechart.min.js',
    'resources/assets/js/libs/vendor/jflickrfeed.min.js',
    'resources/assets/js/libs/vendor/jquery.sticky.js',
    'resources/assets/js/libs/vendor/jquery.scrollTo-min.js',
    'resources/assets/js/libs/vendor/jquery.localscroll-min.js',
    'resources/assets/js/libs/twitter/jquery.tweet.min.js',
    'resources/assets/js/libs/plugins.js',
    'resources/assets/js/libs/main.js',
    'resources/assets/js/libs/bootstrap-datepicker.js'


], 'public/js/libs.js');


