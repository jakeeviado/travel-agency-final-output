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
            'package_name' => 'Get away Package',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Family Vacation',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Tropas Adventure',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Date Special',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
        ]);
        tblPackages::factory()->create([
            'package_name' => 'Adventure Bundle',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
        ]);
    }
}
