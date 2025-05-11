<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', [ServiceController::class, 'index'])->name('home');
Route::get('/search', [ServiceController::class, 'search'])->name('services.search');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Keep these if using authentication
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');