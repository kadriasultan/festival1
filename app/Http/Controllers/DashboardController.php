<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Controleer of de gebruiker is ingelogd
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Je moet ingelogd zijn om toegang te krijgen tot het dashboard.');
        }

        // Laad de dashboard view
        return view('dashboard');
    }
}
