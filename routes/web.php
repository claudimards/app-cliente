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
});

Auth::routes();

Route::get('/cliente', ['uses'=>'ClienteController@index', 'as'=>'cliente.index']);

Route::get('/adicionar', ['uses'=>'ClienteController@adicionar', 'as'=>'cliente.adicionar']);

Route::post('/salvar',['uses'=>'ClienteController@salvar', 'as'=>'cliente.salvar']);