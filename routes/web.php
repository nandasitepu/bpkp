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

Route::any('/test{all}', function () {return view('test');})->where(['all' => '.*']);

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Testing
Route::get('cool', function () {return view('post.cool');});
Route::get('dashboard', 'AdminController@index')->name('dashboard')->middleware('auth');

// Main Menu
Route::get('/', 'HomeController@home')->name('home');
Route::get('kontakkami','PageController@kontak')->name('kontak');
Route::get('tugas/st', 'TugasController@tugas')->name('tugas');

// Pages
Route::resource('pages', 'PageController');
// Custom Pages
Route::get('news','PageController@news');
Route::get('data','PageController@data');
Route::get('profil','PageController@profil')->name('profil');
Route::get('disclaimer','PageController@disclaimer')->name('disclaimer');
Route::get('sdank','PageController@sdank')->name('sdank');
Route::get('faq','PageController@faq')->name('faq');

// App
//SPIP
Route::get('app/spip','AppController@spip')->name('app.spip');
Route::get('app/spip/mamuju', 'AppController@spip_mamuju')->name('spip.mamuju');
Route::get('app/spip/{obrik}', 'AppController@spip_show')->name('spip.show');


//APIP
Route::get('app/apip','AppController@apip')->name('app.apip');
Route::get('app/simda','AppController@simda')->name('app.simda');
Route::get('app/siskeudes','AppController@siskeudes')->name('app.siskeudes');
Route::get('app/sia','AppController@sia')->name('app.sia');
Route::get('app/fcp','AppController@fcp')->name('app.fcp');

// Kabupaten
Route::get('app/kab/mamuju', 'PageController@mamuju')->name('kab.mamuju');

// Bidang
Route::get('bid/tu' , 'PageController@tu')->name('bid.tu');
Route::get('bid/ipp', 'PageController@ipp')->name('bid.ipp');
Route::get('bid/apd', 'PageController@apd')->name('bid.apd');
Route::get('bid/an' , 'PageController@an')->name('bid.an');
Route::get('bid/inv', 'PageController@inv')->name('bid.inv');
Route::get('bid/p3a', 'PageController@p3a')->name('bid.p3a');

// Posts Resources
Route::get('/api/posts', 'PostController@vueIndex');
Route::get('posting', 'PostController@index')->name('posting.bpkp');
Route::get('posting/create', 'PostController@create')->name('posting.new');

// API Pegawai
Route::get('/api/pegawai', 'PegawaiController@getPegawai');
Route::get('pegawai', 'PegawaiController@index');

// Tugas Resource
Route::resource('tugas', 'TugasController');
