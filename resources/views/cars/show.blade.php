@extends('layouts.app')

@section('content')
<!-- if car is null diplay msg -->
@if ($car == null)
<p>Car not found</p>
@else
<!-- display car details -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Code</th>
                    <th>Manufacturer</th>
                    <th>Model</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>{{ $car->code }}</td>
                    <td>{{ $car->manufacturer }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->price }}</td>
                </tr>
                <!-- display on subtable the collectors for this car -->
                <table class="table row justify-content-center">
                    <tr>
                        <th>Collectors</th>
                    </tr>
                    @foreach ($collectors as $collector)
                    <tr>
                        <td>{{ $collector->given_name }} {{ $collector->family_name }}</td>
                    </tr>
                    @endforeach
                </table>
            </table>

            <!-- center form -->
            <div class="row justify-content-center">
                <form id="delete" action="/cars/{{$car->code}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/cars/<?php echo $car['code']; ?>/edit" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this car?");
    }
    document.querySelector('#delete').addEventListener('submit', function(e) {
        if (!confirmDelete()) {
            e.preventDefault();
        }
    });
</script>

@endif

@endsection