<?php

use App\Http\Controllers\API\General\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

Route::controller(LoginController::class)->group(function () {
    // Route::post('register', 'register');
    Route::post('login', 'login');
});

// Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::middleware(['App\Http\Middleware\AdminMiddleware'])->group(function () {
        Route::get('/users', [UserController::class, 'getUsers']);
    });

// });

// cardNews

Route::post('/news', [UserController::class, 'getNews']);
Route::get('/test', [UserController::class, 'test']);
Route::get('/getAuthor', [UserController::class, 'getAuthor']);
Route::get('/LLMChat', [UserController::class, 'LLMChat']);

// cardNews
