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
Route::group(['middleware' => 'auth:api'], function(){
Route::get('desarrolladores/{id}', 'DesarrolladoresController@get');
Route::put('desarrolladores/{id}', 'DesarrolladoresController@edit');
Route::delete('desarrolladores/delete/{id}', 'DesarrolladoresController@delete');	
});
Route::get('desarrolladores', 'DesarrolladoresController@getAll');
Route::post('desarrolladores', 'DesarrolladoresController@add');

//REGISTRO DE USUARIO
Route::post('register', 'Api\AuthController@register');






