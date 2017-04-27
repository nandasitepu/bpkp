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
Route::get('kontakkami','Admin\PageController@kontak')->name('kontak');
Route::get('tugas/st', 'TugasController@tugas')->name('tugas');

// Pages
Route::resource('pages', 'PageController');
// Custom Pages
Route::get('news','Admin\PageController@news');
Route::get('data','Admin\PageController@data');
Route::get('profil','Admin\PageController@profil')->name('profil');
Route::get('disclaimer','Admin\PageController@disclaimer')->name('disclaimer');
Route::get('sdank','Admin\PageController@sdank')->name('sdank');
Route::get('faq','Admin\PageController@faq')->name('faq');

// Bidang
Route::get('bid/tu' , 'Admin\PageController@tu')->name('bid.tu');
Route::get('bid/ipp', 'Admin\PageController@ipp')->name('bid.ipp');
Route::get('bid/apd', 'Admin\PageController@apd')->name('bid.apd');
Route::get('bid/an' , 'Admin\PageController@an')->name('bid.an');
Route::get('bid/inv', 'Admin\PageController@inv')->name('bid.inv');
Route::get('bid/p3a', 'Admin\PageController@p3a')->name('bid.p3a');

// App
//SPIP
Route::get('app/spip','AppController@spip')->name('app.spip');
Route::get('app/spip/mamuju', 'AppController@spip_mamuju')->name('spip.mamuju');
Route::get('app/spip/majene', 'AppController@spip_mamuju')->name('spip.majene');
Route::get('app/spip/polman', 'AppController@spip_mamuju')->name('spip.polman');
Route::get('app/spip/mamasa', 'AppController@spip_mamuju')->name('spip.mamasa');
Route::get('app/spip/matra' , 'AppController@spip_mamuju')->name('spip.matra');
Route::get('app/spip/mateng', 'AppController@spip_mamuju')->name('spip.mateng');

Route::get('app/spip/{obrik}', 'AppController@spip_show')->name('spip.show');


//APIP
Route::get('app/apip','AppController@apip')->name('app.apip');
Route::get('app/simda','AppController@simda')->name('app.simda');
Route::get('app/siskeudes','AppController@siskeudes')->name('app.siskeudes');
Route::get('app/sia','AppController@sia')->name('app.sia');
Route::get('app/fcp','AppController@fcp')->name('app.fcp');

// Kabupaten
Route::get('app/kab/mamuju', 'PageController@mamuju')->name('kab.mamuju');

// Posts Resources
Route::get('api/posts', 'PostController@vueIndex');
Route::get('posting', 'PostController@index')->name('posting.bpkp');
Route::get('posting/create', 'PostController@create')->name('posting.new');
Route::get('posting/store', 'PostController@store')->name('posting.store');

// API Pegawai
Route::get('api/pegawai', 'PegawaiController@getPegawai');
Route::get('pegawai', 'PegawaiController@index');

// Tugas Resource
Route::resource('tugas', 'TugasController');

// SPA resource
Route::get('spa', 'spaController@index');
