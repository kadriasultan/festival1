<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');

        $events = Event::where('date', '>=', now())->get();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:events',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Evenement succesvol aangemaakt.');
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('events.show', compact('event'));
    }

    public function reserve($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('events.reserve', compact('event'));
    }
}
