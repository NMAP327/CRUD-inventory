<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"=> "About",
        "name" => "Nadya Melania",
        "email" => "nadyamelania@gmail.com",
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Nadya Melania",
            "body" => "Ipsum non id quis deserunt exercitation nostrud labore fugiat occaecat irure. Incididunt aliquip ex ad nulla nisi. Velit tempor velit culpa aute magna dolore est mollit minim voluptate labore quis sint. Minim irure sit velit consectetur velit occaecat. Eu aliquip deserunt nostrud minim. Mollit incididunt velit consequat minim nulla do laborum enim dolore nisi nostrud dolore." 
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Reyhan Fikri",
            "body" => "Ipsum non id quis deserunt exercitation nostrud labore fugiat occaecat irure. Incididunt aliquip ex ad nulla nisi. Velit tempor velit culpa aute magna dolore est mollit minim voluptate labore quis sint. Minim irure sit velit consectetur velit occaecat. Eu aliquip deserunt nostrud minim. Mollit incididunt velit consequat minim nulla do laborum enim dolore nisi nostrud dolore." 
        ]
    ];

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});