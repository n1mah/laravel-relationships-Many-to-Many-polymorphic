<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/create', function () {
    return Post::create([
        'title' => 'Laravel 12',
        'body' => 'This is laravel 12 . lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet',
        'writer' => 'Nima',
    ]);
});

