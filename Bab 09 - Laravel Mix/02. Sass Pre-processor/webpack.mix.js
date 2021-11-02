const mix = require('laravel-mix');

mix.scripts([
    'resources/js/my-script.js',
    'resources/js/my-script-console.js',
], 'public/js/my-app.js');

mix.sass('resources/sass/my-style-h1.scss','public/css/my-app.css');
