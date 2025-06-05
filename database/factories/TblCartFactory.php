<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_cart>
 */
class TblCartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cart_id' => $this->faker->numberBetween(1, 100),
            'service_id' => $this->faker->numberBetween(1, 50),
            'pricing_id' => $this->faker->numberBetween(1, 20),
            'quantity' => $this->faker->numberBetween(1, 10),
            'participants' => $this->faker->numberBetween(1, 5),
            'travel_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'total_price' => $this->faker->randomFloat(2, 10, 1000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
