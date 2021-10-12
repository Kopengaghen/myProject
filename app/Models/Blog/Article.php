<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Article extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'body', 
        'description',
        'published_at',
        'image',
        'author_id',
        'category_id',
    ];

    public function getImageUrlAttribute()
    {
        return \Illuminate\Support\Facades\Storage::url($this->image);
    }

    public function getPublishedAtAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
