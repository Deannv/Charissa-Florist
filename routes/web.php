<?php

use App\Http\Controllers\HomeController;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/send', [HomeController::class, 'send'])->name('send');
