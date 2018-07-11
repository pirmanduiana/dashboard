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

Route::resource('/','ContentController');

Route::get('/visimisi', 'GetController@visimisi')->name('get.visimisi');
Route::get('/struktur', 'GetController@struktur')->name('get.struktur');
Route::get('/badungkab', 'GetController@badungkab')->name('get.badungkab');
Route::get('/kominfo', 'GetController@kominfo')->name('get.kominfo');
Route::get('/ppid', 'GetController@ppid')->name('get.ppid');
Route::get('/badungmap', 'GetController@badungmap')->name('get.badungmap');
