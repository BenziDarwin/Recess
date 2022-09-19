<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::guard('customer')->attempt(['name' => $request->name, 'password' =>
        $request->password], $request->remember)) {
            return redirect()->intended(route('home'));
        }
        return back()->withErrors(["failed" => "Invalid username or password!"]);
    }
}
