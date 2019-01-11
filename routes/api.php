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


 Route::get('posts', 'PostApiController@index');
 Route::get('/posts/{id}', 'PostApiController@show');
 Route::delete('/posts/{id}', 'PostApiController@destroy');
 Route::put('/posts/{id}', 'PostApiController@update');
 Route::post('/posts', 'PostApiController@store');
