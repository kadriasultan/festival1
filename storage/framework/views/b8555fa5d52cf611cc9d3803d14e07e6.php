<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenementen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-red-100"> <!-- Warme achtergrondkleur -->

<nav class="bg-red-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <!-- Voeg hier je logo toe -->
            <img src="path_to_your_logo.png" alt="Logo" class="h-8 mr-2">
            <div class="text-white text-lg font-bold">Partybussen</div>
        </div>

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
            <a href="/" class="text-white px-4 hover:underline">Home</a>
            <a href="/events" class="text-white px-4 hover:underline">Evenementen</a>
            <a href="/busreis" class="text-white px-4 hover:underline">Busreis</a>
            <a href="/about" class="text-white px-4 hover:underline">Over ons</a>
            <a href="/contact" class="text-white px-4 hover:underline">Contact</a>

            <!-- Uitlogknop -->
            <form action="/logout" method="POST" class="inline">
                <?php echo csrf_field(); ?>
                <button type="submit" class="text-white px-4 hover:underline">Logout</button>
            </form>
        </div>
    </div>

    <!-- Het uitklapbare mobiele menu, standaard verborgen (hidden) -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="flex flex-col items-center py-2">
            <a href="/" class="text-white py-2">Home</a>
            <a href="/events" class="text-white py-2">Evenementen</a>
            <a href="/busreis" class="text-white py-2">Busreis</a>
            <a href="/about" class="text-white py-2">Over ons</a>
            <a href="/contact" class="text-white py-2">Contact</a>

            <!-- Uitlogknop voor mobiel -->
            <form action="/logout" method="POST" class="inline">
                <?php echo csrf_field(); ?>
                <button type="submit" class="text-white py-2">Logout</button>
            </form>
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

<div class="container mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
    <h1 class="text-2xl font-bold mb-4 text-red-600">Aankomende Evenementen</h1> <!-- Warme tekstkleur -->
    <p class="mb-6 text-gray-700">Partybussen organiseert sinds 2010 busreizen met luxe touringcars naar georganiseerde muziekfestivals. Uit ervaring weten we wat de belangrijke ingrediënten zijn voor een succesvolle busreis, zoals een leuke buschauffeur en een muziekje aan. Wij faciliteren hier zo goed mogelijk in zodat jullie er zelf een feestje van kunnen maken in de bus!</p>

    <h2 class="text-lg font-semibold mb-2 text-red-500">Zoek een festival</h2> <!-- Warme tekstkleur -->
    <input type="text" id="search" placeholder="Begin met typen..." class="mb-4 p-2 border border-gray-300 rounded w-full">

    <ul id="eventList">
        <li class="event-item mb-4 p-4 border border-gray-300 rounded bg-red-50">
            <h3 class="event-name text-xl font-semibold text-red-600">Rotterdam Rave Kick-off 2025</h3>
            <p class="text-gray-600">februari 2025</p>
            <p class="mt-2">Bus naar Rotterdam Rave Kick-off 2025</p>
            <div class="mt-4">
                <a href="<?php echo e(route('reserve', ['slug' => 'rotterdam-rave-kick-off-2025'])); ?>" style="background: #c94a39; color: white;" class="px-4 py-2 rounded inline-block">Reserve</a>
            </div>
        </li>

        <li class="event-item mb-4 p-4 border border-gray-300 rounded bg-red-50">
            <h3 class="event-name text-xl font-semibold text-red-600">Verknipt Ziggo Dome 2025</h3>
            <p class="text-gray-600">februari 2025</p>
            <p class="mt-2">Bus naar Verknipt Ziggo Dome 2025</p>
            <div class="mt-4">
                <a href="<?php echo e(route('reserve', ['slug' => 'verknipt-ziggo-dome-2025'])); ?>" style="background: #c94a39; color: white;" class="px-4 py-2 rounded inline-block">Reserve</a>
            </div>
        </li>

        <li class="event-item mb-4 p-4 border border-gray-300 rounded bg-red-50">
            <h3 class="event-name text-xl font-semibold text-red-600">Karnaval Festival Zaterdag 2025</h3>
            <p class="text-gray-600">maart 2025</p>
            <p class="mt-2">Bus naar Karnaval Festival Zaterdag 2025</p>
            <div class="mt-4">
                <a href="<?php echo e(route('reserve', ['slug' => 'karnaval-festival-zaterdag-2025'])); ?>" style="background: #c94a39; color: white;" class="px-4 py-2 rounded inline-block">Reserve</a>
            </div>
        </li>

        <li class="event-item mb-4 p-4 border border-gray-300 rounded bg-red-50">
            <h3 class="event-name text-xl font-semibold text-red-600">Karnaval Festival Zondag 2025</h3>
            <p class="text-gray-600">maart 2025</p>
            <p class="mt-2">Bus naar Karnaval Festival Zondag 2025</p>
            <div class="mt-4">
                <a href="<?php echo e(route('reserve', ['slug' => 'karnaval-festival-zondag-2025'])); ?>" style="background: #c94a39; color: white;" class="px-4 py-2 rounded inline-block">Reserve</a>
            </div>
        </li>

    </ul>
</div>

<script>
    document.getElementById('search').addEventListener('input', function (e) {
        const searchValue = e.target.value.toLowerCase();
        const events = document.querySelectorAll('.event-item');

        events.forEach(event => {
            const eventName = event.querySelector('.event-name').textContent.toLowerCase();
            if (eventName.includes(searchValue)) {
                event.style.display = 'block';
            } else {
                event.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>
<?php /**PATH C:\Users\kadri\Desktop\festival1\resources\views/events/index.blade.php ENDPATH**/ ?>