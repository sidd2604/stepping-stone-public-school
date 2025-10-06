<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email'
        ]);

        $token = Str::random(32);

        NewsletterSubscriber::create([
            'email' => $request->email,
            'token' => $token,
        ]);

        $verificationLink = url('/verify-newsletter/' . $token);

        Mail::send('pages.emails.newsletterVerification', ['link' => $verificationLink], function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Verify Your Newsletter Subscription');
        });

        return response()->json(['success' => true, 'message' => 'Verification email sent successfully!']);
    }

    public function verify($token)
    {
        $subscriber = NewsletterSubscriber::where('token', $token)->first();

        if (!$subscriber) {
            return view('pages.emails.verificationStatus', ['status' => 'Invalid or expired verification link.']);
        }

        $subscriber->update([
            'is_verified' => true,
            'token' => null
        ]);

        return view('pages.emails.verificationStatus', ['status' => 'Your email has been successfully verified!']);
    }
}
