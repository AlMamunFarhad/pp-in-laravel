<?php

namespace App\Http\Controllers;

use App\Mail\PortfolioEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Show contact form
    public function contact()
    {
        return view('layouts.contact');
    }

    // Send email method
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'messages' => 'required',
        ]);

        $toEmail = "farhadmikky@gmail.com";

        $response =  Mail::to($toEmail)->send(new PortfolioEmail($request->all()));

        if ($response) {
            return back()->with('success', 'Thank you for contacting us.');
        } else {
            return back()->with('danger', 'Unable to submit form, Please try again.');
        }
    }
}
