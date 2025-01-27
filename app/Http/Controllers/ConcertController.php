<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use App\Models\Busreis; // Als je busreizen wilt tonen
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function show($slug)
    {
        $concert = Concert::where('slug', $slug)->firstOrFail();
        $busreisen = Busreis::all(); // Haal busreizen op als dat nodig is
        return view('reserve.index', compact('concert', 'busreisen'));
    }

    public function reserveSubmit(Request $request, $slug)
    {
        // Verwerk het reserveringsformulier
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        // Haal het concert opnieuw op
        $concert = Concert::where('slug', $slug)->firstOrFail();

        // Hier kun je de logica toevoegen om de reservering op te slaan
        // Bijvoorbeeld: opslaan in de database

        return redirect()->route('concert.show', ['slug' => $slug])->with('status', 'Reservering succesvol!');
    }
}
