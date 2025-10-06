<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function sendEmail(){
        // code to send email

        $to = "siddharthsharmaofficial2@gmail.com";
        $message = "Test message from Laravel Mailer";
        $subject = "Testing Email from Laravel";

        Mail::to($to)->send(new WelcomeEmail($message, $subject));
    }
}
