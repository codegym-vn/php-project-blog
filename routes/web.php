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

Route::group(['prefix' => 'admin'], function () {
   Route::get('/', 'PostController@index')->name('admin.index');
   Route::get('/add', 'PostController@create')->name('admin.create');
   Route::post('/add', 'PostController@store')->name('admin.store');
});

Auth::routes();
Route::group(['prefix' => 'home'],function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/list', 'HomeController@list')->name('user.blog');
});
