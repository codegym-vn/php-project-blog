<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/post', 'PostApiController@index');
    Route::get('post/{id}', 'PostApiController@show');
    Route::post('post', 'PostApiController@store');
    Route::put('post/{id}', 'PostApiController@update');
    Route::delete('post/{id}', 'PostApiController@delete');
});


    Route::get('/user', 'UserApiController@index');
    Route::get('/user/{id}', 'UserApiController@show');
    Route::post('user', 'UserApiController@store');
    Route::put('user/{id}', 'UserApiController@update');
    Route::delete('user/{id}', 'UserApiController@delete');

