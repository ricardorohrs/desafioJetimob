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
    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('salva_carro', 'App\Http\Controllers\CarroController@salva_carro');
Route::get('all_cars', 'App\Http\Controllers\CarroController@all_cars');
Route::get('edit_carro/{id}', 'App\Http\Controllers\CarroController@edit_carro');
Route::put('update_carro', 'App\Http\Controllers\CarroController@update_carro');
Route::delete('delete_carro/{id}', 'App\Http\Controllers\CarroController@delete_carro');

Route::get('/veiculos/{carro}', 'App\Http\Controllers\VeiculoIdController@show');
