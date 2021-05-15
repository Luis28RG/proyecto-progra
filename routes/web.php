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

Route::get('/categoria/tabla', 'App\Http\Controllers\CategoriaController@index')->name('categoria/tabla');
Route::post('/categoria/crear', 'App\Http\Controllers\CategoriaController@create')->name('categoria/create');
Route::get('/categoria/eliminar/{id}', 'App\Http\Controllers\CategoriaController@eliminar')->name('categoria/eliminar');

// Rutas de Marca
Route::get('/marca/registro',function () {
    return view('marca.formulario');
})->name('marca/formulario');

Route::get('/marca/tabla', 'App\Http\Controllers\MarcaController@index')->name('marca/tabla');
Route::post('/marca/crear', 'App\Http\Controllers\MarcaController@create')->name('marca/create');
Route::get('/marca/eliminar/{id}', 'App\Http\Controllers\MarcaController@eliminar')->name('marca/eliminar');
