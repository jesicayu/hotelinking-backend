<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\UserController;

Route::post('/register', [UserController::class, 'registerUser']);
Route::post('/login', [UserController::class, 'logInUser']);
Route::post('/logout', [UserController::class, 'logOutUser']);
Route::put('/redeem/{couponId}', [UserController::class, 'redeemCoupon'])->middleware('auth');
Route::get('/usercoupons', [UserController::class, 'userCoupons'])->middleware('auth');
