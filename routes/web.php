<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('payment', 'AcceptController');

Route::group(['prefix'=> 'confirmations'], function(){

    route::get('payment/{permintaan}', 'ConfirmController@edit')->name('confirmations.edit');
    route::post('store', 'ConfirmController@store')->name('confirmations.store');

});

Route::get('/cari-report/permintaan', 'ReportController@cariReport')->name('cari-report.permintaan');

Route::resource('categories', 'CategorieController');
Route::resource('controlling', 'ControllingController');

Route::group(['prefix' => 'permintaan'], function(){

    route::get('index', 'PermintaanController@index')->name('permintaan.index');
    route::put('update-status/{permintaan}', 'PermintaanController@update')->name('permintaan.update-status');
});


Route::group(['prefix'=> 'pegawai'], function(){
    route::get('/', 'PegawaiController@index')->name('pegawai.index');
    route::get('/create', 'PegawaiController@create')->name('pegawai.create');
    route::post('/store', 'PegawaiController@store')->name('pegawai.store');
    route::get('/update-profile/{user}', 'PegawaiController@edit')->name('pegawai.edit');
    route::put('/perbarui/profile/{user}', 'PegawaiController@update')->name('pegawai.perbarui-profile.update');

});


Route::get('pengajuan', 'PengajuanController@index')->name('pengajuan.index');
Route::get('pengajuan/edit/{categories}', 'PengajuanController@edit')->name('pengajuan.edit');
Route::post('pengajuan/store', 'PengajuanController@store')->name('pengajuan.store');


Route::group(['prefix' => 'informasi'], function(){
    route::get('produks', 'Informasi\ProdukController@index')->name('informasi.produks');
    route::get('tentang-kami', 'Informasi\TentangController@index')->name('informasi.tentang-kami');
});

Route::group(['prefix' => 'filters'], function(){
    route::get('categorie/cuciac', 'FilterController@cuciac')->name('filters.categorie.cuciac');
    route::get('categorie/bongkar-pasang-ac', 'FilterController@bongkarpasangac')->name('filters.categorie.bongkar-pasang-ac');
    route::get('categorie/reparasi-ac', 'FilterController@reparasiac')->name('filters.categorie.reparasi');
});

Route::get('customers/signup', 'SignupController@create')->name('customers.signup');
Route::post('customers/store','SignupController@store')->name('customers.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
