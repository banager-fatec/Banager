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

Auth::routes();

Route::get('/', 'BibliotecarioController@index')->name('bibliotecario');
Route::get('/bibliotecario', 'BibliotecarioController@index')->name('bibliotecario');
Route::post('/a', 'BibliotecarioController@enviar');
Route::post('/bibliotecario/{id}/edit', 'BibliotecarioController@editar');



// Rotas da tabela bibliotecario
//Route::get('/bibliotecario', 'BibliotecarioController@index')->name('bibliotecario.index');
Route::resource('bibliotecario', 'BibliotecarioController');
