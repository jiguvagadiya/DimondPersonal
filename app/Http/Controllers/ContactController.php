<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display the contact form.
     */
    public function index()
    {
        return view('contactForm');
    }

    /**
     * Store contact form data.
     */
    public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|digits:10|numeric',
            'message' => 'required|string'
        ]);

        // Store in database (email will be sent via Contact model event)
        Contact::create($request->only(['name', 'email', 'phone', 'message']));

        // Redirect with success message
        return redirect()->back()
            ->with('success', 'Thank you for contacting us. We will get back to you shortly.');
    }
}
