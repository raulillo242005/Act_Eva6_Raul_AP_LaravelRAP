<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRAPController;
use App\Http\Controllers\PostRAPController;

Route::get('/users', [UserRAPController::class, 'index']);
Route::get('/users/{id}', [UserRAPController::class, 'show']);

Route::get('/posts', [PostRAPController::class, 'index']);
Route::get('/posts/{id}', [PostRAPController::class, 'show']);



