<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\CouponRepository;


class CouponController extends Controller
{
    private $couponRepository;
    public function __construct(CouponRepository $couponRepository){
        $this->couponRepository = $couponRepository;
    }
    public function create($offerId){
        $user = Auth::user();

        $coupon = $this->couponRepository->createCoupon($offerId, $user);

        if(!$coupon){
            return response()->json(['message' => 'User cannot create more than one coupon per offer'], 409);
        };

        return response()->json(['message' => 'Coupon created successfully'],201);
    }
}
