<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Partybussen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-red-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <!-- Voeg hier je logo toe -->
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
    <h1 class="text-2xl font-bold mb-4">Contact</h1>
    <p class="mb-6">Vragen over tickets en busreizen? Neem gerust contact met ons.</p>

    <div class="flex flex-col md:flex-row">
        <!-- Contactgegevens Sectie -->
        <div class="md:w-1/2 md:pr-4 mb-6">
            <h2 class="text-lg font-semibold mb-2">Contactgegevens:</h2>
            <p>E-mail: <a href="mailto:info@partybussen.nl" class="text-blue-600">info@partybussen.nl</a></p>

            <h2 class="text-lg font-semibold mb-2">Openingstijden</h2>
            <p>Maandag t/m vrijdag: 9:30 - 18:00</p>

            <h2 class="text-lg font-semibold mb-2">KvK-nummer</h2>
            <p>86569600</p>

            <h2 class="text-lg font-semibold mb-2">BTW-nummer</h2>
            <p>NL864009380B01</p>

            <h2 class="text-lg font-semibold mb-2">Adres</h2>
            <p>Proveniersstraat 54b, 3033 CM Rotterdam</p>
        </div>

        <!-- Contactformulier Sectie -->
        <div class="md:w-1/2 md:pl-4">
            <h2 class="text-lg font-semibold mb-2">Contactformulier</h2>
            <form method="POST" action="<?php echo e(route('contact.submit')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Naam:</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Naam..." value="<?php echo e(old('name')); ?>">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres:</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="E-mailadres..." value="<?php echo e(old('email')); ?>">
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefoonnummer:</label>
                    <input type="tel" id="phone" name="phone" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Telefoonnummer..." value="<?php echo e(old('phone')); ?>">
                </div>

                <div class="mb-4">
                    <label for="subject" class="block text-sm font-medium text-gray-700">Onderwerp:</label>
                    <input type="text" id="subject" name="subject" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Onderwerp..." value="<?php echo e(old('subject')); ?>">
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Bericht:</label>
                    <textarea id="message" name="message" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Bericht..." rows="4"><?php echo e(old('message')); ?></textarea>
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" id="captcha" name="captcha" required class="form-checkbox h-5 w-5 text-blue-600" />
                        <span class="ml-2 text-sm font-medium text-gray-700">I'm not a robot</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-red-800 text-white px-4 py-2 rounded hover:bg-red-400 transition duration-300">Versturen</button>
            </form>

            <?php if(session('success')): ?>
                <div class="mt-4 p-4 bg-green-100 text-green-700 border border-green-300 rounded">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Google Maps Kaart Sectie -->
    <div class="mt-10">
        <h1 style="text-align: center" class="text-lg font-semibold mb-2">Onze Locatie</h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.123456789012!2d4.123456789012!3d51.123456789012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c123456789abc%3A0x1234567890abcdef!2sProveniersstraat%2054b%2C%203033%20CM%20Rotterdam!5e0!3m2!1snl!2snl!4v1234567890123"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</div>

<footer class="bg-red-600 text-white p-4 mt-10">
    <div class="container mx-auto text-center">
        <p>© Copyright 2009-2025 Partybussen. Alle rechten voorbehouden.</p>
    </div>
</footer>
</body>
</html>
<?php /**PATH C:\Users\kadri\Desktop\festival1\resources\views/contact.blade.php ENDPATH**/ ?>