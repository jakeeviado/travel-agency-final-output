<?php

namespace Database\Seeders;

use App\Models\tblDestinations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblDestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            [
                'country' => 'Japan',
                'city' => 'Tokyo',
                'description' => 'A bustling metropolis blending traditional culture with modern innovation.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
                'is_available' => true,
                'is_top_destination' => true,
            ],
            [
                'country' => 'France',
                'city' => 'Paris',
                'description' => 'The city of lights, known for its art, fashion, and iconic landmarks.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
                'is_available' => true,
                'is_top_destination' => true,
            ],
            [
                'country' => 'Thailand',
                'city' => 'Phuket',
                'description' => 'Tropical paradise with pristine beaches and crystal clear waters.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
                'is_available' => true,
                'is_top_destination' => true,
            ],
            [
                'country' => 'Italy',
                'city' => 'Rome',
                'description' => 'Historic city filled with ancient ruins and cultural treasures.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
                'is_available' => true,
                'is_top_destination' => false,
            ],
            [
                'country' => 'Nepal',
                'city' => 'Kathmandu',
                'description' => 'Gateway to the Himalayas with rich cultural heritage.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
                'is_available' => true,
                'is_top_destination' => false,
            ],
            [
                'country' => 'Kenya',
                'city' => 'Nairobi',
                'description' => 'Starting point for amazing wildlife safari adventures.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
                'is_available' => true,
                'is_top_destination' => false,
            ],
            [
                'country' => 'Indonesia',
                'city' => 'Bali',
                'description' => 'Spiritual island retreat perfect for wellness and relaxation.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/960px-Skyscrapers_of_Shinjuku_2009_January.jpg',
                'is_available' => true,
                'is_top_destination' => true,
            ]
        ];

        foreach ($destinations as $destination) {
            tblDestinations::create($destination);
        }
    }
}
