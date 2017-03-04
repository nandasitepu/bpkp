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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Main Menu
Route::get('/', function () {return view('home');});
Route::get('kontakkami', function () {return view('pages.kontak');});
Route::get('tugas/st', function () {return view('tugas.konsep');});
Route::get('cool', function () {return view('post.cool');});
Route::get('dashboard', function () {return view('admin.dashboard');});
Route::get('/test', function () {return view('test');});

// Pages
Route::get('news','PageController@news');
Route::get('data','PageController@data');
Route::get('app/spip','PageController@spip')->name('app.spip');
Route::get('app/apip','PageController@apip');
Route::get('app/simda','PageController@simda');
Route::get('app/siskeudes','PageController@siskeudes');
Route::get('app/sia','PageController@sia');
Route::get('app/fcp','PageController@fcp');

// Data
Route::get('app/spip/data', 'SpipController@index');

// Bidang
Route::get('bid/tu', 'PageController@tu')->name('bid.tu');
Route::get('bid/ipp', 'PageController@ipp')->name('bid.ipp');
Route::get('bid/apd', 'PageController@apd')->name('bid.apd');
Route::get('bid/an', 'PageController@an')->name('bid.an');
Route::get('bid/inv', 'PageController@inv')->name('bid.inv');
Route::get('bid/p3a', 'PageController@p3a')->name('bid.p3a');


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
