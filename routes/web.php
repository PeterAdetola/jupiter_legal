<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ConsultController;



Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/services/{main_service}/{slug}', [ServiceController::class, 'subService'])->name('sub.service');
Route::get('/services/{main_service}', [ServiceController::class, 'mainService'])->name('main.service');

Route::view('/contact', 'contact')->name('contact');


// --------------| Logo Routes |----------------------------------------
Route::get('/email/logo.png', function () {
    $path = storage_path('app/public/img/logo.png');

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path, [
        'Content-Type' => 'image/png',
        'Cache-Control' => 'public, max-age=604800, immutable' // 7 days cache
    ]);
});


Route::post('/send/enquiry', [EnquiryController::class, 'sendEnquiry'])->name('send.enquiry');

Route::post('/consult/request', [ConsultController::class, 'consultRequest'])->name('consult.request');

//Route::post('/package/request', [ConsultController::class, 'packageRequest'])->name('package.request');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
