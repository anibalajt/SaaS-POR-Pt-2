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

Route::get('/cars', CarController::class . '@index');
Route::get('/cars/create', CarController::class . '@create');
// save new car
Route::post('/cars', [CarController::class, 'store']);
// show car
Route::get('/cars/{id}', CarController::class . '@show');
// delete car
Route::delete('/cars/{id}', [CarController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
