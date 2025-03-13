<?php
// database/seeders/UserSpecificSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSpecificSeeder extends Seeder
{
    public function run(): void
    {
        // Your user: irakli
        if (!User::where('email', 'kere@gmail.com')->exists()) {
            User::create([
                'name' => 'irakli',
                'email' => 'kere@gmail.com',
                'password' => Hash::make('kereleishvili1234'), // Replace with your hash
                'coins' => 3000,
                'points' => 0,
                'is_admin' => true,
                'email_verified_at' => now(),
            ]);
        }

        // New user: Nico Deblauwe
        if (!User::where('email', 'nico@deblauwe.be')->exists()) {
            User::create([
                'name' => 'Nico Deblauwe',
                'email' => 'nico@deblauwe.be',
                'password' => '$2y$12$0IvSG2UEsUdrt8fESwHSXezV6ft2Ulx82rHm85gx3z3RAbfydGd/y', // Existing hash or replace
                'coins' => 3000,
                'points' => 0,
                'is_admin' => false,
                'email_verified_at' => now(),
            ]);
        }
    }
}
