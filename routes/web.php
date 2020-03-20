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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/home', 'PagesController@index')->name('home');

Route::get('/shop', 'PagesController@shop')->name('shop');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/u/dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('/u/store', 'UserController@store')->name('store');
    Route::post('/u/store/product', 'UserController@addNewProduct')->name('createProduct');
});


Auth::routes();

