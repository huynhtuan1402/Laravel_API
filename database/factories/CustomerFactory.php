<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name'=>fake()->firstName(),
            'customer_phone'=>fake()->phoneNumber(),
            'customer_email'=>fake()->unique()->safeEmail(),
            'customer_address'=>fake()->address(),
            'customer_city'=>fake()->city()
        ];
    }
}
