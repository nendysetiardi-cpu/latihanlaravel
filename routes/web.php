<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello dari laravel';
});

Route::get('/nama', function () {
    return 'Nama saya AhmdSpy Gntng';
});