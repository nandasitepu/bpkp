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

var directories = {
  'node_modules/bootstrap'                    : 'public/assets/bootstrap',
  'node_modules/font-awesome'                 : 'public/assets/font-awesome',
  'node_modules/jquery'                       : 'public/assets/jquery',
  'node_modules/vue'                          : 'public/assets/vue',
  'node_modules/vue-resource'                 : 'public/assets/vue-resource',
  'node_modules/toastr'                       : 'public/assets/toastr'
}


elixir(function(mix) {
   for (directory in directories){
     mix.copy(directory, directories[directory]);
   }


        mix.scripts([
          'vue/dist/vue.js',
          'vue-resource/dist/vue-resource.js',
        ],'public/js/vendor.js' );

});
