<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcertSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('concerts')->insert([
            ['name' => 'Rotterdam Rave Kick-off 2025', 'slug' => 'rotterdam-rave-kick-off-2025', 'description' => 'februari 2025', 'created_at' => now(), 'updated_at' => now()],
            // ... other records
        ]);
    }
}
