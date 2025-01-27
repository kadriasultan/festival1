@extends('layouts.app') <!-- Verwijs naar de hoofd lay-out -->

@section('content')
    <div class="container mx-auto p-6">
        <!-- Welkom Bericht -->
        <div class="mb-6 text-center" style="margin: 3%">
            <h1 class="text-4xl font-bold mb-2 text-gray-800">Welkom bij Partybussen!</h1>
            <p class="text-lg text-gray-700">Jouw avontuur begint hier. Organiseer eenvoudig jouw ideale busreis en maak herinneringen die een leven lang meegaan!</p>
        </div>

        <div class="flex flex-col md:flex-row items-center" >
            <div class="md:w-1/2 mb-6">
                <img src="{{ asset('images/concert-4768496_960_720.jpg') }}" alt="Busreis" class="rounded-lg shadow-md w-full h-auto">
            </div>
            <div class="md:w-1/2 md:pl-6">
                <h2 class="text-3xl font-bold mb-4 text-gray-800" ">Organiseer je eigen busreis en verdien tot € 180,00 +</h2>
                <p class="mb-4 text-gray-700">Organiseer gemakkelijk en snel een eigen busreis. Jij bepaalt de opstapplaatsen en vertrektijden.</p>
                <p class="mb-4 text-gray-700">Samen kijken we naar jouw ideale bus. Je krijgt een eigen webpagina en ticketshop.</p>
                <p class="mb-4 text-gray-700">Via een app kun je zien wie er al geboekt heeft. Met dezelfde app scan je iedereen bij het instappen.</p>
                <p class="mb-4 text-gray-700">We onderhouden persoonlijk contact via Whatsapp. Jij bent de promotor van jouw eigen busreis.</p>
                <p class="mb-4 text-gray-700">Wij regelen verder ALLES voor jou!</p>
            </div>
        </div>

        <!-- Extra Informatie Sectie -->
        <div class="mt-12 bg-gray-50 p-6 rounded-lg shadow-md text-center">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Waarom kiezen voor Partybussen?</h2>
            <ul class="list-disc list-inside text-gray-700 mx-auto">
                <li>Flexibiliteit in opstapplaatsen en vertrektijden.</li>
                <li>Persoonlijke service en ondersteuning.</li>
                <li>Een gebruiksvriendelijke app voor het beheren van boekingen.</li>
                <li>Een eigen webpagina en ticketshop voor jouw busreis.</li>
                <li>Geen zorgen, wij regelen alles voor jou!</li>
            </ul>
        </div>


        <!-- Social Media -->
        <div class="mt-12 text-center">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Volg ons op sociale media!</h2>
            <p class="mb-6 text-gray-600">Blijf op de hoogte van het laatste nieuws en aanbiedingen.</p>
            <div class="flex justify-center space-x-6">
                <a href="https://www.facebook.com" target="_blank" class="flex items-center text-blue-600 hover:text-blue-800 transition duration-200 text-lg">
                    <i class="fab fa-facebook-f mr-2"></i> Facebook
                </a>
                <a href="https://www.instagram.com" target="_blank" class="flex items-center text-pink-600 hover:text-pink-800 transition duration-200 text-lg">
                    <i class="fab fa-instagram mr-2"></i> Instagram
                </a>
                <a href="https://www.twitter.com" target="_blank" class="flex items-center text-blue-400 hover:text-blue-600 transition duration-200 text-lg">
                    <i class="fab fa-twitter mr-2"></i> Twitter
                </a>
            </div>
        </div>
    </div>
@endsection
