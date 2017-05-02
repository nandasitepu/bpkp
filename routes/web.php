<?php


/******************************** Main Menu ********************************/
  Route::get('/', 'HomeController@home')->name('home');

/*
  |--------------------------------------------------------------------------
  | // Catch All The Wild Vue (For Vue Router Refresh Not 404) \\
  |--------------------------------------------------------------------------
*/
  Route::any('/spa{all}', function () {return view('spa.index');})->where(['all' => '.*']);
  Route::any('/dashboard{all}', function () {return view('admin.dashboard');})->where(['all' => '.*']);
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
  | // Obrik \\
  |--------------------------------------------------------------------------
*/


/*
  |--------------------------------------------------------------------------
  | // App \\
  |--------------------------------------------------------------------------
*/
  // SPIP
  Route::get('app/spip','AppController@spip')->name('app.spip');
  Route::get('app/spip/prov'  , 'AppController@spip_prov')  ->name('spip.prov');
  Route::get('app/spip/mamuju', 'AppController@spip_mamuju')->name('spip.mamuju');
  Route::get('app/spip/majene', 'AppController@spip_majene')->name('spip.majene');
  Route::get('app/spip/polman', 'AppController@spip_polman')->name('spip.polman');
  Route::get('app/spip/mamasa', 'AppController@spip_mamasa')->name('spip.mamasa');
  Route::get('app/spip/matra' , 'AppController@spip_matra') ->name('spip.matra');
  Route::get('app/spip/mateng', 'AppController@spip_mateng')->name('spip.mateng');

  Route::get('app/spip/{obrik}', 'AppController@spip_show')->name('spip.show');

  //APP
    Route::get('app/apip','AppController@apip')->name('app.apip');
    Route::get('app/simda','AppController@simda')->name('app.simda');
    Route::get('app/siskeudes','AppController@siskeudes')->name('app.siskeudes');
    Route::get('app/sia','AppController@sia')->name('app.sia');
    Route::get('app/fcp','AppController@fcp')->name('app.fcp');

/*
  |--------------------------------------------------------------------------
  | // Posts \\
  |--------------------------------------------------------------------------
*/
  Route::get('api/posts', 'PostController@vueIndex');
  Route::get('posts', 'PostController@index')->name('posting.bpkp');
  Route::get('posts/create', 'PostController@create')->name('posting.new');
  Route::get('posts/store', 'PostController@store')->name('posting.store');

/*
  |--------------------------------------------------------------------------
  | // Pages \\
  |--------------------------------------------------------------------------
*/
  Route::resource('pages', 'Admin\PageController');
  // Custom Pages
  Route::get('news','Admin\PageController@news');
  Route::get('data','Admin\PageController@data');
  Route::get('kontakkami','Admin\PageController@kontak')->name('kontak');
  Route::get('profil','Admin\PageController@profil')->name('profil');
  Route::get('disclaimer','Admin\PageController@disclaimer')->name('disclaimer');
  Route::get('sdank','Admin\PageController@sdank')->name('sdank');
  Route::get('faq','Admin\PageController@faq')->name('faq');
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

// SPA resource
Route::get('spa', 'spaController@index');

// Testing
Route::get('cool', function () {return view('post.cool');});

Route::get('tugas/st', 'TugasController@tugas')->name('tugas');
