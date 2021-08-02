<?php

// dashboard


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@store')->name('hubungikami');

Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::get('/pesan','HomeController@pesan')->name('pesan');
// ------------------------------------------------------------------------------------------
// user
// ------------------------------------------------------------------------------------------

Route::get('/user', 'UserController@index')->name('user');
// ------------------------------------------------------------------------------------------
// pasien
// ------------------------------------------------------------------------------------------
Route::get('/pasien', 'PasienController@index')->name('pasien');
Route::get('/pasien/tambah-pasien', 'PasienController@create')->name('pasien.create');
Route::post('/pasien/tambah-pasien', 'PasienController@store');
Route::get('/pasien/importpasien', 'PasienController@upload')->name('pasien.import');
Route::post('/pasien/importpasien', 'PasienController@importexcel');
Route::post('/pasien/hapus/{pasien}', 'PasienController@destroy')->name('pasien.delete');
Route::get('/pasien/{pasien}/edit', 'PasienController@edit')->name('pasien.edit');
Route::post('/pasien/{pasien}/edit', 'PasienController@update');
Route::get('/pasien/{pasien}/rekammedis', 'PasienController@show')->name('pasien.show');


// ------------------------------------------------------------------------------------------
// Dokter
// ------------------------------------------------------------------------------------------
Route::get('/dokter', 'DokterController@index')->name('dokter');

Route::get('/dokter/tambah-dokter', 'DokterController@create')->name('dokter.create');
Route::post('/dokter/tambah-dokter', 'DokterController@store');

Route::post('/dokter/dokter-delete/{dokter}', 'DokterController@destroy')->name('dokter.delete');

Route::get('/dokter/edit-dokter/{dokter}', 'DokterController@edit')->name('dokter.edit');
Route::post('/dokter/edit-dokter/{dokter}', 'DokterController@update');


// ------------------------------------------------------------------------------------------
// Poli
// ------------------------------------------------------------------------------------------
Route::get('/poliklinik', 'PoliklinikController@index')->name('poliklinik');

Route::get('/poliklinik/tambah-poliklinik', 'PoliklinikController@create')->name('poliklinik.create');
Route::post('/poliklinik/tambah-poliklinik', 'PoliklinikController@store');

Route::post('/poliklinik/poliklinik-delete/{poliklinik}', 'PoliklinikController@destroy')->name('poliklinik.delete');

Route::get('/poliklinik/edit-poliklinik/{poliklinik}', 'PoliklinikController@edit')->name('poliklinik.edit');
Route::post('/poliklinik/edit-poliklinik/{poliklinik}', 'PoliklinikController@update');


// ------------------------------------------------------------------------------------------
// obat
// ------------------------------------------------------------------------------------------
Route::get('/obat', 'ObatController@index')->name('obat');

Route::get('/obat/tambah-obat', 'ObatController@create')->name('obat.create');
Route::post('/obat/tambah-obat', 'ObatController@store');

Route::post('/obat/obat-delete/{obat}', 'ObatController@destroy')->name('obat.delete');

Route::get('/obat/edit-obat/{obat}', 'ObatController@edit')->name('obat.edit');
Route::post('/obat/edit-obat/{obat}', 'ObatController@update');


// ------------------------------------------------------------------------------------------
// RekamMedis
// ------------------------------------------------------------------------------------------
Route::get('/rekammedis', 'RekammedisController@index')->name('rekammedis');

Route::get('/rekammedis/tambah-rekammedis', 'RekammedisController@create')->name('rekammedis.create');
Route::post('/rekammedis/tambah-rekammedis', 'RekammedisController@store');

Route::post('/rekammedis/rekammedis-delete/{rekammedis}', 'RekammedisController@destroy')->name('rekammedis.delete');
