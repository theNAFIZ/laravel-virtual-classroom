<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'courses'], function () {
    Route::get('/{courseId}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.view');
});

Route::group(['prefix' => 'batches'], function () {
    Route::get('', [App\Http\Controllers\CourseController::class, 'index'])->name('batch.view');
});

Route::group(['prefix' => 'users', 'middleware' => ['admin']], function () {
    Route::get('', [App\Http\Controllers\CourseController::class, 'index'])->name('user.view');
});