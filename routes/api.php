<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::group(['middleware' => 'auth:sanctum'], function ()
{
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});