<?php

namespace Database\Seeders;

use App\Models\Fighter;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UserSpecificSeeder::class);
        \App\Models\Fighter::factory(30)->create();
        \App\Models\User::factory(10)->create();

        $users = User::all();
        $fighters = Fighter::all();

        foreach ($users as $user) {
            $randomFighters = $fighters->random(rand(1, 5));
            $user->fighters()->attach($randomFighters);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
