<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
 //   return $request->user();
// })->middleware('auth:sanctum');

//route::get('/users', [UserController::class, 'index'] );
//route::post('/users', [UserController::class, 'store'] );
Route::apiResource('/users', UserController::class); // cadastrando 5 rotas maneira automatica
