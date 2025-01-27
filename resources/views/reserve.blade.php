<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveer Evenement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-red-100">

<nav class="bg-red-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-bold">Partybussen</div>
        <div>
            <a href="/" class="text-white px-4 hover:underline">Home</a>
            <a href="/events" class="text-white px-4 hover:underline">Evenementen</a>
            <a href="/about" class="text-white px-4 hover:underline">Over ons</a>
            <a href="/contact" class="text-white px-4 hover:underline">Contact</a>
        </div>
    </div>
</nav>

<div class="container mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
    <h1 class="text-2xl font-bold mb-4 text-red-600">Reserveren voor Evenement</h1>
    <form method="POST" action="{{ route('event.reserve.submit', ['slug' => $event->slug]) }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Naam</label>
            <input type="text" id="name" name="name" class="p-2 border border-gray-300 rounded w-full" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">E-mail</label>
            <input type="email" id="email" name="email" class="p-2 border border-gray-300 rounded w-full" required>
        </div>
        <div class="mb-4">
            <label for="event" class="block text-gray-700">Evenement</label>
            <select id="event" name="event" class="p-2 border border-gray-300 rounded w-full" required>
                <option value="Rotterdam Rave Kick-off 2025">Rotterdam Rave Kick-off 2025</option>
                <option value="Verknipt Ziggo Dome 2025">Verknipt Ziggo Dome 2025</option>
                <option value="Karnaval Festival Zaterdag 2025">Karnaval Festival Zaterdag 2025</option>
                <option value="Karnaval Festival Zondag 2025">Karnaval Festival Zondag 2025</option>
            </select>
        </div>
        <input type="hidden" name="festival" value="{{ $event->slug }}">

        <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded">Reserveer</button>
    </form>

</div>
<form action="{{ route('submitReservation') }}">
    @csrf
    <!-- Formuliervelden voor reservering -->
    <button type="submit">Reserveer</button>
</form>

</body>
</html>
