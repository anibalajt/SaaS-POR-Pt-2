@extends('layouts.app')

@section('content')
<!-- popu;ate cars -->
<div class="container">
    <!-- add a form that allows the user to search -->
    <form action="/cars/search" method="get">
        @csrf
        <div class="form-group">
            <label for="code">manufacturer</label>
            <input type="text" class="form-control" id="search" name="search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




    <div class="card">
        <div class="card-body">
            <table class="table ">
                <tr>
                    <th>Code</th>
                    <th>Manufacturer</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php foreach ($cars as $car) { ?>
                    <tr>
                        <td>{{ $car->code }}</td>
                        <td>{{ $car->manufacturer }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->price }}</td>
                        <!-- add accion to open the car -->
                        <td><a href="/cars/{{ $car->code }}">Open</a></td>
                    </tr>
                <?php } ?>
            </table>
            <!-- btn to create car -->
            <div class="row justify-content-center">
                <a href="/cars/create" class="btn btn-primary">Create Car</a>
            </div>
        </div>
    </div>
</div>
@endsection