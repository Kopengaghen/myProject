<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckEmailApiController extends Controller
{
    public function __invoke(UniqueEmailFormRequest $formRequest)
    {
        $validatedInput = $formRequest->validated();
        /** Check received validated email with the database values */
        return response()->json(['unique' => rand(0,1) === 1 && strlen($validatedInput['email']) > 10]);
    }

}
