<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class A_LoginController extends Controller {
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function loginForm() {
        return view('login');
    }

    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $type = $request->input('user_type');

        if ($type == 'reception') {
            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
                return redirect()->intended('/admin')->with('info', 'Zalogowano poprawnie');
            } else {
                return back()->withErrors("Błędne dane")->withInput($request->only('email'));
            }
        } else {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->intended('')->with('info', 'Zalogowano poprawnie');
            } else {
                return back()->withErrors("Błędne dane")->withInput($request->only('email'));
            }
        }
    }

    public function logout() {
        if(Auth::guard('admin')->check() == true){
            Auth::guard('admin')->logout();
        }else{
        Auth::logout();
        }
        return redirect('/')->with('info', 'Wylogowano');
    }
}
