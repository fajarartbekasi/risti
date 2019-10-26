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

Route::resource('categories', 'CategorieController');
Route::resource('controlling', 'ControllingController');

Route::group(['prefix' => 'permintaan'], function(){

    route::get('index', 'PermintaanController@index')->name('permintaan.index');
});

Route::resource('payment', 'AcceptController');


Route::get('pengajuan', 'PengajuanController@index')->name('pengajuan.index');
Route::get('pengajuan/edit/{categories}', 'PengajuanController@edit')->name('pengajuan.edit');
Route::post('pengajuan/store', 'PengajuanController@store')->name('pengajuan.store');

Route::put('confirmation/update/{pemintaan}', 'ConfirmationController@update')->name('confirmation.update');
Route::get('confirmation/payment/{permintaan}', 'ConfirmationController@edit')->name('confirmation.payment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
