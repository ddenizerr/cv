<?php

use App\Http\Controllers\Dashboard\ProjectController;
use Illuminate\Support\Facades\Route;

Route::middleware(['block.mobile'])->group(function () {

//DASHBOARD
    Route::controller(ProjectController::class)->prefix('projects')->name('projects.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/fetch', 'fetch')->name('fetch');
        Route::get('/create', 'create')->name('create');
        Route::patch('/store', 'store')->name('store');
        Route::patch('/{project}/update', 'update')->name('update');
        Route::delete('/{project}/delete', 'delete')->name('delete');
    });

    Route::get('/download-cv', function () {
        $filePath = public_path('/cv/denizdenizer.pdf');
        return response()->download($filePath);
    })->name('download-cv');


    include('application.php');
});


