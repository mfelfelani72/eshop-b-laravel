<?php

use App\Http\Controllers\API\General\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

Route::controller(LoginController::class)->group(function () {
    // Route::post('register', 'register');
    Route::post('login', 'login');
});



// *** user routes
Route::get('/users', [UserController::class, 'getUsers'])->middleware(['auth:sanctum']);
