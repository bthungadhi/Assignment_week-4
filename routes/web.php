<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

route::get('/welcome', function () {
    return view('welcome');
});
route::get('/contact', function () {
    return view('contact');
});
route::get('/blog', function () {
    return view('blog');
});
route::get('/about', function () {
    return view('about');
});