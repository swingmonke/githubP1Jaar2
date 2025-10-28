<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('leveranciers_info', App\Http\Controllers\leveranciers_infoController::class);
