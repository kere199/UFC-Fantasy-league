<?php
// database/factories/FighterFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FighterFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'birthday' => $this->faker->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d'),
            'weightclass' => $this->faker->randomElement([
                'Heavyweight',
                'Light Heavyweight',
                'Middleweight',
                'Welterweight',
                'Lightweight',
                'Featherweight',
                'Bantamweight',
                'Flyweight',
            ]),
        ];
    }
}
