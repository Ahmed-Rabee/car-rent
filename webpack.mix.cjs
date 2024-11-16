const mix = require('laravel-mix');

mix.sass('resources/assets/scss/custom.scss', 'public/assets/css/custom.css').version();
