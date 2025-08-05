<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'name',
        'category',
        'brand',
        'price',
    ];

    public function comments()
    {
        return $this->morphToMany(Comment::class, 'commentable');
    }
}
