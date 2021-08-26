<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->hasMany(Category::class);
    }


    public function client()
    {
        return $this->hasMany(Client::class);
    }


    public function location()
    {
        return $this->hasMany(Location::class);
    }
}
