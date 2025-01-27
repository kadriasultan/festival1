<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact'); // Zorg ervoor dat je de juiste view hebt
    }

    public function submit(Request $request)
    {
        return redirect()->back()->with('success', 'Je bericht is succesvol verzonden!');

        // Valideer en verwerk het contactformulier
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Sla de gegevens op in de database
        Contact::create($request->only(['name', 'email', 'phone', 'subject', 'message']));

        // Sla de gegevens op in de sessie voor weergave
        $request->session()->flash('formData', $request->only(['name', 'email', 'phone', 'subject', 'message']));

        return redirect()->back()->with('success', 'Je bericht is succesvol verzonden!');
    }
}
