<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::post('/reservation', [CarController::class, 'succeed'])->name('reservations.store');

Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');