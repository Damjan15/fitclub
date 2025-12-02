<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:15',
            'phone' => 'required|regex:/^[0-9+\-\s()]+$/',
            'email' => 'required|email',
            'message' => 'nullable|string',
        ]);

        // Send email
        Mail::to('admin@fitclub-coaching.com')->send(new ContactMessage($validated));

        return redirect()->route('contact')->with('success', 'Your message has been sent succesfully!');
    }
}
