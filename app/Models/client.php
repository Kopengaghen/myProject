<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;


    public function events()
    {
        return $this->belongsTo(Event::class);
    }

    public function client_info()
    {
        return $this->hasOne(Client_Info::class);
    }

}
