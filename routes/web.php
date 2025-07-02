<?php

use App\Livewire\Desktop;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

require_once __DIR__ . "/development.php";

// ! GUEST ROUTES ! //
Route::get('/login', Login::class)->name('login')->middleware('guest');

// ! AUTHENTICATED ROUTES ! //
Route::middleware('auth')->group(function () {
    Route::get('/', Desktop::class)->name('desktop');
});

