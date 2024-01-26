<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForeignExchange>
 */
class ForeignExchangeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'original_amount' => strval(fake()->randomFloat(2, 10, 1000)),
            'original_currency' => fake()->currencyCode()
        ];
    }
}
