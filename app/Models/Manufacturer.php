<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $attributes =[
        'name' => 'Another default value',
        'description' => '',
        'active' => true,
    ];

    protected $fillable =[
        'name',
        'description',
        'active',
    ];

 }
