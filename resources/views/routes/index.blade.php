@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Beschikbare Routes</h1>
        <ul class="list-disc pl-5">
            <li><a href="{{ route('festivals.index') }}" class="text-blue-600">Festivals</a></li>
            <li><a href="/" class="text-blue-600">Home</a></li>
            <li><a href="/events" class="text-blue-600">Evenementen</a></li>
            <li><a href="/busreis" class="text-blue-600">Busreis</a></li>
            <li><a href="/about" class="text-blue-600">Over ons</a></li>
            <li><a href="/contact" class="text-blue-600">Contact</a></li>
            <!-- Voeg hier meer routes toe als dat nodig is -->
        </ul>
    </div>
@endsection
