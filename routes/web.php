<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


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
    // return collectot and cars count 
    $collectors = [
        [
            'name' => 'John Doe',
            'cars' => [
                [
                    'name' => 'Ford',
                    'year' => '2000'
                ],
                [
                    'name' => 'Audi',
                    'year' => '2010'
                ],
                [
                    'name' => 'BMW',
                    'year' => '2020'
                ]
            ]
        ],
        [
            'name' => 'Jane Doe',
            'cars' => [
                [
                    'name' => 'Mercedes',
                    'year' => '2005'
                ],
                [
                    'name' => 'Porsche',
                    'year' => '2015'
                ],
                [
                    'name' => 'Ferrari',
                    'year' => '2025'
                ]
            ]
        ]
    ];

    $cars = [
        [
            'name' => 'Ford',
            'year' => '2000'
        ],
        [
            'name' => 'Audi',
            'year' => '2010'
        ],
        [
            'name' => 'BMW',
            'year' => '2020'
        ],
        [
            'name' => 'Mercedes',
            'year' => '2005'
        ],
        [
            'name' => 'Porsche',
            'year' => '2015'
        ],
        [
            'name' => 'Ferrari',
            'year' => '2025'
        ]
    ];

    return view('welcome', compact('collectors', 'cars'));
});



Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{id}', [CarController::class, 'show']);
