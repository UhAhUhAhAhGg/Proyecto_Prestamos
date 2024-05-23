<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController; // Asegúrate de que esta línea esté presente y correcta

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/navigation-menu', function() {
        return view('navigation-menu');
    })->name('navigation-menu');

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
        Route::resource('users', UserController::class)->except(['index'])->names('admin.users');
    });
});

Route::get('profile/navigation-menu', [HomeController::class, 'index'])->name('profile.navigation-menu');
