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
  //
  Route::any('tugas', function () {return view('tugas.index');});
  Route::any('pengumuman', function () {return view('home');});
  Route::any('pegawai', function () {return view('pegawai.index');});
});
  //Route::any('/app/spip/{all}', function () {return view('dashboard');})->where(['all' => '.*']);
  Route::any('admin/dashboard/tugas', function () {return view('admin.dashboard');})->where(['all' => '.*']);
  Route::any('admin/dashboard/tugas/{all}', function () {return view('admin.dashboard');})->where(['all' => '.*']);
  
  //Home
  //Route::any('pengumuman/{all}', function () {return view('home');})->where(['all' => '.*']);
  //Route::any('/pegawai/{all}', function () {return view('home');})->where(['all' => '.*']);
  Route::any('penugasan/{all}', function () {return view('home');})->where(['all' => '.*']);
  Route::any('perpustakaan/{all}', function () {return view('home');})->where(['all' => '.*']);
  Route::any('obrik/grid/{all}', function () {return view('obrik.index');})->where(['all' => '.*']);
  // Route::any('/tugas/{all}', function () {return view('tugas.index');})->where(['all' => '.*']);
  Route::any('data/{all}', function () {return view('data.index');})->where(['all' => '.*']);
/*
  |--------------------------------------------------------------------------
  | // Main \\
  |--------------------------------------------------------------------------
*/
/******************************** HOME ********************************/
  Route::get('/', 'HomeController@home')->name('home');
  Route::get('search', 'HomeController@search')->name('search');
  // Users Controller
  Route::get('dashboard', 'UserController@dashboard')->name('user.dashboard')->middleware('auth');
  Route::get('users/{nama}', 'UserController@profil')->name('user.profil');
  
  Route::get('users/new', 'UserController@create')->name('user.new')->middleware('auth:admin');
  Route::get('users', 'UserController@index')->name('user.create')->middleware('auth:admin');
  
  
  // Guest Pages
  Route::get('spa', 'HomeController@index')->name('spa');
/*
  |--------------------------------------------------------------------------
  | // Authentication \\
  |--------------------------------------------------------------------------
*/
  // Users
  Auth::routes();
  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('all.logout');
  Route::get('/user/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('user.logout');
  // Admins
  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');  
  });

  
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
  Route::resource('pengumuman', 'Admin\PengumumanController');

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
Route::get('pegawai/list', 'Data\PegawaiController@list');
Route::resource('pegawai', 'Data\PegawaiController');
  

/*******************************************************************************/
/**** Surat Tugas ****/
/*******************************************************************************/

// Cetak
Route::get('tugas/st/{id}/cetak', 'Data\Penugasan\STController@cetak')->name('st.cetak');
// Filter
Route::get('tugas/st/f','Data\Penugasan\STController@filter')->name('st.filter');
// Export Import
Route::get('tugas/st/export',  'Data\Penugasan\STController@exportExcel')->name('st.export.excel');
Route::post('tugas/st/import', 'Data\Penugasan\STController@importExcel')->name('st.import.excel');

// Index
Route::get('tugas/st', 'Data\Penugasan\STController@index')->name('st.index')->middleware('auth');
// New
Route::get('tugas/st/new', 'Data\Penugasan\STController@create')->name('st.new')->middleware('auth');
// Store
Route::post('tugas/st', 'Data\Penugasan\STController@store')->name('st.store');
// Edit
Route::get('tugas/st/{id}/edit', 'Data\Penugasan\STController@edit')->name('st.edit')->middleware('auth');
// Update
Route::put('tugas/st/{id}', 'Data\Penugasan\STController@update')->name('st.update');

// Show
Route::get('tugas/st/{id}', 'Data\Penugasan\STController@show')->name('st.show')->middleware('auth');



/****************************************************************************** ETC */
// Kendali Mutu Resource
Route::get('tugas/km','Data\Penugasan\KMController@index')->name('km.index');
Route::get('tugas/km/new', 'Data\Penugasan\KMController@create')->name('km.new');




// Tugas Resource
// Route::get('tugas/f', 'Data\TugasController@filter')->name('tugas.filter');
// Route::get('tugas/{id}/cetak', 'Data\TugasController@cetak')->name('cetak.tugas');
Route::resource('tugas', 'Data\TugasController');























// Testing
Route::get('cool', function () {return view('post.cool');});
Route::get('test','Data\PegawaiController@daltu');
// PKPD - Pengawasan Keuangan dan Pembangunan Desa
Route::resource('app/pkpd', 'Apps\PKPDController');
Route::resource('app/sidupak', 'Apps\PAKController');

/*
|--------------------------------------------------------------------------
| Perpustakaan
|--------------------------------------------------------------------------
*/

Route::get('perpustakaan', function() {return view('perpustakaan.index');});



/*
|--------------------------------------------------------------------------
| Export Import
|--------------------------------------------------------------------------
*/

Route::get('export/pegawai', 'Data\PegawaiController@exportExcel')->name('pegawai.excel');
Route::post('import/pegawai', 'Data\PegawaiController@importExcel')->name('pegawai.import');
Route::get('export/tugas', 'Data\TugasController@exportExcel')->name('tugas.excel');
Route::post('import/tugas', 'Data\TugasController@importExcel')->name('tugas.import');