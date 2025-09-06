<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "hello world dari laravel";
});

Route::get('/hello', function () {
    return "nama saya nendi setiandi";
});