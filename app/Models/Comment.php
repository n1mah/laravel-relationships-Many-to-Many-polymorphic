<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'name',
        'text',
        'score',
    ];

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'commentable');
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'commentable');
    }

    public function videos()
    {
        return $this->morphedByMany(Video::class, 'commentable');
    }
}
