<?php

namespace App\Repositories;

use App\Models\Coupon;

class CouponRepository {
    public function createCoupon($offerId, $user) {

        $existingCoupon = Coupon::where('offer_id', $offerId)
        ->where('user_id', $user->id)
        ->first();

        if($existingCoupon) return false;

        $code = $this->generateCouponCode();

        $coupon = new Coupon();
        $coupon->code = $code;
        $coupon->offer_id = $offerId;
        $coupon->user()->associate($user);
        $coupon->save();

        return $coupon;
    }

    private function generateCouponCode(){
        $code = null;
        $existingCodes = Coupon::pluck('code')->toArray();
    
        do {
            $code = rand(10000000, 99999999);
        } while (in_array($code, $existingCodes));
    
        return $code;
    }
}