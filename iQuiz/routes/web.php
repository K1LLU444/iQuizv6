<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/category/available-exams', [CardController::class, 'showAvailableExams'])->name('category.available-exams');
Route::get('/category/join', [CardController::class, 'showJoinExams'])->name('category.join');

Route::get('/history', function () {
    return view('history/history');
})->name('history');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/all-category', [AdminController::class, 'allCategory'])->name('admin.all-category');


Route::get('/admin/add-category', function () {
    return view('admin.add-category');
})->name('admin.add-category');

Route::get('/admin/add-trainer', function () {
    return view('admin.add-trainer');
})->name('admin.add-trainer');

Route::get('/admin/all-trainers', function () {
    return view('admin.all-trainers');
})->name('admin.all-trainers');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/confirm-delete/{id}', [AdminController::class, 'showCategoryDeleteConfirmation'])->name('admin.category.confirm-delete');
Route::delete('/admin/delete/{id}', [AdminController::class, 'deleteCategory'])->name('admin.category.delete');

Route::get('/admin/add-questionnaire', function () {
    return view('admin.add-questionnaire');
})->name('admin.add-questionnaire');

require __DIR__.'/auth.php';
