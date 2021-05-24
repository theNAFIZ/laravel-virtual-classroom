<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'courses'], function () {
        // teacher or admin
        Route::get('/create', [App\Http\Controllers\CourseController::class, 'create'])->name('course.create');
        Route::post('/create', [App\Http\Controllers\CourseController::class, 'store'])->name('course.store');
        Route::get('/{course}/edit', [App\Http\Controllers\CourseController::class, 'edit'])->name('course.edit');
        Route::put('/{course}/edit', [App\Http\Controllers\CourseController::class, 'update'])->name('course.update');
        Route::delete('/{course}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('course.delete');

        Route::get('/{course}/lesson/create', [App\Http\Controllers\LessonController::class, 'create'])->name('lesson.create');
        Route::post('/{course}/lesson/create', [App\Http\Controllers\LessonController::class, 'store'])->name('lesson.store');
        Route::get('/{course}/lesson/{lesson}/edit', [App\Http\Controllers\LessonController::class, 'edit'])->name('lesson.edit');
        Route::put('/{course}/lesson/{lesson}/edit', [App\Http\Controllers\LessonController::class, 'update'])->name('lesson.update');
        Route::delete('/{course}/lesson/{lesson}', [App\Http\Controllers\LessonController::class, 'destroy'])->name('lesson.delete');

        // student
        Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');
        Route::get('/{course}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.show');
        Route::get('/{course}/lesson/{lesson}', [App\Http\Controllers\LessonController::class, 'show'])->name('lesson.show');

    });

    Route::group(['prefix' => 'batches', 'middleware' => 'admin'], function () {
        Route::get('/', [App\Http\Controllers\BatchController::class, 'index'])->name('batch.index');
        Route::get('/create', [App\Http\Controllers\BatchController::class, 'create'])->name('batch.create');
        Route::post('/create', [App\Http\Controllers\BatchController::class, 'store'])->name('batch.store');
        Route::get('/{batch}/edit', [App\Http\Controllers\BatchController::class, 'edit'])->name('batch.edit');
        Route::put('/{batch}/edit', [App\Http\Controllers\BatchController::class, 'update'])->name('batch.update');
        Route::delete('/{batch}', [App\Http\Controllers\BatchController::class, 'destroy'])->name('batch.delete');
    });

    Route::group(['prefix' => 'users', 'middleware' => 'admin'], function () {
        Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.view');
        Route::put('/{user}', [App\Http\Controllers\UserController::class, 'verify'])->name('user.verify');
        Route::delete('/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');
    });
});
