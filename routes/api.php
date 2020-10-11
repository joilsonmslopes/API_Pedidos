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
        Route::get('/{id}', 'PratoController@show');

        Route::post('/store', 'PratoController@store');

        Route::put('/{id}', 'PratoController@update');

        Route::delete('/{id}', 'PratoController@destroy');
    });
});

# Rotas para Status
Route::prefix('status')->group(function() {
    Route::namespace('Api')->group(function() {
        Route::get('/', 'StatusController@index');
        Route::get('/{id}', 'StatusController@show');

        Route::post('/store', 'StatusController@store');

        Route::put('/{id}', 'StatusController@update');

        Route::delete('/{id}', 'StatusController@destroy');
    });
});

# Rotas para Pedidos
Route::prefix('pedidos')->group(function() {
    Route::namespace('Api')->group(function() {
        Route::get('/', 'PedidoController@index');
        Route::get('/{id}', 'PedidoController@show');

        Route::post('/store', 'PedidoController@store');
        
    });
});