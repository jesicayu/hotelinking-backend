<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('offer')->group(function () {
    include('offerRouter.php');
});

Route::prefix('coupon')->group(function () {
    include('couponRouter.php');
});

Route::prefix('user')->group(function () {
    include('userRouter.php');
});