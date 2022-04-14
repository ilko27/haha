<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReminderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [IndexController::class, 'index'])->name('index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/reminder/create', [ReminderController::class, 'create'])->name('reminder.create');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/store', [AuthController::class, 'loginUser']);

    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register/store', [AuthController::class, 'store']);
});
