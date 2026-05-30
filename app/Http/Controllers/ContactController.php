<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:10000'],
        ]);

        $contactMessage = ContactMessage::create($validated);

        try {
            Mail::send(new ContactFormMail($contactMessage));
        } catch (\Exception $e) {
            // Log the error but don't block the submission
            logger()->error('Failed to send contact form email: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for your message. We will get back to you within 24 hours.');
    }
}
