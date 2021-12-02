const mix = require('laravel-mix');

mix.js(['resources/js/app.js', 'resources/js/components.js', 'resources/js/pages.js', 'resources/js/admin/scripts.js'], 'public/assets/js')
    .postCss('resources/css/app.css', 'public/assets/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);
