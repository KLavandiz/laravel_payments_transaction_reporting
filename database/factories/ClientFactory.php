<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       // Client::truncate(); //Remove all data before seeding only for testing purpose!!
        $number = fake()->creditCardNumber();
        $month = fake()->numberBetween(1, 12);
        $year = fake()->numberBetween(2025, 2030);
        $startDate = '-30 years'; // 30 years ago
        $endDate = '-18 years';   // 18 years ago
        $dateOfBirth = fake()->dateTimeBetween($startDate, $endDate);
        return [
            'number' => strval($number),
            'expiry_month' => strval($month),
            'expiry_year' => strval($year),
            'email' => fake()->unique()->safeEmail(),
            'birthday' => $dateOfBirth,
            'billing_firstName' => fake()->firstName(),
            'billing_lastName' => fake()->lastName(),
            'billing_address1' => fake()->address(),
            'billing_city' => fake()->city(),
            'billing_postcode' => fake()->postcode(),
            'billing_country' => fake()->country(),
            'shipping_firstName' => fake()->firstName(),
            'shipping_address1' => fake()->address(),
            'shipping_city' => fake()->city(),
            'shipping_postcode' => fake()->postcode(),
            'shipping_country' => fake()->country(),

        ];
    }
}
