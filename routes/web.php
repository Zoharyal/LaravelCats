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

Route::get('/', 'SiteController@index')->name('vignette');

Route::get('/show/{id}', 'SiteController@show')->name('show');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@home')->middleware('auth')->name('adminHome');
    Route::get('vignettes', 'AdminController@index')->middleware('auth')->name('admin');
    Route::get('vignettes/create', 'AdminController@create')->middleware('auth');
    Route::post('save', 'AdminController@save')->middleware('auth')->name('post');
    Route::get('vignettes/{id}/delete', 'AdminController@delete')->middleware('auth')->name('delete');
    Route::get('vignettes/{id}/edit', 'AdminController@show')->middleware('auth')->name('showEdit');
    Route::put('vignettes/{id}/edit', 'AdminController@edit')->middleware('auth')->name('storeEdit');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
