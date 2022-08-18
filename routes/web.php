<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CollectorsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', HomeController::class . '@index');

Route::get('/cars', CarController::class . '@index');
// save new car
Route::get('/cars/create', CarController::class . '@create');
// edit car
Route::get('/cars/{id}/edit', CarController::class . '@edit');
// save edited car
Route::post('/cars/{id}/update', CarController::class . '@update');
// all cars
Route::post('/cars', [CarController::class, 'store']);
// search
Route::get('/cars/search', CarController::class . '@search');
// show car
Route::get('/cars/{id}', CarController::class . '@show');
// delete car
Route::delete('/cars/{id}', [CarController::class, 'destroy']);

Route::get('/collectorsByCar/{car}', CarController::class . '@getCollectorsByCar');



Route::get('/collectors/{car}', CollectorsController::class . '@getCollectorWithCars');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
