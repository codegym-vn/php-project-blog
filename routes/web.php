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

//Route::get('/', function () {
//    return view('blog');
//})->name('home');
Auth::routes();
Route::get('/', 'PostController@view')->name('blog');

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
        Route::get('/{id}/detail','PostController@detail')->name('admin.post.detail');
        Route::get('/{id}/export-pdf', 'PostController@exportPDF')->name('post.exportPDF');

    });
});
Route::get('/list', 'TagsController@filter')->name('listByTags.filter');

Route::get('changePassword', 'UserController@view')->name('auth.passwords.changePassword');
Route::post('changePassword','UserController@changePassword')->name('changePassword');
Route::get('/users', 'UserController@edit')->name('auth.profile.edit');
Route::post('/users', 'UserController@update')->name('auth.profile.update');

//Route::get('download-pdf', 'UserController@downloadPDF')->name('download-pdf');

Route::get('/submit', 'CommentController@create')->name('submit.create');
Route::post('/comment/{id}/store', 'CommentController@store')->name('comment.store');
