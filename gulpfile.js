var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

        .styles([
            'bootstrap.css',
            'custom.css',
            'font-awesome.css',
            'linecons.css',
            'xenon-components.css',
            'xenon-core.css',
            'xenon-forms.css',
            'xenon-skins.css'
        ], './public/css/libs.css')


        .scripts([
            'bootstrap.min.js',
            'joinable.js',
            // 'jquery-1.11.1.min.js',
            'resizeable.js',
            'TweenMax.min.js',
            'xenon-api.js',
            'xenon-custom.js',
            'xenon-toggles.js'
        ], 'public/js/libs.js')
});
