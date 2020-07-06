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
