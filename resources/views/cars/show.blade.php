@extends('layouts.app')

@section('content')
<!-- if car is null diplay msg -->
@if ($car == null)
<p>Car not found</p>
@else
<!-- display car details -->
<div class="container">
    <table class="table">
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
    <!-- center form -->
    <div class="row justify-content-center">
        <form action="/cars/<?php echo $car['id']; ?>" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
</div>

@endif




@endsection