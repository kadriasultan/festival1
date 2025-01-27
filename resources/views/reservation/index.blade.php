@extends('layouts.app')

@section('content')
    <h1>Reservering voor {{ $concert->name ?? 'Onbekend concert' }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('concert.reserve.submit', ['slug' => $concert->slug]) }}">
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
            <label for="concert" class="block text-gray-700">Concert</label>
            <input type="text" id="concert" name="concert" value="{{ $concert->name }}" class="p-2 border border-gray-300 rounded w-full" readonly>
        </div>
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Reserveer</button>
    </form>

    <ul>
        @foreach ($busreizen as $busreis)
            <li>{{ $busreis->name }} - {{ $busreis->date }}</li>
        @endforeach
    </ul>
@endsection
