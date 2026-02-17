<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ranjan-admin-portal', [MediaController::class, 'index'])->name('admin.media');
Route::post('/media', [MediaController::class, 'store'])->name('media.store');

Route::delete('/media/{id}', [MediaController::class, 'destroy'])->name('media.destroy');

Route::post('/reviews', [\App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/vellore-sites', [HomeController::class, 'velloreSites'])->name('vellore-sites');
Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');
Route::get('/amenities', [HomeController::class, 'amenities'])->name('amenities');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

