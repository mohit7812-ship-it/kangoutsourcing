<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email|max:180',
            'phone'   => 'nullable|string|max:40',
            'country' => 'nullable|string|max:80',
            'message' => 'required|string|max:3000',
        ]);

        // Sends a plain-text notification to the business inbox.
        // Configure MAIL_* variables in .env before this goes live.
        try {
            Mail::raw(
                "New enquiry from {$data['name']} ({$data['email']})\n".
                "Phone: ".($data['phone'] ?? '-')."\n".
                "Country: ".($data['country'] ?? '-')."\n\n".
                $data['message'],
                function ($message) use ($data) {
                    $message->to(config('mail.business_inbox', 'info@kangoutsourcing.com.au'))
                        ->subject('New website enquiry — '.$data['name'])
                        ->replyTo($data['email'], $data['name']);
                }
            );
        } catch (\Throwable $e) {
            // Fail quietly on mail errors so the form still confirms to the
            // user — check storage/logs/laravel.log if mail isn't arriving.
            report($e);
        }

        return back()->with('status', 'Thanks — your message has been sent. We\'ll get back to you within one business day.');
    }
}
