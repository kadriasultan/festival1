<?php

namespace Database\Seeders;

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

        $this->call([
            FestivalSeeder::class,
            // Voeg hier andere seeders toe als dat nodig is
        ]);

        $this->call(ConcertSeeder::class);

        // User::factory(10)->create();
        $this->call(FestivalSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
