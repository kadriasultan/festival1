<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
public function destroy(Request $request)
{
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();

return redirect('/'); // Redirect naar de homepagina of een andere pagina
}

public function create()
{
return view('auth.login'); // Zorg ervoor dat je een login view hebt
}

public function store(Request $request)
{
$credentials = $request->only('email', 'password');

if (Auth::attempt($credentials)) {
// Login succesvol
return redirect()->route('dashboard'); // Of een andere route
}

// Login mislukt
return back()->withErrors([
'email' => 'Deze gegevens komen niet overeen met onze records.',
]);
}
}
