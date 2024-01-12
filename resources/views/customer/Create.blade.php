@extends('customer.layout')
@section('content')

    <div class="card">
        <div class="card-header">Customer Page</div>
        <div class="card-body">

            <form action="{{ url('customer') }}" method="post">
                {!! csrf_field() !!}
                <label>Full Name</label></br>
                <input type="text" name="fullName" id="fullName" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" class="form-control"></br>
                <label>Phone Number</label></br>
                <input type="text" name="phoneNumber" id="phoneNumber" class="form-control">
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
