<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/demo', [DemoController::class, 'index']);

Route::get('/users', [UserController::class, 'index']); //all users
Route::get('/users/{user}', [UserController::class, 'show']); //one user
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
Route::post('/upload', [UserController::class, 'upload']);