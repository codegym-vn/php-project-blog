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
    return view('blog');
})->name('home');
Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/create','PostController@create')->name('admin.post.create');
        Route::post('/create','PostController@store')->name('admin.post.store');
        Route::get('/edit/{id}','PostController@edit')->name('admin.post.edit');
        Route::post('/edit/{id}','PostController@update')->name('admin.post.update');
        Route::get('/destroy/{id}','PostController@destroy')->name('admin.post.destroy');
        Route::get('/','PostController@index')->name('admin.post.index');
//        Route::get('/view','PostController@view')->name('admin.post.view');
        Route::get('/{id}/show','PostController@show')->name('admin.post.show');
        Route::get('/search', 'PostController@search')->name('admin.post.search');
        Route::get('/list', 'PostController@list')->name('admin.post.list');
    });
});

