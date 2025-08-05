<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'writer',
    ];

    public function comments()
    {
        return $this->morphToMany(Comment::class, 'commentable');
    }
}
