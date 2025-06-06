<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TblServices;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_services>
 */
class TblServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => $this->faker->unique()->numberBetween(1, 100),
            'service_name' => $this->faker->word(),
            'service_short_description' => $this->faker->sentence(),
            'service_detailed_description' => $this->faker->paragraph(),
            'service_price' => $this->faker->randomFloat(2, 10, 1000),
            'service_duration' => $this->faker->numberBetween(30, 180),
            'max_participants' => $this->faker->numberBetween(1, 20),
            'location' => $this->faker->city(),
            'country' => $this->faker->country(),
            'category_id' => $this->faker->numberBetween(1, 10),
            'is_active' => $this->faker->boolean(),
            'is_featured' => $this->faker->boolean(),
            'created_by' => $this->faker->numberBetween(1, 5),
            'updated_by' => $this->faker->numberBetween(1, 5),
        ];
    }
}
