<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\Product;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Post Route
Route::get('/posts', function () {
    return Post::with('comments')->get();
});

Route::get('/post/create', function () {
    return Post::create([
        'title' => 'Laravel 12',
        'body' => 'This is laravel 12 . lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet',
        'writer' => 'Nima',
    ]);
});

Route::get('/post/{post}/comment/create', function (Post $post) {
    return $post->comments()->create([
        'name' => 'sara',
        'text' => 'Very Good Article',
        'score' => 5,
    ]);
});

//Product Route
Route::get('/product/create', function () {
    return Product::create([
        'name'=> 'Macbook Pro',
        'category' => 'Laptop',
        'brand' => 'Apple',
        'price' => '1900',
    ]);
});

Route::get('/product/{product}/comment/create', function (Product $product) {
    return $product->comments()->create([
        'name' => 'meri',
        'text' => 'Not Usable',
        'score' => 2,
    ]);
});

//Video Route
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

Route::get('/video/{video}/comment/create', function (Video $video) {
    return $video->comments()->create([
        'name' => 'Jay',
        'text' => 'Lorem',
        'score' => 4,
    ]);
});


