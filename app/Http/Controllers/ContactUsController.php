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

        Mail::raw('Test emails that is used to see data in Mailhog!', function($message) {
        $message->to('test@test.com');
        });

        return redirect(route('contactUs.show'))
        ->with('success', 'The message was sent!')
        ->withInput($data);
    }
}

