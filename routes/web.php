<?php

use Illuminate\Support\Facades\Route;

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
})->name( 'Bienvenido');

// Rutas de Categoria
Route::get('/categoria/registro',function () {
    return view('categoria.formulario');
})->name('categoria/formulario');

Route::get('/categoria/tabla', 'CategoriaController@index')->name('categoria/tabla');
Route::post('/categoria/crear', 'CategoriaController@create')->name('categoria/create');
Route::get('/categoria/eliminar/{id}', 'CategoriaController@eliminar')->name('categoria/eliminar');
