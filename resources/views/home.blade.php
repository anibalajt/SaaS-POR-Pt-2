@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-body">
            <!-- tabs to show cars and collectos on table -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="cars-tab" data-bs-toggle="tab" href="#cars" role="tab" aria-controls="cars" aria-selected="true">Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="collectors-tab" data-bs-toggle="tab" href="#collectors" role="tab" aria-controls="collectors" aria-selected="false">Collectors</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <!-- cars tab -->
                <div class="tab-pane fade show active" id="cars" role="tabpanel" aria-labelledby="cars-tab">
                    <!-- popu;ate cars -->
                    <div class="container">
                        <table class="table ">
                            <tr>
                                <th>Code</th>
                                <th>Manufacturer</th>
                                <th>Model</th>
                                <th>Price</th>
                                @if (Auth::check())
                                <th></th>
                                @endif
                            </tr>
                            <?php foreach ($cars as $car) { ?>
                                <tr>
                                    <td>{{ $car->code }}</td>
                                    <td>{{ $car->manufacturer }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->price }}</td>
                                    <!-- add accion to open the car -->
                                    @if (Auth::check())
                                    <td><a href="/cars/{{ $car->code }}">Open</a></td>
                                    @endif
                                </tr>
                            <?php } ?>
                        </table>
                        <!-- btn to create car if there is a user log in -->
                        @if (Auth::check())
                        <div class="row justify-content-center">
                            <a href="/cars/create" class="btn btn-primary">Create Car</a>
                        </div>
                        @endif


                    </div>
                </div>
                <!-- collectors tab -->
                <div class="tab-pane fade" id="collectors" role="tabpanel" aria-labelledby="collectors-tab">
                    <!-- popu;ate collectors -->
                    <div class="container">
                        <table class="table ">
                            <tr>
                                <th>Name</th>
                                <th>cars</th>
                                @if (Auth::check())
                                <th></th>
                                @endif
                            </tr>
                            <?php foreach ($collectors as $collector) { ?>
                                <tr>
                                    <td>{{ $collector->given_name }} {{ $collector->family_name }}</td>
                                    <!-- loop througth $collector->owned and display all cars -->
                                    <td>
                                        <?php foreach ($collector->owned as $car) { ?>
                                            <li>{{ $car }}</li>
                                        <?php } ?>
                                    </td>
                                    <!-- add accion to open the collector -->
                                    @if (Auth::check())
                                    <td><a href="/collectors/{{ $collector->id }}">Open</a></td>
                                    @endif
                                </tr>
                            <?php } ?>
                        </table>
                        <!-- btn to create collector if there is a user log in -->
                        @if (Auth::check())
                        <div class="row justify-content-center">
                            <a href="/collectors/create" class="btn btn-primary">Create Collector</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection