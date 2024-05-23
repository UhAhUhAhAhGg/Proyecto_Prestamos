<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    Route::get('/navigation-menu',function(){
        return view('navigation-menu');
    })->name('navigation-menu');
});

route::get('admin/dashboard', [HomeController::class, 'index'])->
middleware(['auth','admin']);

route::get('profile/navigation-menu', [HomeController::class, 'index'])->
middleware(['auth','user']);