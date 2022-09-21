<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            dd("correct Admin");
            return redirect()->intended('/dashboard');
        } else if (Auth::guard('customer')->attempt(['name' => $request->name, 'password' => $request->password])) {
            dd("correct Customer");
            return redirect()->intended('/home');
        }
    }
    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('customer')->check()) {
            Auth::guard('customer')->logout();
        }
        return redirect('/');
    }
}
