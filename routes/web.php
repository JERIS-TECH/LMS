<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bn', function () {
    return view('welcome-bn');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/bn', [ProfileController::class, 'editBN'])->name('profile.edit.bn');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('course/{course_id}/preview', [CourseController::class, 'preview'])->name('course.preview');
Route::get('course/{course_id}/preview/bn', [CourseController::class, 'previewBN'])->name('course.preview.bn');

Route::middleware('auth')->group(function () {
    Route::get('course/{course_id}/checkout', [CourseController::class, 'checkout'])->name('course.checkout');
    Route::get('course/{course_id}/checkout/bn', [CourseController::class, 'checkoutBN'])->name('course.checkout.bn');
});

require __DIR__.'/auth.php';
