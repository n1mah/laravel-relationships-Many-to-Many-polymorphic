<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable=[
        'title',
        'url',
        'description',
        'cover',
        'author',
        'views',
    ];

    public function comments()
    {
        return $this->morphToMany(Comment::class, 'commentable');
    }
}
