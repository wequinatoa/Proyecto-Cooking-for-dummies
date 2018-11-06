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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Agregamos nuestra ruta al controller

Route::get('/recetas/', 'RecetasDP@devolverRecetas');
Route::get('Platos/', PlatosDP@seleccionarPlato');
Route::post('/Platos/respuesta', 'PlatosController@id');