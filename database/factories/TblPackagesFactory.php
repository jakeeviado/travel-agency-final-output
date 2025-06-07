<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tblPackages>
 */
class TblPackagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pricing_id' => \App\Models\tblPricings::factory(),
            'destination_id' => \App\Models\tblDestinations::factory(),
            'package_name' => $this->faker->unique()->sentence(rand(2, 4), false),
            'description' => $this->faker->sentence(),
            'duration' => $this->faker->numberBetween(1, 30),
            'is_active' => $this->faker->boolean(),

            'departure_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'return_date' => $this->faker->dateTimeBetween('+1 week', '+2 years'),
            'is_featured' => $this->faker->boolean(20),
            'is_popular' => $this->faker->boolean(30),
            'is_discounted' => $this->faker->boolean(10),
        ];
    }
}
