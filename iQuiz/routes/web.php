<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('profile/profile');
})->name('profile');

// Route::prefix('category')->group(function () {
//     Route::view('/', 'category');
//     Route::view('/join', 'category/join')->name('category.join');
//     Route::view('/available-exams', 'category/available-exams')->name('category.available-exams');
// });
Route::get('/category/join', function () {
    return view('category/join');
})->name('category.join');

Route::get('/category/available-exams', function () {
    return view('category/available-exams');
})->name('category.available-exams');

Route::get('/history', function () {
    return view('history/history');
})->name('history');



require __DIR__.'/auth.php';
