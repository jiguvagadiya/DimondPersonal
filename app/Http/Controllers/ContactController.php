<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::send([], [], function ($message) use ($request) {
            $message->to('jinal.abril@gmail.com') // replace with your receiving email
                ->subject('New Contact Message from Diamond Website')
                ->setBody(
                    "<h3>Contact Message</h3>
                    <p><strong>Name:</strong> {$request->name}</p>
                    <p><strong>Email:</strong> {$request->email}</p>
                    <p><strong>Message:</strong><br>{$request->message}</p>",
                    'text/html'
                );
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
