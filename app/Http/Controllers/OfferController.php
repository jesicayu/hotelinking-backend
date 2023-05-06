<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OfferRepository;


class OfferController extends Controller
{
    private $offerRepository;
    public function __construct(OfferRepository $offerRepository){
        $this->offerRepository = $offerRepository;
    }
    public function getAll(){
        $offers = $this->offerRepository->all();
        return $offers;
    }
}
