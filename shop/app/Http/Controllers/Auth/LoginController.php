<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);
        $name = $request->name;
        $password = $request->password;
        // Attempt to log the user in
        if (count(DB::select("select * from admins where name = ? and password = ?", [$name, $password])) >= 1) {
            // if successful, then redirect to their intended location
            Session::put("name", $name);
            return redirect()->intended('/dashboard');
        } else if (count(DB::select("select * from customers where name = ? and password = ?", [$name, $password])) >= 1) {
            Session::put("name", $name);
            return redirect()->intended('/home');
        }
        return back()->withErrors(["failed" => "invalid info!"]);
    }
    public function logout()
    {
        Session::forget("name");
        return redirect('/');
    }
}
