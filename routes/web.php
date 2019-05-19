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

Route::get('/', 'BaseController@index');
Route::get('/cartelera', 'MovieController@cartelera');
Route::get('/pelicula/{slug}', 'MovieController@show');
Route::get('/buscar', 'MovieController@search');
Route::get('/funciones', 'MovieController@functions');
Route::get('/funciones/{slug}', 'MovieController@functionsMovie');
Route::get('/cartelera/{slug}', 'MovieController@genresMovie');