@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
        <h1 class="text-3xl font-bold mb-4">Inloggen</h1>

        <!-- Foutmeldingen weergeven -->
        @if ($errors->any())
            <div class="mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- resources/views/auth/login.blade.php -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">E-mailadres</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit">Inloggen</button>
        </form>

    </div>
@endsection
