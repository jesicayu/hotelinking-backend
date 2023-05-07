<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\CouponController;

Route::get('/', [CouponController::class, 'create'])->middleware('auth');
