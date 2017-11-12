<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('obrik', 'Data\ObrikController@getObrik');
Route::get('posts', 'Admin\PostController@getPosts');
Route::get('pengumuman', 'Admin\PengumumanController@getPengumuman');

Route::get('pegawai', 'Data\PegawaiController@getPegawai');
Route::get('tugas', 'Data\TugasController@indexTugas');
Route::get('tugas/show', 'Data\TugasController@showTugas');
Route::get('spip', 'Apps\SPIPController@getSPIP');
Route::get('apip', 'Apps\APIPController@getAPIP');

// Data Table
Route::get('pegawai/table', 'Data\PegawaiController@dataTablePegawai')->name('table.pegawai');
Route::get('tugas/table', 'Data\TugasController@dataTableTugas')->name('table.tugas');
Route::get('tugas/st/table', 'Data\Penugasan\STController@DataTable_ST')->name('datatable.st');
Route::get('tugas/km/table', 'Data\Penugasan\KMController@DataTable_KM')->name('datatable.km');