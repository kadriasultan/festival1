<?php $__env->startSection('content'); ?>
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
        <h1 class="text-3xl font-bold mb-4">Over Ons</h1>

        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 pr-4"> <!-- Tekst sectie -->
                <p class="mb-4 text-gray-800 leading-relaxed">
                    Rotterdam, 30 juli 2024 - Het gedoe van je bus niet kunnen vinden na een dag vol muziek en plezier is verleden tijd! Partybussen en Appic introduceren de baanbrekende ‘Find my Bus’-functie, speciaal ontworpen voor festivalgangers. Met deze nieuwe functie kunnen passagiers die met Partybussen reizen, via de Appic app eenvoudig hun bus terugvinden op een virtuele festivalkaart.
                </p>

                <h2 class="text-lg font-semibold mb-2">Belangrijke voordelen van Find my Bus:</h2>
                <ul class="list-disc list-inside mb-4 text-gray-800">
                    <li>Zekerheid: Niemand hoeft de terugreis te missen.</li>
                    <li>Informatie: Belangrijke updates over de busreis.</li>
                    <li>Tijdbesparing: Snel de bus vinden zonder onnodig zoeken.</li>
                    <li>Gebruiksvriendelijk: Virtuele festivalkaart met de locatie van de bus, simpel te gebruiken na een intensieve dag.</li>
                    <li>Gezelligheid: Voor de busreis in contact met de medepassagiers.</li>
                </ul>

                <p class="mb-4 text-gray-800 leading-relaxed">
                    "Ons doel is om festivalgangers een fantastische ervaring te bieden, vanaf het begin van hun reis tot het einde. Met de ‘Find my Bus’-functie kunnen passagiers zich volledig focussen op het genieten van een mooie festivaldag, zonder zich zorgen te hoeven maken over de heen- en terugreis," aldus Partybussen & Appic.
                </p>

                <h2 class="text-lg font-semibold mb-2">Over Partybussen x Appic</h2>
                <p class="mb-4 text-gray-800 leading-relaxed">
                    De Appic-app helpt gebruikers om de beste festivals, evenementen en clubs te vinden en zorgt ervoor dat zij geen enkel feest hoeven te missen. Ook biedt de Appic-app belangrijke informatie voor een zorgeloos uitje. Partybussen sluit hier perfect op aan met hun busvervoer naar festivals en concerten. De busreizen van Partybussen zijn gezellig en een ideale manier om samen met vrienden naar muziekevenementen te gaan.
                </p>

                <p class="mb-4 font-bold text-gray-800">Geen zorgen, veel plezier!</p>

                <h2 class="text-lg font-semibold mb-2">Neem Contact Met Ons Op</h2>
                <p class="mb-4 text-gray-800">Voor meer informatie kunt u contact opnemen via het contactformulier.</p>
            </div>

            <div class="md:w-1/2"> <!-- Formulier sectie -->
                <form method="POST" action="<?php echo e(route('contact.submit')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Naam:</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Naam...">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres:</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="E-mailadres...">
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Telefoonnummer:</label>
                        <input type="tel" id="phone" name="phone" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Telefoonnummer...">
                        <div class="mb-4">
                            <label for="subject" class="block text-sm font-medium text-gray-700">Onderwerp:</label>
                            <input type="text" id="subject" name="subject" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Onderwerp...">
                        </div>

                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700">Bericht:</label>
                            <textarea id="message" name="message" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Bericht..."></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" id="captcha" name="captcha" required class="form-checkbox h-5 w-5 text-blue-600" />
                                <span class="ml-2 text-sm font-medium text-gray-700">Ik ben geen robot</span>
                            </label>
                        </div>

                        <button type="submit" class="w-full bg-red-800 text-white px-4 py-2 rounded hover:bg-red-400 transition duration-300">Verstuur</button>
                </form>

                <?php if(session('success')): ?>
                    <div class="mt-4 p-4 bg-green-100 text-green-700 border border-green-300 rounded">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kadri\Desktop\festival1\resources\views/about.blade.php ENDPATH**/ ?>