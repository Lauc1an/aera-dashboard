const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/login.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .copyDirectory('resources/images', 'public/images');
    // .options({
    //      fileLoaderDirs: {
    //          fonts: './fonts'
    //      }
    //  });
