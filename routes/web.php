<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

// Main Menu
Route::get('/', function () {return view('page.home');});
Route::get('kontakkami', function () {return view('page.kontak');});
Route::get('tugas/st', function () {return view('tugas.konsep');});
Route::get('cool', function () {return view('post.cool');});
Route::get('dashboard', function () {return view('page.dashboard');});
Route::get('/test', function () {return view('test');});

// Pages
Route::get('news','PageController@news');

Route::get('app/spip','PageController@spip');
Route::get('apip','PageController@apip');
Route::get('simda','PageController@simda');
Route::get('siskeudes','PageController@siskeudes');
Route::get('sia','PageController@sia');
Route::get('fcp','PageController@fcp');




// Posts Resources
Route::get('/api/posts', 'PostController@vueIndex');
Route::resource('posts', 'PostController');

// Pegawai Resource
Route::resource('pegawai', 'PegawaiController');
  // The Vue CRUD
  Route::get('/api/pegawai', function(){
    return App\Pegawai::all();
  });
  Route::post('/api/pegawai', function(){
    return App\Pegawai::create(Request::all() );
  });

// Tugas Resource
Route::resource('tugas', 'TugasController');
