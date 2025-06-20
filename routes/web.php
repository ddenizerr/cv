<?php

use App\Http\Controllers\ContactController;
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

Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/send-mail', 'contact')->name('send-mail');
});

Route::get('/download-cv', function () {
    $filePath = public_path('cv/DenizDenizer.pdf');

    if (!file_exists($filePath)) {
        abort(404, 'File not found.');
    }

    return response()->file($filePath, [
        'Content-Type' => 'application/pdf',
    ]);
})->name('download-cv');


include('application.php');



