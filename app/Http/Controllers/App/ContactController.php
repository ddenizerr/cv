<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('app.contact.index');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Send email
        Mail::to('ddenizer14@gmail.com')->send(new ContactFormMail($validatedData));

        return redirect()->route('contact.form')->with('success', 'Message sent successfully!');
    }
}
