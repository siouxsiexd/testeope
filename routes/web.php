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


//Home
Route::get('/', 'HomeController@home')->name('home');

//Categorias
Route::get('/categorias', 'CategoriaController@index');
Route::get('/categorias/novo', 'CategoriaController@create')->name('categoria.novo');
Route::post('/categorias/salvar', 'CategoriaController@store')->name('categoria.salvar');
Route::get('/categorias/deletar/{id}', 'CategoriaController@destroy');
Route::get('/categorias/editar/{id}', 'CategoriaController@edit');
Route::post('/categorias/{id}', 'CategoriaController@update');

//Grupos
Route::get('/grupos', 'GrupoController@index');
Route::get('/grupos/novo', 'GrupoController@create')->name('grupo.novo');
Route::post('/grupos/salvar', 'GrupoController@store')->name('grupo.salvar');
Route::get('/grupos/deletar/{id}', 'GrupoController@destroy');
Route::get('/grupos/editar/{id}', 'GrupoController@edit');
Route::post('/grupos/{id}', 'GrupoController@update');

//Produtos
Route::get('/produtos', 'ProdutoController@index');
Route::get('/produtos/novo', 'ProdutoController@create')->name('produto.novo');
Route::post('/produtos/salvar', 'ProdutoController@store')->name('produto.salvar');
Route::get('/produtos/deletar/{id}', 'ProdutoController@destroy');
Route::get('/produtos/editar/{id}', 'ProdutoController@edit')->name('produto.editar');
Route::post('/produtos/{id}', 'ProdutoController@update');

//Comandas
Route::get('/comandas', 'ComandaController@index')->name('comanda.index');
Route::post('/comandas/detalhes', 'ComandaController@show')->name('comanda.detalhe');