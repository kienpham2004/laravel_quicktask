<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserController@index')->name('user.index');
Route::get('order/index', 'OrderController@tindex')->name('order.index');
Route::get('user/{lang}', 'HomeController@setLocale')->name('user.lang');

Route::group(['middleware'=>'locale'], function () {
    Route::group(['prefix' => 'order'], function () {
        Route::get('index', 'OrderController@index')->name('order.index');
        Route::get('create', 'OrderController@create')->name('order.create');
        Route::post('store', 'OrderController@store')->name('order.store');
        Route::get('edit/{id}', 'OrderController@edit')->name('order.edit');
        Route::put('update/{id}', 'OrderController@update')->name('order.update');
        Route::delete('destroy/{id}', 'OrderController@destroy')->name('order.destroy');
        Route::get('back', 'OrderController@back')->name("order.back");
    });
    
    Route::group(['prefix' => 'users'], function () {
        Route::get('index', 'UserController@index')->name('user.index');
        Route::get('create', 'UserController@create')->name('user.create');
        Route::post('store', 'UserController@store')->name('user.store');
        Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
        Route::put('update/{id}', 'UserController@update')->name('user.update');
        Route::delete('destroy/{id}', 'UserController@destroy')->name('user.destroy');
        Route::get('back', 'UserController@back')->name("user.back");
    });
});
