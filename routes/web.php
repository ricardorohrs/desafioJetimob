<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('relatorios');
})->middleware('auth');

Auth::routes();

Route::get('/veiculos', 'App\Http\Controllers\HomeController@index');

Route::post('store', 'App\Http\Controllers\CarroController@store');
Route::get('index', 'App\Http\Controllers\CarroController@index');
Route::get('edit/{id}', 'App\Http\Controllers\CarroController@edit');
Route::put('update', 'App\Http\Controllers\CarroController@update');
Route::delete('destroy/{id}', 'App\Http\Controllers\CarroController@destroy');

Route::get('/veiculos/{carro}', 'App\Http\Controllers\CarroController@show');
Route::get('marcaVenda/{id}', 'App\Http\Controllers\CarroController@marcaVenda');

Route::get('/historico', function () {
    return view('historico');
});

Route::get('/relatorios/{carros}', 'App\Http\Controllers\RelatorioController@index');

Route::get('/search', 'App\Http\Controllers\CarroController@search');
