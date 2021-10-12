<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
    ];
    use HasFactory;

    public function articles()
    {
        return $this->hasMany(Article::class);  
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
