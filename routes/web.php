<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'courses'], function () {
    // student
    Route::get('', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');
    Route::get('/{courseId}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.show');
    Route::get('/{courseId}/lesson/{lessonId}', [App\Http\Controllers\LessonController::class, 'show'])->name('lesson.show');

    // teacher or admin
    Route::get('/create', [App\Http\Controllers\CourseController::class, 'create'])->name('course.create');
    Route::post('/create', [App\Http\Controllers\CourseController::class, 'store'])->name('course.store');
    Route::get('/{courseId}/edit', [App\Http\Controllers\CourseController::class, 'edit'])->name('course.edit');
    Route::put('/{courseId}/edit', [App\Http\Controllers\CourseController::class, 'update'])->name('course.update');
    Route::delete('/{courseId}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('course.delete');

    Route::get('/{courseId}/lesson', [App\Http\Controllers\LessonController::class, 'index'])->name('lesson.index');
    Route::get('/{courseId}/lesson/create', [App\Http\Controllers\LessonController::class, 'create'])->name('lesson.create');
    Route::post('/{courseId}/lesson/create', [App\Http\Controllers\LessonController::class, 'store'])->name('lesson.store');
    Route::get('/{courseId}/lesson/{lessonId}/edit', [App\Http\Controllers\LessonController::class, 'edit'])->name('lesson.edit');
    Route::put('/{courseId}/lesson/{lessonId}/edit', [App\Http\Controllers\LessonController::class, 'update'])->name('lesson.update');
    Route::delete('/{courseId}/lesson/{lessonId}', [App\Http\Controllers\LessonController::class, 'destroy'])->name('lesson.delete');
});

Route::group(['prefix' => 'batches', 'middleware' => 'admin'], function () {
    Route::get('', [App\Http\Controllers\BatchController::class, 'index'])->name('batch.index');
    Route::get('/create', [App\Http\Controllers\BatchController::class, 'create'])->name('batch.create');
    Route::post('/create', [App\Http\Controllers\BatchController::class, 'store'])->name('batch.store');
    Route::get('/{batchId}', [App\Http\Controllers\BatchController::class, 'show'])->name('batch.show');
    Route::get('/{batchId}/edit', [App\Http\Controllers\BatchController::class, 'edit'])->name('batch.edit');
    Route::put('/{batchId}/edit', [App\Http\Controllers\BatchController::class, 'update'])->name('batch.update');
    Route::delete('/{batchId}', [App\Http\Controllers\BatchController::class, 'destroy'])->name('batch.delete');
});

Route::group(['prefix' => 'users', 'middleware' => ['admin']], function () {
    Route::get('', [App\Http\Controllers\UserController::class, 'index'])->name('user.view');
    Route::put('/{userId}', [App\Http\Controllers\UserController::class, 'verify'])->name('user.verify');
    Route::delete('/{userId}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');
});