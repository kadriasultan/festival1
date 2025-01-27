@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6">{{ $event->name }}</h1>
        <p>Datum: {{ $event->date }}</p>
        <p>Locatie: {{ $event->location }}</p>
        <p>Genre: {{ $event->genre }}</p>
        <p>Beschrijving: {{ $event->description }}</p>

        <a href="{{ route('events.reserve', $event->slug) }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300">Reserveer Dit Evenement</a>
    </div>
@endsection
