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
Route::get('/', 'PostController@view')->name(BLOG);

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/create','PostController@create');
        Route::post('/create','PostController@store')->name(POST_CREATE);
        Route::get('/edit/{id}','PostController@edit')->name(POST_EDIT);
        Route::post('/edit/{id}','PostController@update')->name(POST_UPDATE);
        Route::get('/destroy/{id}','PostController@destroy')->name(POST_DESTROY);
        Route::get('/','PostController@index');
        Route::get('/view','PostController@view');
        Route::get('/{id}/show','PostController@show')->name(POST_SHOW);
//        Route::get('/search', 'PostController@search');
        Route::get('/list', 'PostController@list')->name(POST_LIST);
        Route::get('/{id}/detail','PostController@detail')->name(POST_DETAIL);
        Route::get('/{id}/export-pdf', 'PostController@exportPDF')->name('post.exportPDF');

    });
});
//Route::get('/list', 'TagsController@filter')->name('listByTags.filter');

Route::get('changePassword', 'UserController@view');
Route::post('changePassword','UserController@changePassword')->name(CHANGE_PASSWORD);
Route::get('/users', 'UserController@edit')->name('auth.profile.edit');
Route::post('/users', 'UserController@update')->name(PROFILE_UPDATE);

Route::get('/submit', 'CommentController@create')->name('submit.create');
Route::post('/comment/{id}/store', 'CommentController@store')->name('comment.store');
Route::group(['prefix' => 'catogories'], function () {
    Route::get('/','CatogoryController@index')->name('catogories.index');
    Route::get('/create','CatogoryController@create')->name('catogories.create');
    Route::post('/create','CatogoryController@store')->name('catogories.store');
    Route::get('/{id}/edit','CatogoryController@edit')->name('catogories.edit');
    Route::post('/edit/{id}','CatogoryController@update')->name('catogories.update');
    Route::get('/{id}/delete','CatogoryController@destroy')->name('catogories.destroy');
    Route::get('/list', 'CatogoryController@list')->name('catogories.list');
});