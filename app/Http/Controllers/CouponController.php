<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CouponRepository;

class CouponController extends Controller
{
    private $couponRepository;
    public function __construct(CouponRepository $couponRepository){
        $this->couponRepository = $couponRepository;
    }
    public function create(){
        $newCode = $this->couponRepository->newCoupon();
        echo $newCode;
    }
}
