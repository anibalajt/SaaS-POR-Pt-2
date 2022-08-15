<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



Class CarController extends Controller
{
    public function index()
    {
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
        return view("cars.index", compact('cars'));
    }

    public function show($id)
    {
        return view("cars.details", compact('id'));
    }


}