<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'beds' => $this->faker->numberBetween(1, 7),
            'baths' => $this->faker->numberBetween(1, 7),
            'area' => $this->faker->numberBetween(100, 500),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'street_number' => $this->faker->buildingNumber(),
            'code' => $this->faker->postcode(),
            'price' => $this->faker->numberBetween(100_000, 2_000_000),
        ];
    }
}
