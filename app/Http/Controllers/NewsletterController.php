<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        $exists = NewsletterSubscriber::where('email', $validated['email'])->exists();

        if ($exists) {
            return back()->with('info', 'This email is already subscribed to our newsletter.');
        }

        NewsletterSubscriber::create([
            'email' => $validated['email'],
            'subscribed_at' => now(),
        ]);

        return back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
