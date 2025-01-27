@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Evenement Aanmaken</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('events.store') }}" method="POST"> <!-- Zorg ervoor dat de actie naar de juiste route wijst -->
            @csrf <!-- Dit is belangrijk voor CSRF-bescherming -->
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium mb-2">Naam:</label>
                <input type="text" name="name" id="name" required class="border p-2 w-full rounded">
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-lg font-medium mb-2">Slug:</label>
                <input type="text" name="slug" id="slug" required class="border p-2 w-full rounded">
            </div>
            <div class="mb-4">
                <label for="date" class="block text-lg font-medium mb-2">Datum:</label>
                <input type="date" name="date" id="date" required class="border p-2 w-full rounded">
            </div>
            <div class="mb-4">
                <label for="location" class="block text-lg font-medium mb-2">Locatie:</label>
                <input type="text" name="location" id="location" required class="border p-2 w-full rounded">
            </div>
            <div class="mb-4">
                <label for="genre" class="block text-lg font-medium mb-2">Genre:</label>
                <input type="text" name="genre" id="genre" required class="border p-2 w-full rounded">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-lg font-medium mb-2">Beschrijving:</label>
                <textarea name="description" id="description" class="border p-2 w-full rounded"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Aanmaken</button>
        </form>
    </div>
@endsection
