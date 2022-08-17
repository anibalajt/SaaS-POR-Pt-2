@extends('layouts.app')

@section('content')
<!-- popu;ate cars -->
<div class="container">
    <table class="table ">
        <tr>
            <th>id</th>
            <th>Code</th>
            <th>Manufacturer</th>
            <th>Model</th>
            <th>Price</th>
            <th></th>
        </tr>
        <?php foreach ($cars as $car) { ?>
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->code }}</td>
                <td>{{ $car->manufacturer }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->price }}</td>
                <!-- add accion to open the car -->
                <td><a href="/cars/{{ $car->id }}">Open</a></td>
            </tr>
        <?php } ?>
    </table>
    <!-- btn to create car -->
    <div class="row justify-content-center">
        <a href="/cars/create" class="btn btn-primary">Create Car</a>
    </div>

</div>
@endsection