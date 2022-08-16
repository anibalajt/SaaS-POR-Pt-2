<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- if car is null diplay msg -->
    @if ($car == null)
    <p>Car not found</p>
    @else
    <!-- display car details -->
    <table>
        <tr>
            <th>id</th>
            <th>Code</th>
            <th>Manufacturer</th>
            <th>Model</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->code }}</td>
            <td>{{ $car->manufacturer }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->price }}</td>
        </tr>
    </table>

    <!-- form to delete car -->
    <form action="/cars/<?php echo $car['id']; ?>" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    
    @endif




</body>

</html>