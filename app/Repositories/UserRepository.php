<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Coupon;

class UserRepository {
public function register($email, $password){
   
    $existingUser = User::where('email', $email) -> first();

    if ($existingUser) {
        return false;
    }
   
    $user = User::create([
        'email' => $email,
        'password' => Hash::make($password),
    ]);
    return $user;
}

public function login($email, $password)
{
    $credentials = ['email' => $email, 'password' => $password];

    if (!Auth::attempt($credentials)) {
        return false;
    }
   
    return Auth::user();
}
public function getUserCoupons($user){
    return $user->coupons()->with('offer')->get();
}

public function redeemUserCoupon($user, $couponId)
{
    $coupon = Coupon::where('id', $couponId)->where('user_id', $user->id)->first();
    if(!$coupon){
       return false;
    }
    $coupon->redeemed = true;
    $coupon->save();
    return $coupon;
}
}