<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsletterController;

// Route::get('/', function () {
//     return view('layouts.layout');
// });


// Routes for the home page
// This route will display the home page using the HomeController's index method
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/principalDesk', [PageController::class, 'principalDesk'])->name('pricipalDesk');

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/all', [EventController::class, 'all'])->name('events.all');

// Routes for the dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





// Routes for profile management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('/testing-email', [MailController::class, 'sendEmail'])->name('testing-mail');


Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
Route::get('/verify-newsletter/{token}', [NewsletterController::class, 'verify'])->name('verify.newsletter');