@extends('customer.layout')
@section('content')

    <div class="card">
        <div class="card-header">Customer Page</div>
        <div class="card-body">

            <form action="{{ url('customer/' .$customer->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$customer->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="fullName" id="fullName" value="{{$customer->fullName}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{$customer->email}}" class="form-control"></br>
                <label>Phone Number</label></br>
                <input type="text" name="phoneNumber" id="phoneNumber" value="{{$customer->phoneNumber}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$customer->address}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
