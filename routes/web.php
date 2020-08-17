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



Route::get('/', 'DashboardUserController@index')->name('dashboardCustomer');

Auth::routes();

Route::middleware('auth:web')->group(function () {

    // Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('/create', 'UserController@create')->name('user.create');
        Route::post('/store', 'UserController@store')->name('user.store');
        Route::get('/view/{id}', 'UserController@view')->name('user.view');
        Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
        Route::post('/update/{id}', 'UserController@update')->name('user.update');
        Route::get('/delete/{id}', 'UserController@delete')->name('user.delete');
    });

    Route::prefix('customer')->group(function () {
        Route::get('/', 'CustomerController@index')->name('customer.index');
        Route::get('/create', 'CustomerController@create')->name('customer.create');
        Route::post('/store', 'CustomerController@store')->name('customer.store');
        Route::get('/view/{id}', 'CustomerController@view')->name('customer.view');
        Route::get('/edit/{id}', 'CustomerController@edit')->name('customer.edit');
        Route::post('/update/{id}', 'CustomerController@update')->name('customer.update');
        Route::get('/delete/{id}', 'CustomerController@delete')->name('customer.delete');
    });

    Route::prefix('category')->group(function () {
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@create')->name('category.create');
        Route::post('/store', 'CategoryController@store')->name('category.store');
        Route::get('/view/{id}', 'CategoryController@view')->name('category.view');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('category.delete');
    });

    Route::prefix('product')->group(function () {
        Route::get('/', 'ProductController@index')->name('product.index');
        Route::get('/create', 'ProductController@create')->name('product.create');
        Route::post('/store', 'ProductController@store')->name('product.store');
        Route::get('/view/{id}', 'ProductController@view')->name('product.view');
        Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('/update/{id}', 'ProductController@update')->name('product.update');
        Route::get('/delete/{id}', 'ProductController@delete')->name('product.delete');
    });
});
