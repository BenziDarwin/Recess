<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        return view("participants.index")->with("participants", $customers);
    }

    public function create()
    {
        return ("customers.create");
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Customers::create($input);
        return redirect('customer')->with('flash_message', 'Customer Added!');
    }

    public function show($id)
    {
        $customer = Customers::find($id);
        return view('particpants.show')->with('participants', $customer);
    }

    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('particpants.edit')->with('participants', $customer);
    }


    public function update(Request $request, $id)
    {
        $customer = Customers::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('customer')->with('flash_message', 'customer Updated!');
    }

    public function destroy($id)
    {
        Customers::destroy($id);
        return redirect('customer')->with('flash_message', 'customer deleted!');
    }
}
