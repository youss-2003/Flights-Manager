<?php

use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FlightController::class,'home'])->name('home');



Route::get('/special-offer',[FlightController::class,'home'])->name('offer');

Route::get('/support',[FlightController::class,'home'])->name('support');

Route::get('/dashboard',[FlightController::class,'dashboard'])->name('dashboard');

Route::post('/storeticket', [FlightController::class, 'store'])->name('flights.store');

Route::get('/flights', [FlightController::class, 'index'])->name('flight');