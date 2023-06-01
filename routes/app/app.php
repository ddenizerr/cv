<?php

use App\Http\Controllers\App\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('home')->name('home.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
});
