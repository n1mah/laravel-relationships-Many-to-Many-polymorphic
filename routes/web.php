<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\Product;
use App\Models\Video;
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

Route::get('/product/create', function () {
    return Product::create([
        'name'=> 'Macbook Pro',
        'category' => 'Laptop',
        'brand' => 'Apple',
        'price' => '1900',
    ]);
});

Route::get('/video/create', function () {
    return Video::create([
        'title' => 'Video Episode 1',
        'url' => 'https://nimaheidari.com/s1/es1/',
        'description'=>'lorem ipsum dolor sit amet lorem ipsum dolor sit amet',
        'cover'=>'https://nimaheidari.com/s1/es1/cover.jpg',
        'author'=>'Nima Heidari',
        'views'=>11,
    ]);
});


