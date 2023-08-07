<?php

use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\PagesController;
use App\Http\Controllers\App\ProjectsController;
use Illuminate\Support\Facades\Route;


//APP


Route::name('home.')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::prefix('career')->name('career.')->group(function () {
    Route::controller(ProjectsController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('', 'index')->name('index');
    });
});
