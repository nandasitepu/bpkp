<?php
/*
  |--------------------------------------------------------------------------
  | // Catch All The Wild Vue (For Vue Router Refresh Not 404) \\
  |--------------------------------------------------------------------------
*/
  Route::any('/spa{all}', function () {return view('spa.index');})->where(['all' => '.*']);
  Route::any('/dashboard{all}', function () {return view('admin.dashboard');})->where(['all' => '.*']);

/*
  |--------------------------------------------------------------------------
  | // Main \\
  |--------------------------------------------------------------------------
*/
/******************************** HOME ********************************/
  Route::get('/', 'HomeController@home')->name('home');
  Route::get('search', 'HomeController@search')->name('search');
  // Admin Pages
  Route::get('dashboard', 'Admin\AdminController@index')->name('dashboard')->middleware('auth');
/*
  |--------------------------------------------------------------------------
  | // Authentication \\
  |--------------------------------------------------------------------------
*/
  Auth::routes();
  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*
  |--------------------------------------------------------------------------
  | // App \\
  |-------------------------------------------------------------------------
*/
  // SPIP
  Route::group(['prefix' => 'app/spip'], function () {
    Route::get('kab/{id}', 'Apps\SPIPController@spip_pemda')->name('spip.pemda');
    Route::get('tentang', 'Apps\SPIPController@spip_about')->name('spip.tentang');

  });
  Route::resource('app/spip','Apps\SPIPController');

  // APIP
  Route::group(['prefix' => 'app/apip'], function () {
    Route::get('lvup','Apps\APIPController@lvup')->name('apip.lvup');
    Route::get('data/{id}','Apps\APIPController@show_data')->name('apip.data');
  });

  Route::resource('app/apip', 'Apps\APIPController');

  // SIMDA
  Route::get('app/simda','Apps\SIMDAController@index')->name('app.simda');
  // SISKEUDES
  Route::get('app/siskeudes','Apps\SISKEUDESController@index')->name('app.siskeudes');
  // SIA
  Route::get('app/sia','Apps\SIAController@index')->name('app.sia');
  //FCP
  Route::get('app/fcp','Apps\FCPController@index')->name('app.fcp');

/*
  |--------------------------------------------------------------------------
  | // Data \\
  |--------------------------------------------------------------------------
*/

  Route::get('data',function () {return view('data.index');})->name('data');
// Obrik
  Route::get('data/obrik/{id}', 'Data\ObrikController@show_data')->name('obrik.data');
  Route::resource('obrik', 'Data\ObrikController');

// Posts
  Route::get('api/posts', 'PostController@getPosts');
  Route::get('posts', 'PostController@index')->name('posting.bpkp');
  Route::get('posts/create', 'PostController@create')->name('posting.new');
  Route::post('posts/store', 'PostController@store')->name('posting.store');

// Pages
  Route::get('news','Admin\PageController@news');
  //Route::get('data','Admin\PageController@data');
  Route::get('kontak','Admin\PageController@kontak')->name('kontak');
  Route::post('kontak','Admin\PageController@kontak')->name('post.kontak');
  Route::get('profil','Admin\PageController@profil')->name('profil');
  Route::get('rkt','Admin\PageController@rkt')->name('rkt');
  Route::get('disclaimer','Admin\PageController@disclaimer')->name('disclaimer');
  Route::get('sdank','Admin\PageController@sdank')->name('sdank');
  Route::get('faq','Admin\PageController@faq')->name('faq');
  //
  Route::resource('pages', 'Admin\PageController');

// Pengumuman
  Route::get('api/pengumuman', 'Admin\PengumumanController@getPengumuman');
  Route::resource('spa/pengumuman', 'Admin\PengumumanController');

// Bidang
  Route::group(['prefix' => 'bid'], function () {
    Route::get('tu' , 'Admin\PageController@tu')->name('bid.tu');
    Route::get('ipp', 'Admin\PageController@ipp')->name('bid.ipp');
    Route::get('apd', 'Admin\PageController@apd')->name('bid.apd');
    Route::get('an' , 'Admin\PageController@an')->name('bid.an');
    Route::get('inv', 'Admin\PageController@inv')->name('bid.inv');
    Route::get('p3a', 'Admin\PageController@p3a')->name('bid.p3a');
  });
  // Kabupaten
  Route::get('app/kab/mamuju', 'Admin\PageController@mamuju')->name('kab.mamuju');

/*
|--------------------------------------------------------------------------
| Pegawai
|--------------------------------------------------------------------------
*/
  // API Pegawai
  Route::get('api/pegawai', 'PegawaiController@getPegawai');
  // CRUD
  Route::get('pegawai', 'PegawaiController@index');

/****************************************************************************** ETC */
// Tugas Resource
Route::resource('tugas', 'TugasController');

// SPA
Route::get('spa', 'spaController@index');

// Testing
Route::get('cool', function () {return view('post.cool');});

Route::get('tugas/st', 'TugasController@tugas')->name('tugas');
