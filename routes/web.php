<?php

use App\Http\Controllers\CarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', CarController::class . '@index')->middleware('auth');
Route::get('/cars/create', CarController::class . '@create')->middleware('auth');
// save new car
Route::post('/cars', [CarController::class, 'store'])->middleware('auth');
// show car
Route::get('/cars/{id}', CarController::class . '@show')->middleware('auth');
// delete car
Route::delete('/cars/{id}', [CarController::class, 'destroy'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
