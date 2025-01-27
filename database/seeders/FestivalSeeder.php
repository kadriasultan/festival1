<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FestivalSeeder extends Seeder
{
    public function run()
    {
        $concerts = [
            [
                'name' => 'Rotterdam Rave Kick-off 2025',
                'slug' => 'rotterdam-rave-kick-off-2025',
                'description' => 'Een geweldig festival in februari 2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Voeg hier meer records toe als dat nodig is
        ];

        foreach ($concerts as $concert) {
            DB::table('concerts')->updateOrInsert(
                ['slug' => $concert['slug']], // Zoek voor bestaande slug
                $concert // Gegevens om in te voegen of bij te werken
            );
        }
    }
}
