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

Route::get('desarrolladores', 'PagesController@desarrolladores')->name('desarrolladores');
Route::get('desarrolladores/{id}', 'PagesController@desarrolladorDetalles')->name('desarrolladores.detalle');
Route::post('desarrolladores', 'PagesController@crearDesarrollador')->name('desarrolladores.crear');
Route::get('/developers/{id}', 'PagesController@editarDesarrollador' )->name('developers');
Route::put('/desarrolladores/{id}', 'PagesController@updateDesarrollador')->name('desarrolladores.actualizar');
Route::delete('desarrolladores/{id}', 'PagesController@eliminarDesarrollador')->name('desarrolladores.eliminar');

Route::get('usuarios', 'PagesController@usuarios')->name('usuarios');
Route::get('usuarios/{id}', 'PagesController@usuarioDetalles')->name('usuarios.detalleUsuario');
Route::put('/usuarios/{id}', 'PagesController@updateUsuario')->name('usuarios.actualizar');
Route::delete('usuarios/{id}', 'PagesController@eliminarUsuario')->name('usuarios.eliminar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
