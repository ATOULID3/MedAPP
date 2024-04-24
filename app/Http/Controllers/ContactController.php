<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('mail.contactus');
    }
    public function submitForm(){
        $formData = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email
        Mail::to(request('email'))->send(new ContactFormSubmitted($formData));

        // Redirect back with success message
        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully.');

    }
}
