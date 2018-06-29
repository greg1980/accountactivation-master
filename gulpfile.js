const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss');
       .webpack('app.js');

       .styles([

           'blogs-post.css',
           'style.css',
           'bootstrap.css',
           'font-awesome.min.css',
           'sb-admin-2.css',
           'app.css'


       ] , './public/css/lib.css')



       .scripts([       

            
           'jquery.js',
           'metisMenu.css',
           'bootstrap.js',
           'sb-admin-2.css',
           'scripts.js',
           'app.js'

       ] , './public/js/lib.js' )
});
