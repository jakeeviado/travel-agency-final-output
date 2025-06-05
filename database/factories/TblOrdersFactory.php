<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_orders>
 */
class TblOrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->unique()->numberBetween(1, 1000),
            'user_id' => $this->faker->numberBetween(1, 100),
            'order_number' => $this->faker->unique()->numerify('ORD-#####'),
            'total_amount' => $this->faker->randomFloat(2, 10, 10000),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid', 'refunded']),
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
            'booking_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'travel_start_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'travel_end_date' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
        ];
    }
}
