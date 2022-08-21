@extends('layouts.app')

@section('content')
<!-- popu;ate cars -->
<div class="container">

    <!-- form to create collector -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Collector</h5>
                    <form id="create" action="/collectors" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="given_name">Given Name</label>
                            <input type="text" class="form-control" id="given_name" name="given_name" placeholder="Given Name">
                        </div>
                        <div class="form-group">
                            <label for="family_name">Family Name</label>
                            <input type="text" class="form-control" id="family_name" name="family_name" placeholder="Family Name">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            <label for="owned">Owned</label>
                            <!-- display cars on a select and allow select many -->
                            <select multiple class="form-control" id="owned" name="owned[]">
                                @foreach ($cars as $car)
                                <option value="{{ $car->code }}">{{ $car->code }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<script>
    document.querySelector(' #create').addEventListener('submit', function(e) {
        if (document.querySelector('#given_name').value.trim() == '' || document.querySelector('#family_name').value.trim() == '' || document.querySelector('#quantity').value.trim() == '') {
            e.preventDefault();
            alert('Please fill all fields');
        }
    });
</script>

@endsection