<?php

namespace App\Repositories;

use App\Models\Coupon;

class CouponRepository {
public function newCoupon(){
    $code = rand(10000000, 99999999);
    return $code;
}
}