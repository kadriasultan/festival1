<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::create([
            'name' => 'Test Festival 1',
            'slug' => 'test-festival-1', // Zorg ervoor dat deze uniek is
            'image' => 'path/to/image1.jpg',
            'date' => now()->addDays(5),
            'location' => 'Locatie 1',
            'genre' => 'Genre 1',
            'description' => 'Beschrijving van Test Festival 1',
        ]);

        Event::create([
            'name' => 'Test Festival 2',
            'slug' => 'test-festival-2', // Zorg ervoor dat deze uniek is
            'image' => 'path/to/image2.jpg',
            'date' => now()->addDays(10),
            'location' => 'Locatie 2',
            'genre' => 'Genre 2',
            'description' => 'Beschrijving van Test Festival 2',
        ]);
    }
}
