<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Models\ContactMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Handles displaying and processing the website contact form.
 */
class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index(): View
    {
        return view('pages.contact');
    }

    /**
     * Validate, store, and email a submitted contact inquiry.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^[6789][0-9]{9}$/'],
            'message' => ['required', 'string'],
        ]);

        $contactMessage = ContactMessage::create($validated);

        try {
            Mail::to('krishnatex14@gmail.com')->send(new ContactFormSubmitted($contactMessage));
        } catch (\Throwable $e) {
            // Keep inquiry persisted even if local mail transport is unconfigured.
            report($e);
        }

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
