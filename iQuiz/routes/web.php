<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Auth routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard and profile routes
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('profile/profile');
})->name('profile');



// Route for available exams
Route::get('/category/available-exams', [CardController::class, 'showAvailableExams'])->name('category.available-exams');

// Route for join exams
Route::get('/category/join', [CardController::class, 'showJoinExams'])->name('category.join');


// History route
Route::get('/history', function () {
    return view('history/history');
})->name('history');

require __DIR__.'/auth.php';
