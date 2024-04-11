<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
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

    Route::get('mycourses', [CourseController::class, 'mycourses'])->name('course.mycourses');
    Route::get('mycourses/bn', [CourseController::class, 'mycoursesBN'])->name('course.mycourses.bn');

    Route::get('favcourses', [CourseController::class, 'favcourses'])->name('course.favcourses');
    Route::get('favcourses/bn', [CourseController::class, 'favcoursesBN'])->name('course.favcourses.bn');
});

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';
