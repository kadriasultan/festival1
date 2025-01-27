<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-red-100"> <!-- Warme achtergrondkleur -->
<nav class="bg-red-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-bold">Partybussen</div>
        <div>
            <a href="/" class="text-white px-4 hover:underline">Home</a>
            <a href="/events" class="text-white px-4 hover:underline">Evenementen</a>
            <a href="/busreis" class="text-white px-4 hover:underline">Busreis Organiseren</a> <!-- Nieuwe link toegevoegd -->

            <a href="/about" class="text-white px-4 hover:underline">Over ons</a>
            <a href="/contact" class="text-white px-4 hover:underline">Contact</a>
        </div>
    </div>
</nav>

<div class="container mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
    <h1 class="text-2xl font-bold mb-4">Reserveren voor {{ $event->name }}</h1>
    <p class="mb-6">Leuk dat je wilt reserveren voor het festival {{ $event->name }}! Vul hieronder je gegevens in:</p>
    <form method="POST" action="{{ route('reserve', ['event' => $event]) }}">
        @csrf
        <input type="hidden" name="festival" value="{{ $event }}">

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Naam:</label>
            <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">E-mail:</label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
        </div>

        <div class="mb-4">
            <label for="tickets" class="block text-sm font-medium text-gray-700">Aantal tickets:</label>
            <input type="number" id="tickets" name="tickets" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
        </div>

        <button type="submit" class="w-full bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500 transition duration-300">Reserveer</button>
    </form>
    <!-- reserve.blade.php -->
    <h1>Reserveer voor {{ $event->name }}</h1>
    <p>Datum: {{ $event->date }}</p>
    <p>Locatie: {{ $event->location }}</p>
    <!-- Voeg een formulier toe voor de reservering -->
    <form action="{{ route('reserve.store', $event->id) }}" method="POST">
        @csrf
        <button type="submit">Reserveren</button>
    </form>


    @if (session('success'))
        <div class="mt-4 p-4 bg-green-100 text-green-700 border border-green-300 rounded">
            {{ session('success') }}
        </div>
    @endif
</div>
</body>
</html>
