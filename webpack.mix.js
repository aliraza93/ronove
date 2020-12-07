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
mix.js('resources/js/system.js', 'public/js')
mix.js('resources/js/organization.js', 'public/js')
mix.js('resources/js/employee.js', 'public/js')
mix.js('resources/js/client.js', 'public/js')
mix.js('resources/js/service_user.js', 'public/js')
mix.js('resources/js/mar_sheet.js', 'public/js')
mix.js('resources/js/chat.js', 'public/js')
mix.js('resources/js/employee_details.js', 'public/js')
mix.js('resources/js/booking.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
