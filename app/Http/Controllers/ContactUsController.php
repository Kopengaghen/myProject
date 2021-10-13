<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
        return view('pages/contactUs');
    }

    public function storeContactInfo (ContactUsRequest $request)
    {      
        $data = $request->validated();
        $data['messageText'] = $data['message'];

        Mail::send('emails/contactUs', 
        $data,
        function($message) use ($data) {
        $message->to('test@test.com');
        $message->subject('Contact Us request from ' . $data['name'] . ' ' . $data['email']);
        $message->replyTo($data['email']);
        });

        return redirect(route('contactUs.show'))
        ->with('success', 'The message was sent!')
        ->withInput($data);
    }
}

