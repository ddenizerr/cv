<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Gift\GiftEmailController;
use Illuminate\Support\Facades\Route;


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

Route::controller(GiftEmailController::class)->prefix('gift')->name('gift.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/preview', 'preview')->name('preview');
    Route::post('/send', 'send')->name('send');
});


include('application.php');



