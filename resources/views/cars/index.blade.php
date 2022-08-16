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
                    "code" => 'MOGAN-44',
                    "manufacturer" => 'Morgan',
                    "model" => '4/4',
                    "price" => 107000
                ],
                [
                    "code" => 'MOGAN-45',
                    "manufacturer" => 'Morgan',
                    "model" => '4/5',
                    "price" => 108000
                ],
                [
                    "code" => 'MOGAN-46',
                    "manufacturer" => 'Morgan',
                    "model" => '4/6',
                    "price" => 109000
                ],
                [
                    "code" => 'MOGAN-47',
                    "manufacturer" => 'Morgan',
                    "model" => '4/7',
                    "price" => 110000
                ],
                [
                    "code" => 'MOGAN-48',
                    "manufacturer" => 'Morgan',
                    "model" => '4/8',
                    "price" => 111000
                ],
                [
                    "code" => 'MOGAN-49',
                    "manufacturer" => 'Morgan',
                    "model" => '4/9',
                    "price" => 112000
                ],
                [
                    "code" => 'MOGAN-410',
                    "manufacturer" => 'Morgan',
                    "model" => '4/10',
                    "price" => 113000
                ],
                [
                    "code" => 'MOGAN-411',
                    "manufacturer" => 'Morgan',
                    "model" => '4/11',
                    "price" => 114000
                ],
                [
                    "code" => 'MOGAN-412',
                    "manufacturer" => 'Morgan',
                    "model" => '4/12',
                    "price" => 115000
                ],
                [
                    "code" => 'MOGAN-413',
                    "manufacturer" => 'Morgan',
                    "model" => '4/13',
                    "price" => 116000
                ],
                [
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
            echo $collection;
            if (!$collection) {
                echo 'not connected to collection';
                exit;
            }
            // Creating Database  
            $db = $con->db1test;  
            echo "Database created successfully";
            echo '<br/>';
            // Creating Document  
            $collection = $db->products;  
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
            echo '---------';
            echo '<br/>';
            echo '<br/>';
            // delete collection products


            echo '<br/>';
            echo '<br/>';
            echo '---------';
            echo '<br/>';
    
            
       
       
        }
    catch (Throwable $e) {
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