<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Deze methode wordt aangeroepen na succesvolle authenticatie
    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('home'); // Leid de gebruiker naar de homepage
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect('/login'); // Redirect naar loginpagina na uitloggen
    }

    public function create()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }
}
