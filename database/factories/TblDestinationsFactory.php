<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tblDestinations>
 */
class TblDestinationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'description' => $this->faker->sentence(),
            // 'image_url' => $this->faker->imageUrl(640, 480, 'travel', true),
            'is_available' => $this->faker->boolean(80),
            'is_top_destination' => $this->faker->boolean(50),
        ];
    }
}
