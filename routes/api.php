<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('/signup', [UserController::class, 'Signup']);

// Route::get('/users', [UserController::class, 'read']);;
Route::post('/login', [UserController::class, 'login']);
//!Users endPoint//
Route::get('/users', [UserController::class, 'read']);
Route::post('/users', [UserController::class, 'create']);
Route::patch('/users', [UserController::class, 'update']);
Route::delete('/users', [UserController::class, 'delete']);
//! Cars Endpoint//

Route::get('/cars', [CarController::class, 'read']);
Route::post('/cars', [CarController::class, 'create']);
Route::patch('/cars', [CarController::class, 'update']);
Route::delete('/cars', [CarController::class, 'delete']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
