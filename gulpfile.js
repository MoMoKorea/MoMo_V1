const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(function (mix) {

    mix.styles(['bootstrap.css',
        'bootstrap_edit.css',
        'normalize.css'], 'public/css/momo_style.css');
    mix.styles(['style.css'], 'public/css/momo_custom_style.css')
    mix.styles(['fonts.css'], 'public/css/momo_fonts.css');
    mix.styles(['about_header.css'], 'public/css/momo_about_style.css');

    mix.scripts(['momo.location.vue.js'], 'public/js/momo.location.js')
    mix.scripts(['config.js'], 'public/js/momo.config.js')
    mix.scripts([
        'jquery.min.js',
        'jquery.dropotron.min.js',
        'skel.min.js',
        'util.js',
        'main.js'
    ], 'public/js/momo.about.js')


    mix.version([
        'public/css/momo_style.css',
        'public/js/momo.location.js',
        'public/css/momo_about_style.css',
        'public/js/momo.about.js',
        'public/css/momo_custom_style.css'
    ])
});