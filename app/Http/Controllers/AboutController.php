<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('over_ons'); // Zorg ervoor dat je de juiste view-naam gebruikt
    }
}
