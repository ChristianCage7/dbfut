<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'team' => $this->faker->randomElement([
                'Barcelona',
                'Real Madrid',
                'Manchester City',
                'PSG',
                'Bayern Munich'
            ]),
            'position' => $this->faker->randomElement([
                'Goalkeeper',
                'Defender',
                'Midfielder',
                'Forward'
            ]),
            'age' => $this->faker->numberBetween(17, 38),
            'nationality' => $this->faker->country(),
            'market_value' => $this->faker->numberBetween(1000000, 100000000),
            'transfermarkt_id' => $this->faker->numberBetween(10000, 99999),
        ];
    }
}
