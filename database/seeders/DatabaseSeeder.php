<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Offer;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Offer::create([
            'title' => '10% off Hotel Sea',
            'description' => 'Enjoy 10% off at a luxurious resort by the sea',
        ]);
    
        Offer::create([
            'title' => '20% off Spa Retreat',
            'description' => 'Get 20% off a rejuvenating spa retreat with stunning views'
        ]);

        Offer::create([
            'title' => '15% off Adventure Tour',
            'description' => 'Experience an exciting adventure tour with 15% off the regular price'
        ]);

        Offer::create([
            'title' => '30% off Beachside Villa',
            'description' => 'Indulge in luxury with 30% off a spacious beachside villa'
        ]);

        Offer::create([
            'title' => '25% off Ski Vacation',
            'description' => 'Enjoy a thrilling ski vacation with 25% off your accommodation'
        ]);
        
    }
}
