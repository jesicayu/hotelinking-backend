<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function registerUser(Request $request){

        $email = $request->email;
        $password = $request->password;

        $user = $this->userRepository->register($email, $password);

        if(!$user){
            return response()->json(['message' => 'Email already exists'], 409);
        }

        return response()->json(['message' => 'User created'], 201);
    }

    public function logInUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = $this->userRepository->login($email, $password);

        if (!$user) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Auth::login($user, $remember = true);

        return response()->json([
            'email' => $user->email,
            'id' => $user->id,
        ], 200);
    }

    public function logOutUser()
    {

    Auth::logout();

    Cookie::queue(Cookie::forget('laravel_session'));
    return response()->json(['message' => 'Logged out successfully'], 200);
    }

    public function userCoupons()
    {
        $user = Auth::user();
        $coupons = $this->userRepository->getUserCoupons($user);

        return response()->json(['coupons' => $coupons]);
    }

    public function redeemCoupon($couponId)
    {
        $user = Auth::user();
        $coupon = $this->userRepository->redeemUserCoupon($user, $couponId);

        if (!$coupon) {
            return response()->json(['message' => 'Coupon unable to be redeemed'], 404);
        }
        return response()->json(['message' => 'Coupon redeemed successfully'], 200);
    }
}
