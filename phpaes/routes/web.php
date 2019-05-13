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

//Auth::routes();

Route::get('/home', 'PrincipalController@index')->name('home');
Route::get('/admin', 'PrincipalController@admin');

Route::get('/admin/cadastrardesconto', 'CupomDescontoController@cadastroDesconto');
Route::post('/cadastrodesconto/adiciona', 'CupomDescontoController@adiciona');
Route::get('/listarcupomdesconto', 'CupomDescontoController@listarCupomDesconto');
Route::get('/cadastrodesconto/deletar/{idCupomDesconto}', 'CupomDescontoController@deletar');
Route::post('/cadastrodesconto/alterar/{idCupomDesconto}', 'CupomDescontoController@alterar');

Route::get('/admin/cadastrarproduto', 'ProdutoController@cadastroProduto');
Route::post('cadastrarproduto/adiciona', 'ProdutoController@adiciona');
