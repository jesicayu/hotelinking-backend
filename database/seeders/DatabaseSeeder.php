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
            'image_url' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/71764417.jpg?k=1889125fc066e23a8921211d99111280d5ea1869f91aab929d671dffa6abf28a&o=&hp=1'
        ]);
    
        Offer::create([
            'title' => '20% off Spa Retreat',
            'description' => 'Get 20% off a rejuvenating spa retreat with stunning views',
            'image_url' => 'https://goop-img.com/wp-content/uploads/2015/01/wellness-lead.jpg'
        ]);

        Offer::create([
            'title' => '15% off Adventure Tour',
            'description' => 'Experience an exciting adventure tour with 15% off the regular price',
            'image_url' => 'https://media.gadventures.com/media-server/cache/b6/83/b68317f35e7c9b0b625794546edcdb5b.jpg'
        ]);

        Offer::create([
            'title' => '30% off Beachside Villa',
            'description' => 'Indulge in luxury with 30% off a spacious beachside villa',
            'image_url' => 'https://assets.cntraveller.in/photos/60ba18db8c5b530e1212763e/4:3/w_1600,h_1200,c_limit/Beach-villa-2-st-regis-maldives.jpg'
        ]);

        Offer::create([
            'title' => '25% off Ski Vacation',
            'description' => 'Enjoy a thrilling ski vacation with 25% off your accommodation',
            'image_url' => 'https://imageio.forbes.com/specials-images/imageserve/632704a1e19ed97556b00cbf/0x0.jpg?format=jpg&width=1200'
        ]);
        
    }
}
