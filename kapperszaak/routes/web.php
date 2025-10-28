<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/producten', function () {
    return view('producten');
});
Route::get('/diensten', function () {
    return view('diensten');
});
Route::get('/contact', function () {
    return view('contact');
});