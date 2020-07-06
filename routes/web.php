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
    return view('homepage');
});

Route::prefix('customer')->group(function(){
    Route::get('/', 'CustomerController@index')->name('customer.index');
    Route::get('/create', 'CustomerController@create')->name('customer.create');
    Route::post('/store', 'CustomerController@store')->name('customer.store');
    Route::get('/view/{id}', 'CustomerController@view')->name('customer.view');
    Route::get('/edit/{id}', 'CustomerController@edit')->name('customer.edit');
    Route::post('/update/{id}', 'CustomerController@update')->name('customer.update');
    Route::get('/delete/{id}', 'CustomerController@delete')->name('customer.delete');
});

Route::prefix('category')->group(function(){
    Route::get('/', 'CategoryController@index')->name('category.index');
    Route::get('/create', 'CategoryController@create')->name('category.create');
    Route::post('/store', 'CategoryController@store')->name('category.store');
    Route::get('/view/{id}', 'CategoryController@view')->name('category.view');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
    Route::get('/delete/{id}', 'CategoryController@delete')->name('category.delete');
});
