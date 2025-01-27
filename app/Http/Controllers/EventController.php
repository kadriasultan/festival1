<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
public function index()
{
// Haal alle evenementen op
$events = Event::all();

return view('events.index', compact('events'));
}

public function show($slug)
{
// Toon details van een specifiek evenement
$event = Event::where('slug', $slug)->firstOrFail();
return view('events.show', compact('event'));
}
    public function reserve($slug)
    {
        // Haal het evenement op op basis van de slug
        $event = Event::where('slug', $slug)->firstOrFail();

        // Geef de $event variabele door aan de view
        return view('reserve', compact('event'));
    }

public function reserveSubmit(Request $request, $slug)
{
// Valideer de gegevens
$request->validate([
'name' => 'required|string|max:255',
'email' => 'required|email',
'tickets' => 'required|integer|min:1',
]);

// Hier kun je de reservering opslaan in de database of andere logica uitvoeren
// Bijvoorbeeld: Reservation::create([...]);

return redirect()->route('events.index')->with('success', 'Reservering succesvol!');
}
    public function showEventForm()
    {
        $event = Event::find(1); // Or whatever logic you need to get the event
        return view('reservation.index', compact('event'));
    }

}
