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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'PilihanController@index')->name('home');
Route::get('/kopi/buat', 'PilihanController@create')->name('kopi.create');
Route::post('/kopi/buat', 'PilihanController@store')->name('kopi.store');
Route::get('/kopi/edit/{id}', 'PilihanController@edit')->name('kopi.edit');
Route::post('/kopi/update/{id}', 'PilihanController@update')->name('kopi.update');
Route::get('/kopi/hapus/{id}', 'PilihanController@destroy')->name('kopi.delete');

Route::get('/kopi/pesan/{id}', 'PilihanController@store')->name('kopi.pesan');