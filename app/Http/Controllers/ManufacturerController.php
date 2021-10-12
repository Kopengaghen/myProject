<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Moldels\Manufacturer;
// use Illuminate\Http\Request;


class ManufacturerController extends Controller
{
    public function create()
    {
        // $manufacturer = new Manufacturer();
        // $manufacturer->name = 'Test';
        // $manufacturer->description = 'Test description';
        // $manufacturer->active = true;
        // $manufacturer->save();

        // dd($manufacturer);

        $manufacturer = Manufacturer::create([
            'name' => 'Test',
            'description' => 'Test description',
            'active' => false,
        ]);

        dd($manufacturer->toArray());
    }
}
