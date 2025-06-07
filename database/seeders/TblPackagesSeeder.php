<?php

namespace Database\Seeders;

use App\Models\tblPackages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tblPackages::factory()->create();
        tblPackages::factory()->create([
            'package_name' => 'Family Vacation Package',
            'image_url' => 'https://media.istockphoto.com/id/1450052495/photo/happy-family-with-car-travel-road-trip-summer-vacation-in-car-in-the-sunset-dad-mom-and.jpg?s=612x612&w=0&k=20&c=yj4tsXvfofdNC9yaWotQrJ0CJPeMQoU2zffXFsDCOxM=',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Adventure Bundle',
            'image_url' => 'https://jungleparadise.mx/wp-content/uploads/2024/12/cancun-adventure-tours.jpeg',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Beach Bliss Escape',
            'image_url' => 'https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/m2W4bBXpBjF0poe7/twelve-day-safari-discoverygroup-36-dOqbN8eaGXFo9bgL.png',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Eco-Tour Retreat',
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwPJ4CEdmYWwkb805Pc27mLwphCp8oH3V8Bw&s',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'City Explorer Package',
            'image_url' => 'https://images.travelandleisureasia.com/wp-content/uploads/sites/2/2022/11/03181253/Feature-Image-Portugal.jpg?tr=w-480,f-jpg,pr-true',
        ]);

        tblPackages::factory()->create([
            'package_name' => 'Honeymoon Haven',
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDg7bN-oR5Abx0nTaLCed4h9EhnwQOUBIJtA&s',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Sunrise to Sunset Tour',
            'image_url' => 'https://mediaim.expedia.com/localexpert/48380296/8f948302-711f-47f7-90bc-190f0702d5c9.jpg?impolicy=resizecrop&rw=1005&rh=565',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Cultural Heritage Package',
            'image_url' => 'https://cms-b-assets.familysearch.org/dims4/default/d95cfcd/2147483647/strip/true/crop/800x500+0+0/resize/1240x775!/quality/90/?url=https%3A%2F%2Ffamilysearch-brightspot.s3.amazonaws.com%2Fdc%2F7a%2F89f67a54a848a7f4f745479b4bc6%2Fyasaka-pagoda-japan.jpg',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Lakeside Leisure Trip',
            'image_url' => 'https://swastikholiday.com/uttarakhand/images/uttarakhand-tour-itinerary-2.jpg',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Festival Experience Package',
            'image_url' => 'https://images.ctfassets.net/h4s2feya909e/5bv9AmJoxJtiGfwXWfXs5G/611f68a2ad43203794d4cdfaf07e3fda/chinese-new-year-lantern-festival-celebration.jpg?w=3840&q=60&fm=webp',
        ]);
    }
}
