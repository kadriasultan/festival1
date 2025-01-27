<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        // Hier kun je de routes ophalen en doorgeven aan de view
        return view('routes.index'); // Zorg ervoor dat je de juiste view naam gebruikt
    }
}
