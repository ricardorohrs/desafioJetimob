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
    return view('veiculos');
})->middleware('auth');

Auth::routes();

Route::get('index', 'App\Http\Controllers\CarroController@index');
Route::post('store', 'App\Http\Controllers\CarroController@store');
Route::get('edit/{id}', 'App\Http\Controllers\CarroController@edit');
Route::put('update', 'App\Http\Controllers\CarroController@update');
Route::delete('destroy/{id}', 'App\Http\Controllers\CarroController@destroy');

Route::get('/veiculos', 'App\Http\Controllers\HomeController@index');
Route::get('/veiculos/{carro}', 'App\Http\Controllers\CarroController@show')->middleware('auth');
Route::get('/search', 'App\Http\Controllers\CarroController@search');
Route::get('marcaVenda/{id}', 'App\Http\Controllers\CarroController@marcaVenda');
Route::get('/relatorios/{carros}', 'App\Http\Controllers\RelatorioController@index')->middleware('auth');
