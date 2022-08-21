@extends('layouts.app')

@section('content')

<!-- page to edit car -->
<div class="container">

    <div class="card">
        <div class="card-body">
            <form action="/cars/{{$car->code}}/update" method="post">
                @csrf
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="{{$car->code}}">
                </div>
                <div class="form-group">
                    <label for="manufacturer">Manufacturer</label>
                    <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Manufacturer" value="{{$car->manufacturer}}">
                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" id="model" name="model" placeholder="Model" value="{{$car->model}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{$car->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</div>

@endsection