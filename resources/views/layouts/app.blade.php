<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">

<!-- Header met het herbruikbare menu -->
<header>
    <nav class="bg-red-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-lg font-bold">Partybussen</div>

            <!-- Hamburger Menu voor mobiele schermen -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu voor grotere schermen (vanaf 768px en groter) -->
            <div class="hidden md:flex md:items-center md:space-x-4" id="menu">
                <a href="{{ route('home') }}" class="text-white px-4 hover:underline">Home</a>
                <a href="{{ route('about') }}" class="text-white px-4 hover:underline">Over Ons</a>
                <a href="{{ route('contact.index') }}" class="text-white px-4 hover:underline">Contact</a>

                @if (Auth::check())
                    <a href="/events" class="text-white px-4 hover:underline">Evenementen</a>
                    <a href="/busreis" class="text-white px-4 hover:underline">Busreis</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-white px-4 hover:underline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-white px-4 hover:underline">Inloggen</a>
                    <a href="{{ route('register') }}" class="text-white px-4 hover:underline">Registreren</a>
                @endif
            </div>
        </div>

        <!-- Het uitklapbare mobiele menu, standaard verborgen (hidden) -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="flex flex-col items-center py-2">
                <a href="{{ route('home') }}" class="text-white py-2">Home</a>
                <a href="{{ route('about') }}" class="text-white py-2">Over Ons</a>
                <a href="{{ route('contact.index') }}" class="text-white py-2">Contact</a>

                @if (Auth::check())
                    <a href="/events" class="text-white py-2">Evenementen</a>
                    <a href="/busreis" class="text-white py-2">Busreis</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-white py-2">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-white py-2">Inloggen</a>
                    <a href="{{ route('register') }}" class="text-white py-2">Registreren</a>
                @endif
            </div>
        </div>
    </nav>

    <script>
        // JavaScript voor het in- of uitklappen van het hamburger-menu
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        menuToggle.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");  // Dit toont of verbergt het menu
        });
    </script>
</header>

<!-- Inhoud van de pagina -->
<main>
    @yield('content') <!-- Dit is waar de specifieke inhoud van elke pagina komt -->
</main>

<!-- Footer -->
<footer class="bg-red-600 text-center text-white py-4 mt-12">
    <p>&copy; {{ date('Y') }} Festival Travel System</p>
</footer>

</body>
</html>
