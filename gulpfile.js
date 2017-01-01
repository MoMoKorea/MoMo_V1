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

    mix.styles(['style.css',
        'bootstrap.css',
        'bootstrap_edit.css',
        'normalize.css'], 'public/css/momo_style.css');

    mix.styles(['fonts.css'], 'public/css/momo_fonts.css');

    mix.scripts(['momo.location.vue.js'], 'public/js/momo.location.js')
    mix.scripts(['config.js'], 'public/js/momo.config.js')

    mix.version([
        'public/js/momo.location.js'
    ])
});