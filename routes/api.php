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

# Rotas para Pratos
Route::prefix('pratos')->group(function() {
    Route::namespace('Api')->group(function() {
        Route::get('/', 'PratoController@index');

        Route::post('/store', 'PratoController@store');

        Route::put('/{id}', 'PratoController@update');

        Route::delete('/{id}', 'PratoController@destroy');
    });
});