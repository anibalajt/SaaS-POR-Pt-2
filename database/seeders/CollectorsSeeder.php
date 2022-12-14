<?php

namespace Database\Seeders;

use App\Models\Collectors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Collectors  = [
            [
                "given_name" => "Andres",
                "family_name" => "Perez",
                "quantity" => "1",
                "owned" => ["BMW-I"],
                "car_id" => "62fcf19f8e85e788c303f9e5"
            ],
            [
                "given_name" => "Evan",
                "family_name" => "Keel",
                "quantity" => 8,
                "owned" => ["AUDI-TT", "TESLA-TRUCK", "AUDI-TT", "MOGAN-44", "BMW-8", "TESLA-MODX", "MORGAN-AEROC"],
            ],
            [
                "given_name" => "Jo",
                "family_name" => "Kerr",
                "quantity" => 3,
                "owned" => ["AUDI-S8", "TESLA-MODY", "AUDI-A1"],
            ],
            [
                "given_name" => "Izzy",
                "family_name" => "Kidding",
                "quantity" => 8,
                "owned" => ["MG-MGZS", "TESLA-TRUCK", "AUDI-A1", "VW-ARTEON", "MINI-CONV", "AUDI-TT", "MG-MGZS", "MORGAN-ROADSTER"],
            ],
            [
                "given_name" => "Fay",
                "family_name" => "King",
                "quantity" => 2,
                "owned" => ["BMW-I", "BMW-1"],
            ],
            [
                "given_name" => "Joe",
                "family_name" => "King",
                "quantity" => 3,
                "owned" => ["BMW-M2", "BMW-M6", "MINI-3DH"],
            ],
            [
                "given_name" => "Raney",
                "family_name" => "Schauer",
                "quantity" => 5,
                "owned" => ["MINI-5DH", "KTM-XBOWR", "BMW-2", "MINI-CONV", "AUDI-A8"],
            ],
            [
                "given_name" => "June",
                "family_name" => "Schauer",
                "quantity" => 4,
                "owned" => ["MG-MG3", "MINI-CLUB", "MINI-3DH", "MORGAN-ROADSTER"],
            ],
            [
                "given_name" => "April",
                "family_name" => "Schauer",
                "quantity" => 8,
                "owned" => ["AUDI-A8", "BMW-8", "ARIEL-ATOM4", "AUDI-Q2", "MINI-3DH", "MORGAN-AEROC", "TESLA-MOD3", "AUDI-EGT"],
            ],
            [
                "given_name" => "Al K.",
                "family_name" => "Seltzer",
                "quantity" => 7,
                "owned" => ["AUDI-A8", "TESLA-MODX", "VW-ARTEON", "TESLA-MOD3", "BMW-M6", "BMW-M2"],
            ],
            [
                "given_name" => "Dee",
                "family_name" => "Sember",
                "quantity" => 1,
                "owned" => ["MG-MGZS"],
            ],
            [
                "given_name" => "Justin",
                "family_name" => "Tune",
                "quantity" => 0,
                "owned" => [],
            ],
            [
                "given_name" => "Carrie A.",
                "family_name" => "Tune",
                "quantity" => 1,
                "owned" => ["ARIEL-ATOM4"],
            ],
            [
                "given_name" => "Quinn",
                "family_name" => "Tuplets",
                "quantity" => 2,
                "owned" => ["MG-MGZS", "MORGAN-AEROC"],
            ],
            [
                "given_name" => "Colin",
                "family_name" => "Allcars",
                "quantity" => 7,
                "owned" => ["MG-MGZS", "MG-HS", "MINI-CONV", "MORGAN-ROADSTER", "BMW-M6", "VW-GOLF", "MORGAN-ROADSTER"],
            ],
            [
                "given_name" => "Cary",
                "family_name" => "Baggs",
                "quantity" => 7,
                "owned" => ["MOGAN-44", "TESLA-MODS", "ARIEL-ATOM4", "MORGAN-AEROC", "BMW-M6", "AUDI-Q2", "MOGAN-44"],
            ],
            [
                "given_name" => "Winnie",
                "family_name" => "Bago",
                "quantity" => 1,
                "owned" => ["MORGAN-ROADSTER"],
            ],
            [
                "given_name" => "Frank N.",
                "family_name" => "Beans",
                "quantity" => 3,
                "owned" => ["MORGAN-AEROC", "BMW-M2"],
            ],
            [
                "given_name" => "Harry",
                "family_name" => "Beard",
                "quantity" => 9,
                "owned" => ["AUDI-S8", "MINI-COOPER", "TESLA-MODS", "AUDI-EGT", "VW-POLO", "ARIEL-ATOM4", "MINI-COOPER", "AUDI-EGT", "BMW-2"],
            ],
            [
                "given_name" => "Al B.",
                "family_name" => "Zienya",
                "quantity" => 3,
                "owned" => ["ARIEL-ATOM4", "BMW-8", "AUDI-A1"],
            ],
            [
                "given_name" => "Cy",
                "family_name" => "Yonarra",
                "quantity" => 2,
                "owned" => ["BMW-I", "TESLA-TRUCK"],
            ],
            [
                "given_name" => "Pearl E.",
                "family_name" => "White",
                "quantity" => 10,
                "owned" => ["TESLA-TRUCK", "MORGAN-ROADSTER", "ARIEL-ATOM4", "ARIEL-ATOM4", "MG-HS", "BMW-M", "MINI-5DH", "BMW-M2", "VW-AMAROK", "VW-POLO"],
            ],
            [
                "given_name" => "Sno",
                "family_name" => "White",
                "quantity" => 10,
                "owned" => ["TESLA-MODY", "VW-TROC", "MG-MGZS", "BMW-M2", "VW-POLO", "AUDI-S8", "BMW-M2", "BMW-8", "VW-TROC", "TESLA-MOD3"],
            ],
            [
                "given_name" => "Chuck",
                "family_name" => "Wagon",
                "quantity" => 1,
                "owned" => ["TESLA-MODY"],
            ],
            [
                "given_name" => "Patty",
                "family_name" => "Wagon",
                "quantity" => 9,
                "owned" => ["TESLA-MODX", "TESLA-MODY", "MORGAN-AEROC", "MINI-3DH", "BMW-M2", "AUDI-EGT", "BMW-1", "AUDI-Q2", "VW-TROC"],
            ],
            [
                "given_name" => "Cara",
                "family_name" => "Van",
                "quantity" => 2,
                "owned" => ["TESLA-MODS", "ARIEL-ATOM4"],
            ],
        ];

        foreach ($Collectors as $c) {
            $collector = new Collectors($c);
            $collector->save();
        }
    }
}
