<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view ('customer.index')->with('customer', $customer);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fullName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'address' => 'required'
        ]);
        Customer::create($data);
        return redirect('customer')->with('flash_message', 'Customer Added!');
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show')->with('customer', $customer);
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit')->with('customer', $customer);
    }

    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'fullName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'address' => 'required'
        ]);

        $customer->update($data);
        return redirect('customer')->with('flash_message', 'Customer Updated!');
    }

    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('customer')->with('flash_message', 'Customer deleted!');
    }
}
