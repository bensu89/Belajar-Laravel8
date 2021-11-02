const mix = require('laravel-mix');

mix.scripts([
    'resources/js/jquery-3.3.1.slim.min.js',
    'resources/js/popper.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/my-script.js',
], 'public/js/my-app.js').version();

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/my-style.css',
],'public/css/my-app.css').version();
