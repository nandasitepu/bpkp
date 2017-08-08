<?php

/*
  |--------------------------------------------------------------------------
  | //TESTING \\
  |--------------------------------------------------------------------------
*/
  Route::get('/scrape', function() {
    $crawler = Goutte::request('GET', 'http://duckduckgo.com/html/?q=Laravel');
    $crawler->filter('.result__title .result__a')->each(function ($node) {
      dump($node->text());
    });
    return view('webScrap');
  });
  /* Social Counter */
  Route::get('counter', function() {
    return view('_c.social2');
  });
/*
  |--------------------------------------------------------------------------
  | // Catch All The Wild Vue (For Vue Router Refresh Not 404) \\
  |--------------------------------------------------------------------------
*/
Route::prefix('dashboard')->group(function () {
  Route::any('tugas', function () {return view('users.dashboard');}); // Matches The "/spa/*" URL
  Route::any('pengumuman', function () {return view('users.dashboard');});
  Route::any('obrik', function () {return view('users.dashboard');});
  Route::any('berita', function () {return view('users.dashboard');});
  Route::any('pegawai', function () {return view('users.dashboard');});
});

Route::prefix('spa')->group(function () {
  Route::any('spip', function () {return view('dashboard');}); // Matches The "/spa/*" URL
  Route::any('apip', function () {return view('dashboard');});
  Route::any('fcp', function () {return view('dashboard');});
  Route::any('simda', function () {return view('dashboard');});
  Route::any('sia', function () {return view('dashboard');});
  Route::any('siskeudes', function () {return view('dashboard');});
});
  //Route::any('/app/spip/{all}', function () {return view('dashboard');})->where(['all' => '.*']);
  Route::any('admin/dashboard/{all}', function () {return view('admin.dashboard');})->where(['all' => '.*']);
  //Home
  Route::any('/pengumuman/{all}', function () {return view('home');})->where(['all' => '.*']);
  Route::any('/pegawai/{all}', function () {return view('home');})->where(['all' => '.*']);
  Route::any('/penugasan/{all}', function () {return view('home');})->where(['all' => '.*']);
  Route::any('/perpustakaan/{all}', function () {return view('home');})->where(['all' => '.*']);
  Route::any('/obrik/grid/{all}', function () {return view('obrik.index');})->where(['all' => '.*']);
  Route::any('/tugas/{all}', function () {return view('tugas.index');})->where(['all' => '.*']);
  Route::any('/data/{all}', function () {return view('data.index');})->where(['all' => '.*']);
/*
  |--------------------------------------------------------------------------
  | // Main \\
  |--------------------------------------------------------------------------
*/
/******************************** HOME ********************************/
  Route::get('/', 'HomeController@home')->name('home');
  Route::get('search', 'HomeController@search')->name('search');
  // Admin Pages
  Route::get('admin/dashboard', 'Admin\AdminController@index')->name('admin.dashboard')->middleware('auth');
  // User/Pegawai Pages
  Route::get('dashboard', 'UserController@index')->name('user.dashboard')->middleware('auth');
  // Guest Pages
  Route::get('spa', 'HomeController@index')->name('spa');
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

   // Apps Index
  Route::get('app', function() {
    return view('app.index');
  });

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

  Route::get('berita', 'Admin\PostController@index')->name('posting.bpkp');
  Route::get('berita/new', 'Admin\PostController@create')->name('posting.new');
  Route::get('berita/{id}', 'Admin\PostController@show')->name('posting.show');
  Route::get('berita/{id}/edit', 'Admin\PostController@edit')->name('posting.edit');
  Route::post('posts', 'Admin\PostController@store')->name('posting.store');
  Route::post('posts', 'Admin\PostController@update')->name('posting.update');


// Pages
  Route::get('news','Admin\PageController@news');
  //Route::get('data','Admin\PageController@data');
  Route::get('kontak','Admin\PageController@kontak')->name('kontak');
  Route::post('kontak','Admin\PageController@getKontak')->name('post.kontak');
  Route::get('profil','Admin\PageController@profil')->name('profil');
  Route::get('rkt','Admin\PageController@rkt')->name('rkt');
  Route::get('disclaimer','Admin\PageController@disclaimer')->name('disclaimer');
  Route::get('sdank','Admin\PageController@sdank')->name('sdank');
  Route::get('faq','Admin\PageController@faq')->name('faq');
  //
  Route::resource('pages', 'Admin\PageController');

// Pengumuman

  Route::resource('spa/pengumuman', 'Admin\PengumumanController');

// Bidang
  Route::group(['prefix' => 'bid'], function () {
    Route::get('/' , 'Admin\PageController@bid')->name('bid.index');
    Route::get('tu' , 'Admin\PageController@tu')->name('bid.tu');
    Route::get('ipp', 'Admin\PageController@ipp')->name('bid.ipp');
    Route::get('apd', 'Admin\PageController@apd')->name('bid.apd');
    Route::get('an' , 'Admin\PageController@an')->name('bid.an');
    Route::get('inv', 'Admin\PageController@inv')->name('bid.inv');
    Route::get('p3a', 'Admin\PageController@p3a')->name('bid.p3a');
  });

/*
|--------------------------------------------------------------------------
| Pegawai
|--------------------------------------------------------------------------
*/

  // CRUD
  Route::get('pegawai', 'Data\PegawaiController@index');

/****************************************************************************** ETC */
// Tugas Resource
Route::get('tugas/st', 'Data\TugasController@tugas')->name('tugas');

Route::resource('tugas', 'Data\TugasController');



// Testing
Route::get('cool', function () {return view('post.cool');});

// PKPD - Pengawasan Keuangan dan Pembangunan Desa
Route::resource('app/pkpd', 'Apps\PKPDController');
Route::resource('app/sidupak', 'Apps\PAKController');