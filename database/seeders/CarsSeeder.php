<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Cars = [
            [
                "code" => "MOGAN-44",
                "manufacturer" => "Morgan",
                "model" => "4/4",
                "price" => 107000.00,
            ],
            [
                "code" => "BMW-1",
                "manufacturer" => "BMW",
                "model" => "1 Series",
                "price" => 71900.00,
            ],
            [
                "code" => "BMW-2",
                "manufacturer" => "BMW",
                "model" => "3 Series",
                "price" => 111900.00,
            ],
            [
                "code" => "MINI-3DH",
                "manufacturer" => "Mini",
                "model" => "3D Hatch",
                "price" => 62825.00,
            ],
            [
                "code" => "MINI-5DH",
                "manufacturer" => "Mini",
                "model" => "5D Hatch",
                "price" => 54450.00,
            ],
            [
                "code" => "BMW-8",
                "manufacturer" => "BMW",
                "model" => "8 Series",
                "price" => 359900.00,
            ],
            [
                "code" => "AUDI-A1",
                "manufacturer" => "Audi",
                "model" => "A1",
                "price" => 47800.00,
            ],
            [
                "code" => "AUDI-A8",
                "manufacturer" => "Audi",
                "model" => "A8",
                "price" => 298472.00,
            ],
            [
                "code" => "MORGAN-AEROC",
                "manufacturer" => "Morgan",
                "model" => "Aero Coupe",
                "price" => 270000.00,
            ],
            [
                "code" => "VW-AMAROK",
                "manufacturer" => "Volkswagen",
                "model" => "Amarok",
                "price" => 81490.00,
            ],
            [
                "code" => "VW-ARTEON",
                "manufacturer" => "Volkswagen",
                "model" => "Arteon",
                "price" => 68740.00,
            ],
            [
                "code" => "ARIEL-ATOM4",
                "manufacturer" => "Ariel",
                "model" => "Atom 4",
                "price" => 0
            ],
            [
                "code" => "MINI-CLUB",
                "manufacturer" => "Mini",
                "model" => "Clubman",
                "price" => 70600.00,
            ],
            [
                "code" => "MINI-CONV",
                "manufacturer" => "Mini",
                "model" => "Convertible",
                "price" => 67880.00,
            ],
            [
                "code" => "MINI-COOPER",
                "manufacturer" => "Mini",
                "model" => "Cooper",
                "price" => 41800.00,
            ],
            [
                "code" => "TESLA-TRUCK",
                "manufacturer" => "Tesla",
                "model" => "Cybertruck",
                "price" => 103300.00,
            ],
            [
                "code" => "AUDI-EGT",
                "manufacturer" => "Audi",
                "model" => "e-tron GT",
                "price" => 0
            ],
            [
                "code" => "VW-GOLF",
                "manufacturer" => "Volkswagen",
                "model" => "Golf",
                "price" => 65990.00,
            ],
            [
                "code" => "MG-HS",
                "manufacturer" => "MG",
                "model" => "HS",
                "price" => 47990.00,
            ],
            [
                "code" => "BMW-I",
                "manufacturer" => "BMW",
                "model" => "i Series",
                "price" => 70900.00,
            ],
            [
                "code" => "BMW-M",
                "manufacturer" => "BMW",
                "model" => "M",
                "price" => 274900.00,
            ],
            [
                "code" => "BMW-M2",
                "manufacturer" => "BMW",
                "model" => "M2",
                "price" => 182500.00,
            ],
            [
                "code" => "BMW-M6",
                "manufacturer" => "BMW",
                "model" => "M6",
                "price" => 171500.00,
            ],
            [
                "code" => "MG-MGZS",
                "manufacturer" => "MG",
                "model" => "MG ZS",
                "price" => 42990.00,
            ],
            [
                "code" => "MG-MG3",
                "manufacturer" => "MG",
                "model" => "MG3",
                "price" => 19490.00,
            ],
            [
                "code" => "TESLA-MOD3",
                "manufacturer" => "Tesla",
                "model" => "Model 3",
                "price" => 91672.00,
            ],
            [
                "code" => "TESLA-MODS",
                "manufacturer" => "Tesla",
                "model" => "Model S",
                "price" => 155430.00,
            ],
            [
                "code" => "TESLA-MODX",
                "manufacturer" => "Tesla",
                "model" => "Model X",
                "price" => 191730.00,
            ],
            [
                "code" => "TESLA-MODY",
                "manufacturer" => "Tesla",
                "model" => "Model Y",
                "price" => 98172.00,
            ],
            [
                "code" => "VW-POLO",
                "manufacturer" => "Volkswagen",
                "model" => "Polo",
                "price" => 38750.00,
            ],
            [
                "code" => "AUDI-Q2",
                "manufacturer" => "Audi",
                "model" => "Q2",
                "price" => 52200.00,
            ],
            [
                "code" => "MORGAN-ROADSTER",
                "manufacturer" => "Morgan",
                "model" => "Roadster",
                "price" => 145000.00,
            ],
            [
                "code" => "AUDI-S8",
                "manufacturer" => "Audi",
                "model" => "S8",
                "price" => 258877.00,
            ],
            [
                "code" => "VW-TROC",
                "manufacturer" => "Volkswagen",
                "model" => "T-ROC",
                "price" => 42700.00,
            ],
            [
                "code" => "AUDI-TT",
                "manufacturer" => "Audi",
                "model" => "TT",
                "price" => 14200.00,
            ],
            [
                "code" => "KTM-XBOWR",
                "manufacturer" => "KTM",
                "model" => "X-Bow R",
                "price" => 16990.00,
            ]
        ];

        foreach ($Cars as $newCar) {
            $car = new Cars();
            $car->code = $newCar["code"];
            $car->manufacturer = $newCar["manufacturer"];
            $car->model = $newCar["model"];
            $car->price = $newCar["price"];
            $car->save();
        }
    }
}
