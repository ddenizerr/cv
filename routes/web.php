<?php

use App\Http\Controllers\Dashboard\ProjectController;
use Illuminate\Support\Facades\Route;


//DASHBOARD
Route::controller(ProjectController::class)->prefix('projects')->name('projects.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/fetch', 'fetch')->name('fetch');
    Route::get('/create', 'create')->name('create');
    Route::patch('/store', 'store')->name('store');
    Route::patch('/{project}/update', 'update')->name('update');
    Route::delete('/{project}/delete', 'delete')->name('delete');
});

include('application.php');



