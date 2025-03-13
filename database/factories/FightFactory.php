<?php
// database/factories/FightFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fighter;

class FightFactory extends Factory
{
    protected $model = \App\Models\Fight::class;

    public function definition(): array
    {
        $fighters = Fighter::inRandomOrder()->take(2)->get();
        $fighter1Id = $fighters->min('id');
        $fighter2Id = $fighters->max('id');

        // Randomly pick winner (or null)
        $winnerId = $this->faker->boolean(80) ? $this->faker->randomElement([$fighter1Id, $fighter2Id]) : null;

        return [
            'fighter_1_id' => $fighter1Id,
            'fighter_2_id' => $fighter2Id,
            'winner_id' => $winnerId,
            'method' => $winnerId ? $this->faker->randomElement(['decision', 'knockout', 'submission']) : null,
        ];
    }
}
