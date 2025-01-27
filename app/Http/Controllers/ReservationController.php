<?php
namespace App\Http\Controllers;

use App\Models\Concert; // Zorg ervoor dat je het juiste model importeert
use App\Models\Busreis; // Zorg ervoor dat je het juiste model importeert
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index($slug)
    {
        // Haal het concert op basis van de slug
        $concert = Concert::where('slug', $slug)->firstOrFail();

        // Geef de concertgegevens door aan de view
        return view('reserve.index', compact('concert'));
    }


public function store(Request $request, $slug)
{
// Valideer de invoer
$request->validate([
'name' => 'required|string|max:255',
'email' => 'required|email',
'event' => 'required|string',
]);

// Haal het evenement op
$event = Concert::where('slug', $slug)->firstOrFail();

// Maak een nieuwe reservering aan
Reservation::create([
'name' => $request->name,
'email' => $request->email,
'event_name' => $event->name,
'event_id' => $event->id,  // Koppelen aan het evenement
]);

// Redirect naar de evenementenpagina met een succesbericht
return redirect()->route('events.index')->with('success', 'Reservering succesvol!');
}
    public function show($concertSlug)
    {
        $concert = Concert::where('slug', $concertSlug)->first();
        return view('reserve.index', compact('concert'));
    }

}
