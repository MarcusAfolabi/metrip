<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', [AuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [AuthController::class, 'callbackGoogle']);
 
Route::get('auth/user/{user}profile', [ProfileController::class, 'dashboard'])->name('user.dashboard');

Route::get('flight', [FlightController::class, 'index'])->name('flight.index');
Route::post('flight/search', [FlightController::class, 'search'])->name('flight.search');

Route::get('hotel', [HotelController::class, 'index'])->name('hotel.index');
Route::get('tour', [TourController::class, 'index'])->name('tour.index');

Route::get('inspirations', [BlogController::class, 'index'])->name('inspirations.index');
Route::get('inspirations/create', [BlogController::class, 'create'])->name('inspirations.create');
Route::post('inspirations', [BlogController::class, 'store'])->name('inspirations.store');
Route::get('inspirations/{blog}', [BlogController::class, 'show'])->name('inspirations.show');
Route::get('inspirations/{blog}/edit', [BlogController::class, 'edit'])->name('inspirations.edit');
Route::put('inspirations/{blog}', [BlogController::class, 'update'])->name('inspirations.update');
Route::delete('inspirations/{blog}', [BlogController::class, 'destroy'])->name('inspirations.destroy');

Route::post('subscribers', [SubscriberController::class, 'store'])->name('subscribers.store');
Route::delete('subscribers/{subscriber}', [SubscriberController::class, 'delete'])->name('subscribers.delete');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
