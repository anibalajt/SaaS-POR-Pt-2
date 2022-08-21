@extends('layouts.app')

@section('content')
<!-- popu;ate cars -->
<div class="container">
    @if (Auth::check())
    <div class="row ">
        <a href="/collectors/create" class="btn btn-primary">Create Collector</a>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <!-- btn to create collector if there is a user log in -->
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
        </div>
    </div>
</div>

@endsection