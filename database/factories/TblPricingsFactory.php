<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tblPricings>
 */
class TblPricingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => $this->faker->numberBetween(100, 5000),
            'currency' => $this->faker->currencyCode(),
            'valid_from' => $this->faker->dateTimeBetween('now', '+1 year'),
            'valid_until' => $this->faker->dateTimeBetween('+1 month', '+2 years'),
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
