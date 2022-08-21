<?php

// {
//     "code": "MOGAN-44",
//     "manufacturer": "Morgan",
//     "model": "4/4",
//     "price": 107000
// }
try {
    $newCars = [
        [
            "id" => 1,
            "code" => 'MOGAN-44',
            "manufacturer" => 'Morgan',
            "model" => '4/4',
            "price" => 107000
        ],
        [
            "id" => 2,
            "code" => 'MOGAN-45',
            "manufacturer" => 'Morgan',
            "model" => '4/5',
            "price" => 108000
        ],
        [
            "id" => 3,
            "code" => 'MOGAN-46',
            "manufacturer" => 'Morgan',
            "model" => '4/6',
            "price" => 109000
        ],
        [
            "id" => 4,
            "code" => 'MOGAN-47',
            "manufacturer" => 'Morgan',
            "model" => '4/7',
            "price" => 110000
        ],
        [
            "id" => 5,
            "code" => 'MOGAN-48',
            "manufacturer" => 'Morgan',
            "model" => '4/8',
            "price" => 111000
        ],
        [
            "id" => 6,
            "code" => 'MOGAN-49',
            "manufacturer" => 'Morgan',
            "model" => '4/9',
            "price" => 112000
        ],
        [
            "id" => 7,
            "code" => 'MOGAN-410',
            "manufacturer" => 'Morgan',
            "model" => '4/10',
            "price" => 113000
        ],
        [
            "id" => 8,
            "code" => 'MOGAN-411',
            "manufacturer" => 'Morgan',
            "model" => '4/11',
            "price" => 114000
        ],
        [
            "id" => 9,
            "code" => 'MOGAN-412',
            "manufacturer" => 'Morgan',
            "model" => '4/12',
            "price" => 115000
        ],
        [
            "id" => 10,
            "code" => 'MOGAN-413',
            "manufacturer" => 'Morgan',
            "model" => '4/13',
            "price" => 116000
        ],
        [
            "id" => 11,
            "code" => 'MOGAN-414',
            "manufacturer" => 'Morgan',
            "model" => '4/14',
            "price" => 117000
        ]
    ];

    // setting mongodb connection and save newcars to collection
    $con = new MongoDB\Client("mongodb://172.20.10.2:27017");
    echo $con;
    echo '<br/>';
    $collection = $con->selectCollection('aj_at2_pt2', 'cars');

    $collection->insertMany($newCars);
    echo "Collection created successfully";
    echo '<br/>';
    // Fetching Record  
    $record = $collection->find();
    // Displaying Record
    foreach ($record as $doc) {
        echo $doc['code'] . ' ' . $doc['manufacturer'] . ' ' . $doc['model'] . ' ' . $doc['price'];
        echo '<br/>';
    }
} catch (Throwable $e) {
    // catch throwables when the connection is not a success
    echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    hola mundo
</body>

</html>