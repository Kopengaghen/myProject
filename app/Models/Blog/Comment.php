<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
    ];

    use HasFactory;

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }
}
