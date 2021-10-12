<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index()
    {
        return view('user.info');
    } 

    public function storeInfo(Request $request)
{
    $validatedInput = $request->validate([
        'hobbies' => 'string|min:3',
        'pets' => 'integer|min:0',
        'milk' => 'required|boolean',
        'wishes' => 'required|array',
        'email' => 'required|email'
    ]);

    session(['validatedInput' => $validatedInput]);
    return redirect('/user/info/stored');
}

    public function stored()
    {
        return view('user.stored', ['validatedInput' => session('validatedInput')]);
    }
}
