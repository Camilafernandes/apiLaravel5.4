<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function () {
	return response()->json(['message' => 'API Laravel', 'status' => 'Connected']);;
});

Route::resource('funcionarios', 'FuncionariosController', ['except' => ['index', 'edit']]); 
Route::resource('empresas', 'EmpresasController', ['except' => ['create', 'edit']]); 
