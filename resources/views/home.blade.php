@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-body">

            <!-- display total of cars and collectors and btn to create each one-->
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cars</h5>
                            <p class="card-text">{{ $cars->count() }}</p>
                            @if (Auth::check())
                            <div class="row justify-content-center">
                                <a href="/cars" class="btn btn-primary">Open</a>
                                <a href="/cars/create" class="btn btn-primary">Create</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Collectors</h5>
                            <p class="card-text">{{ $collectors->count() }}</p>
                            @if (Auth::check())
                            <div class="row justify-content-center">
                                <a href="/collectors" class="btn btn-primary">Open</a>
                                <a href="/collectors/create" class="btn btn-primary">Create Collector</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection