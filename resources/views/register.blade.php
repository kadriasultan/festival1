<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Naam</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="password_confirmation">Bevestig Wachtwoord</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>
    <button type="submit">Registreren</button>
</form>
