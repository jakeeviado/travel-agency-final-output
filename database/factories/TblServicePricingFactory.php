<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_servicePricing>
 */
class TblServicePricingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => $this->faker->numberBetween(1, 50),
            'pricing_name' => $this->faker->word(),
            'pricing_amount' => $this->faker->randomFloat(2, 10, 1000),
            'pricing_currency' => $this->faker->currencyCode(),
            'minimum_participants' => $this->faker->numberBetween(1, 5),
            'maximum_participants' => $this->faker->numberBetween(6, 20),
            'valid_from' => $this->faker->dateTimeBetween('now', '+1 year'),
            'valid_until' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
            'is_active' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
