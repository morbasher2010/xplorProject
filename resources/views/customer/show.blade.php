@extends('customer.layout')
@section('content')


    <div class="card">
        <div class="card-header">Customer Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Full Name : {{ $customer->fullName }}</h5>
                <p class="card-text">Email : {{ $customer->email }}</p>
                <p class="card-text">Phone : {{ $customer->phoneNumber }}</p>
                <p class="card-text">Address : {{ $customer->address }}</p>
            </div>

            </hr>

        </div>
    </div>
