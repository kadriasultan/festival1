@extends('layouts.app')

@section('title', 'Reserveer voor ' . $event->name)

@section('content')

    <h2>Reserveer voor {{ $event->name }}</h2>

    <form action="{{ route('events.reserve.store', $event->slug) }}" method="POST">
        @csrf
        <div>
            <label for="name">Naam:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">E-mailadres:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="guests">Aantal Personen:</label>
            <input type="number" name="guests" id="guests" min="1" required>
        </div>
        <button type="submit">Reserveer</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
