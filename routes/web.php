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

// RUTAS USUARIO
Route::resource('user', 'UserController');
// RUTAS PELICULAS
Route::resource('movie', 'MovieController');
// RUTAS GENEROS
Route::resource('genre', 'GenreController');
// RUTAS PERSONAS
Route::resource('person', 'PersonController');