<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busreis; // Zorg ervoor dat je het juiste model importeert

class BusreisController extends Controller
{
    // Toon de lijst van busreizen
    public function index()
    {
        $busreisen = Busreis::all(); // Haal alle busreizen op
        return view('busreis', compact('busreisen')); // Verwijs naar de view in de hoofdmap
    }
    public function create()
    {
        return view('busreis.create'); // Zorg ervoor dat 'busreis.create' bestaat in resources/views
    }

    // Toon het formulier voor busreis aanvragen
    public function showBusreisForm()
    {
        return view('busreis.form'); // Zorg ervoor dat je een view hebt genaamd busreis.form
    }

    // Verwerk de busreis aanvraag (POST)
    public function submit(Request $request)
    {
        // Validatie van formuliergegevens
        $validated = $request->validate([
            'naam' => 'required|max:255',
            'email' => 'required|email',
            'datum' => 'required|date',
            'aantal_personen' => 'required|integer',
        ]);

        // Opslaan van de gegevens in de database (indien nodig)
        $busreis = new Busreis();
        $busreis->naam = $validated['naam'];
        $busreis->email = $validated['email'];
        $busreis->datum = $validated['datum'];
        $busreis->aantal_personen = $validated['aantal_personen'];
        $busreis->save();

        // Na succesvolle verwerking kan je bijvoorbeeld een bevestiging tonen
        return redirect()->route('busreis.create')->with('success', 'Je aanvraag is succesvol ingediend!');
    }
}
