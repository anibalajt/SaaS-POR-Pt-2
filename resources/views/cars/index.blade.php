<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- popu;ate cars -->
    <table>
        <tr>
            <th>id</th>
            <th>Code</th>
            <th>Manufacturer</th>
            <th>Model</th>
            <th>Price</th>
        </tr>
        <?php foreach ($cars as $car) { ?>
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->code }}</td>
                <td>{{ $car->manufacturer }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->price }}</td>
                
            </tr>
        <?php } ?>
</body>

</html>