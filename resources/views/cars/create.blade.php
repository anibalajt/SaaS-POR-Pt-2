@extends('layouts.app')

@section('content')

<!-- form to create cars -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <form id="create" action="/cars" method="post">
                @csrf
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Code">
                </div>
                <div class="form-group">
                    <label for="manufacturer">Manufacturer</label>
                    <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Manufacturer">
                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" id="model" name="model" placeholder="Model">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>

        </div>
    </div>
</div>

<!--  -->
<script>
    document.querySelector(' #create').addEventListener('submit', function(e) {
        if (document.querySelector('#code').value.trim() == '' || document.querySelector('#manufacturer').value.trim() == '' || document.querySelector('#model').value.trim() == '' || document.querySelector('#price').value.trim() == '') {
            e.preventDefault();
            alert('Please fill all fields');
        }
    });
</script>

@endsection