<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_orderPackages>
 */
class TblOrderPackagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->numberBetween(1, 1000),
            'package_id' => $this->faker->numberBetween(1, 50),
            'service_id' => $this->faker->numberBetween(1, 50),
            'pricing_id' => $this->faker->numberBetween(1, 20),
            'quantity' => $this->faker->numberBetween(1, 10),
            'participants' => $this->faker->numberBetween(1, 5),
            'total_price' => $this->faker->randomFloat(2, 10, 1000),
            'travel_date' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
