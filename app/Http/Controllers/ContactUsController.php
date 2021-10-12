<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
        return view('pages/contactUs');
    }

    public function storeContactInfo (ContactUsRequest $request)
    {
        // $contactUsData = $request -> validated();

        \Log::debug($request->all());
        \Log::info($request->validated());

        return redirect(route('contactUs.show'))->with('success', 'The message was sent!');
    }
}

