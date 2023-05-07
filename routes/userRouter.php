<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/register', [UserController::class, 'registerUser']);
Route::post('/login', [UserController::class, 'logInUser']);
