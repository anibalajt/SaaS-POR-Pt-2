@extends('layouts.app')

@section('content')

<!-- form to create cars -->
<form action="/cars" method="post">
    @csrf
    <div>
        <label for="code">Code</label>
        <input type="text" name="code" id="code">
    </div>
    <div>
        <label for="manufacturer">Manufacturer</label>
        <input type="text" name="manufacturer" id="manufacturer">
    </div>
    <div>
        <label for="model">Model</label>
        <input type="text" name="model" id="model">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
    </div>
    <button type="submit">Create</button>
</form>

@endsection