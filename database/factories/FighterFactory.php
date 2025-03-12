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
            'photo_url' => 'https://picsum.photos/300/400?random=' . rand(1, 1000),
            'price' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
