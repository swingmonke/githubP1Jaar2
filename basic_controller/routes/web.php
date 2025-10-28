<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('Pages.home');
Route::get('/contact', [PageController::class, 'contact'])->name('Pages.contact');
Route::get('/about_us', [PageController::class, 'aboutUs'])->name('Pages.aboutUs');
Route::get('/our_team', [PageController::class, 'ourTeam'])->name('Pages.ourTeam');