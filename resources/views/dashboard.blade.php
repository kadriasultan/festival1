@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <style>
        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
        }
    </style>
    <div class="container mt-5">
        <div class="bg-white shadow-md rounded-lg p-6 transition-transform transform hover:scale-105 duration-300 ease-in-out">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Welkom op je dashboard, {{ Auth::user()->name }}!</h1>
            <p class="text-gray-600">Dit is je persoonlijke dashboard.</p>
        </div>
    </div>
    <div class="container mx-auto p-6">
        <!-- Welkom Bericht -->
        <div class="mb-6 text-center" style="margin: 3%">
            <h1 class="text-4xl font-bold mb-2 text-gray-800">Welkom bij Partybussen!</h1>
            <p class="text-lg text-gray-700">Jouw avontuur begint hier. Organiseer eenvoudig jouw ideale busreis en maak herinneringen die een leven lang meegaan!</p>
        </div>

        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-6">
                <img src="{{ asset('images/concert-4768496_960_720.jpg') }}" alt="Busreis" class="rounded-lg shadow-md w-full h-auto">
            </div>
            <div class="md:w-1/2 md:pl-6">
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Organiseer je eigen busreis en verdien tot € 180,00 +</h2>
                <p class="mb-4 text-gray-700">Organiseer gemakkelijk en snel een eigen busreis. Jij bepaalt de opstapplaatsen en vertrektijden.</p>
                <p class="mb-4 text-gray-700">Samen kijken we naar jouw ideale bus. Je krijgt een eigen webpagina en ticketshop.</p>
                <p class="mb-4 text-gray-700">Via een app kun je zien wie er al geboekt heeft. Met dezelfde app scan je iedereen bij het instappen.</p>
                <p class="mb-4 text-gray-700">We onderhouden persoonlijk contact via Whatsapp. Jij bent de promotor van jouw eigen busreis.</p>
                <p class="mb-4 text-gray-700">Wij regelen verder ALLES voor jou!</p>
            </div>
        </div>

        <!-- Extra Informatie Sectie -->
        <div class="mt-12 bg-gray-50 p-6 rounded-lg shadow-md flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 pr-4"> <!-- 50% breedte voor de tekst -->
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Waarom kiezen voor Partybussen?</h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Flexibiliteit in opstapplaatsen en vertrektijden.</li>
                    <li>Persoonlijke service en ondersteuning.</li>
                    <li>Een gebruiksvriendelijke app voor het beheren van boekingen.</li>
                    <li>Een eigen webpagina en ticketshop voor jouw busreis.</li>
                    <li>Geen zorgen, wij regelen alles voor jou!</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2" style="margin-top: 2%"> <!-- 50% breedte voor de afbeelding -->
                <img src="{{ asset('images/istockphoto-1913125761-1024x1024.jpg') }}" alt="Partybussen" class="rounded-lg shadow-md w-full h-auto">
            </div>
        </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dashboard = document.querySelector('.fade-in');
            dashboard.classList.add('visible');
        });
    </script>
@endsection
