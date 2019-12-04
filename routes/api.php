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

/**
* Module Clientes
*/
Route::apiResource("clientes","\App\Modules\General\Clientes\Controllers\ClientesController");
/**
* Module FilmeModels
*/
Route::apiResource("filmes","\App\Modules\General\FilmeModels\Controllers\FilmeModelsController");
/**
* Module Migrations
*/
Route::apiResource("migrations","\App\Modules\General\Migrations\Controllers\MigrationsController");
/**
* Module PasswordResets
*/
Route::apiResource("password_resets","\App\Modules\General\PasswordResets\Controllers\PasswordResetsController");
/**
* Module Users
*/
Route::apiResource("users","\App\Modules\General\Users\Controllers\UsersController");
