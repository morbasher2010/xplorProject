@extends('customer.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Customers</div>
                    <div class="card-body">
                        <a href="{{ url('/customer/create') }}" class="btn btn-success btn-sm" title="Add New Customer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add Customer
                        </a>
                        <a class="btn btn-success btn-sm" title="Load Customers" id="anchor-open-cards-list-btn">
                            <i class="fa fa-plus" aria-hidden="true"></i> Load Customers
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive" id="anchor-cards-list">
                            <table class="table">
                                <thead>
                                <tr class="cancelled">
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customer as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fullName }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phoneNumber }}</td>
                                        <td>{{ $item->address }}</td>

                                        <td>
                                            <a href="{{ url('/customer/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/customer/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/customer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

