<?php

namespace App\Http\Controllers\Customer;

use App\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class C_RegisterController extends Controller {

    public function registerForm() {
        return view('customer/registration');
    }

    public function registerCustomer(Request $request) {
        $isRegistered = Customer::where('email', $request->email)->first();
        if ($isRegistered != null) {
            return redirect('/rejestracja')->with('errors','Email zajęty');
        }

        $customer = new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->pesel =  $request->pesel;
        $customer->mobile = $request->mobile;
        $customer->password = bcrypt($request->pwd);
        $customer->save();

        return redirect('logowanie')->with('info', 'Konto zostało zarejestrowane');
    }
}
