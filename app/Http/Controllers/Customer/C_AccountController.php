<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Visit;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class C_AccountController extends Controller {

    public function index() {
        return view('customer/home');
    }

    public function accountInfo() {
        $customer = Auth::user();
        return view('customer/myAccount', ['data' => $customer]);
    }

    public function settings() {
        return view('customer/settings');
    }

    public function changeData(Request $request) {
        $name = $request->fname;
        $surname = $request->lname;
        $email = $request->email;
        $pesel = $request->pesel;
        $mobile = $request->mobile;
        $customer = Auth::user();

        if ($name) {
            $customer->fname = $name;
        }
        if ($surname) {
            $customer->lname = $surname;
        }
        if ($email) {
            $customer->email = $email;
        }
        if ($pesel) {
            $customer->pesel = $pesel;
        }
        if ($mobile) {
            $customer->mobile = $mobile;
        }
        $customer->save();
        return redirect('/dane')->with('info', 'Dane zostały zmienione');
    }

    public function changePassword(Request $request) {
        $user = Auth::user();
        $password = $user->password;
        if (Hash::check($request->pwd, $password)) {
            if ($request->pwd1 == $request->pwd2) {
                $user->password = bcrypt($request->pwd1);
                $user->save();
            }
        }
        return redirect('/dane')->with('info', 'Hasło zostało zmienione');
    }

    public function delete() {
        $user = Auth::user();
        Auth::logout();
        $visits = Visit::where('cust_id', $user->id)->get();
        if (!empty($visits)) {
            foreach ($visits as $visit) {
                $visit->delete();
            }
        }
        $user->delete();
        return view('customer/home')->with('info', 'Konto usunięte');
    }
}
