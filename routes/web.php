<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\BusreisController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ConcertController;
use Illuminate\Support\Facades\Route;

Route::get('/busreis', [BusreisController::class, 'index'])->name('busreis.index');
Route::get('/busreis/create', [BusreisController::class, 'create'])->name('busreis.create');
Route::get('/busreis/form', [BusreisController::class, 'showBusreisForm'])->name('busreis.form');
Route::post('/busreis/submit', [BusreisController::class, 'submit'])->name('busreis.submit');
Route::get('/busreis', [BusreisController::class, 'index'])->name('busreis.index');

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Concert routes
Route::get('/concert/{slug}', [ConcertController::class, 'show'])->name('concert.show');
Route::post('/concert/{slug}/reserve', [ConcertController::class, 'reserveSubmit'])->name('concert.reserve.submit');
Route::post('/reserve/{slug}', [ConcertController::class, 'reserveSubmit'])->name('concert.reserve.submit');
// Busreis routes
Route::get('/busreis', [BusreisController::class, 'index'])->name('busreis.index');
Route::get('/busreis/{slug}/reserve', [BusreisController::class, 'reserve'])->name('busreis.reserve');

// Event routes
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::get('/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/', [EventController::class, 'store'])->name('events.store');
    Route::get('/{slug}', [EventController::class, 'show'])->name('events.show');
    Route::get('/{slug}/reserve', [EventController::class, 'reserve'])->name('events.reserve');
});

// Reservation routes
Route::get('/reserve/{slug}', [ReservationController::class, 'index'])->name('reserve');
Route::post('/reserve/{slug}', [ReservationController::class, 'store'])->name('event.reserve.submit');

// About route
Route::get('/over_ons', [AboutController::class, 'index'])->name('over_ons');
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route page
Route::get('/routes', [RouteController::class, 'index'])->name('routes.index');

// Secured routes (for logged-in users)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout'); // Logout route
});

// Login and registration routes (for guests)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Fallback for non-existent routes
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
