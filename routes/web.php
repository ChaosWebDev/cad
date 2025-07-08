<?php

use App\Livewire\Desktop;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

require_once __DIR__ . "/_dev.php";

// ! GUEST ROUTES ! //
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
});

// ! AUTHENTICATED ROUTES ! //
Route::middleware('auth')->group(function () {
    Route::get('/', Desktop::class)->name('desktop');

    Route::prefix('/incident')->name('incident.')->group(function () {
        Route::get('/create', Desktop::class)->name('create');
    });
});








