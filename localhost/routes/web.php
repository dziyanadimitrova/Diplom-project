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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/komnata', 'HomeController@getKomnata')->name('komnata');
Route::get('/kottedzh', 'ZagorodnayaController@getKottedzh')->name('kottedzh');
Route::get('/uchastok', 'UchastkiController@getUchastok')->name('uchastok');
Route::get('/garazh', 'KommerchController@getGarazh')->name('garazh');
Route::get('{url}','BaseController@getIndex');//всегда в конце