<?php

namespace App\Repositories;

use App\Models\Offer;

class OfferRepository {
public function all(){
    return Offer::all();
}
}