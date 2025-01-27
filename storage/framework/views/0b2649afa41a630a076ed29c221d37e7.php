<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busreis Organiseren</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-red-100">
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
    <h1 class="text-2xl font-bold mb-4">Busreis Organiseren</h1>

    <div class="flex flex-col md:flex-row">
        <div class="md:w-1/2 md:pr-4">
            <p class="mb-6">Gezellig en comfortabel met je vriendengroep naar een festival? Organiseer een busreis via Partybussen.nl en verdien tot € 100,- CASH! Hoe meer passagiers je in de bus krijgt, hoe korter de reistijd zal zijn, en hoe hoger je beloning. Partybussen.nl regelt de rest!</p>

            <h2 class="text-lg font-semibold mb-2">Voordelen van je eigen busreis</h2>
            <ul class="list-disc list-inside mb-4">
                <li>Al je vrienden gezellig in één bus</li>
                <li>Een beloning tot € 100,-</li>
                <li>Geen financieel risico</li>
                <li>Niet afhankelijk van het openbaar vervoer</li>
                <li>Jij bepaalt de muziek in de bus</li>
            </ul>

            <h2 class="text-lg font-semibold mb-2">Ontvang vrijblijvend meer info!</h2>
            <p class="mb-4">Lijkt het je wat? Vul geheel vrijblijvend je naam en telefoonnummer in en we nemen zo snel mogelijk contact met je op.</p>
        </div>

        <div class="md:w-1/2">
            <form method="POST" action="<?php echo e(route('busreis.submit')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Naam:</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Naam...">
                </div>

                <div class="mb-4">
                    <label for="event" class="block text-sm font-medium text-gray-700">Evenement:</label>
                    <input type="text" id="event" name="event" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Evenement...">
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefoonnummer:</label>
                    <input type="tel" id="phone" name="phone" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Telefoonnummer...">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres:</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="E-mailadres...">
                </div>

                <div class="mb-4">
                    <label for="departure_location" class="block text-sm font-medium text-gray-700">Vertreklocatie:</label>
                    <input type="text" id="departure_location" name="departure_location" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Vertreklocatie...">
                </div>

                <div class="mb-4">
                    <label for="passengers" class="block text-sm font-medium text-gray-700">Verwacht aantal passagiers:</label>
                    <input type="number" id="passengers" name="passengers" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Verwacht aantal passagiers...">
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" id="captcha" name="captcha" required class="form-checkbox h-5 w-5 text-blue-600" />
                        <span class="ml-2 text-sm font-medium text-gray-700">Ik ben geen robot</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition duration-300 ease-in-out">Verzenden</button>
            </form>
        </div>
    </div>
</div>

<footer class="bg-red-600 text-white text-center py-4 mt-10">
    <p>&copy; <?php echo e(now()->year); ?> Partybussen.nl. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>
<?php /**PATH C:\Users\kadri\Desktop\festival1\resources\views/busreis.blade.php ENDPATH**/ ?>