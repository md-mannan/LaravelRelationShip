<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->email,
            'phone' => fake()->phoneNumber('017-8545-8785'),
            'city' => fake()->city(),
            'address' => fake()->address(),
            'student_id' => fake()->numberBetween(1, 10),

        ];
    }
}
