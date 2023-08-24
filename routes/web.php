<?php

use WpOrg\Requests\Requests;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\AccessTokenController;
use App\Http\Controllers\FlightSearchController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Route::get('/', function () {
//     $id = config('app.clientID');
//     $secret = config('app.secret');
//     $url = config('app.apiURL') . '/security/oauth2/token';  
//     $auth_data = array(
//         'client_id' => $id,
//         'client_secret' => $secret,
//         'grant_type'    => 'client_credentials'
//     );
//     $headers = array('Content-Type' => 'application/x-www-form-urlencoded');
//     $requests_response = Requests::post($url, $headers, $auth_data);
//     $response_body = json_decode($requests_response->body);
//     Session::put('access_token', $response_body->access_token);
//     // Log::info();
//     header('Cache-Control: public, max-age=604800');
//     return view('welcome');
// });

Route::get('auth/google', [AuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [AuthController::class, 'callbackGoogle']);

Route::get('auth/user/{user}profile', [ProfileController::class, 'dashboard'])->name('user.dashboard');

Route::get('flight', [FlightSearchController::class, 'index'])->name('flight.index');
Route::post('flight/search', [FlightSearchController::class, 'search'])->name('flight.search');
Route::get('/results', [FlightSearchController::class, 'showResults'])->name('flight.results');

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
