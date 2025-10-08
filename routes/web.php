<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminApprovalController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Routes for admin panel

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/', function () {
//         return redirect()->route('admin.login');
//     })->name('home');
//     Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
//     Route::post('/login', [AdminController::class, 'login'])->name('login.store');
//     Route::get('/register', [AdminController::class, 'showRegister'])->name('register');
//     Route::post('register', [AdminController::class, 'register'])->name('register.store');
// });

// Routes for profile management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/testing-email', [MailController::class, 'sendEmail'])->name('testing-mail');

// Routes for handling Newsletter
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
Route::get('/verify-newsletter/{token}', [NewsletterController::class, 'verify'])->name('verify.newsletter');
// Route::get('/admin/approve/{token}', [EmailController::class, 'approveAdmin']);

// needs to be protected using middleware
// Route::get('/admin/status', [AdminController::class, 'statusPage'])->name('admin.status');

Route::get('/approve-admin/{token}', [AdminApprovalController::class, 'approve'])
    ->name('approve.admin');
