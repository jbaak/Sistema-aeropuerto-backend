<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login']);
Route::get('/flights', [FlightController::class, 'getFlights']);
Route::get('/cities', [FlightController::class, 'getCities']);
Route::get('/airlines', [FlightController::class , 'getAirlines']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/tickets', [TicketController::class, 'store']);
    Route::get('/tickets', [TicketController::class, 'getTickets']);
});
