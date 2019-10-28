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
Route::get('/','formController@show')->name('data.show');

Route::post('/','formController@storedata')->name('data.store');
Route::get('/task/{id}/edit','formController@edit')->name('data.edit.show');
Route::post('/task/{id}/edit','formController@update')->name('data.update');
Route::get('/task/{id}/delete','formController@delete')->name('data.delete');
