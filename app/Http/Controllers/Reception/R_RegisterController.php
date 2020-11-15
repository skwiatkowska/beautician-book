<?php

namespace App\Http\Controllers\Reception;

use App\Employee;
use App\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class R_RegisterController extends Controller {
    public function index() {
        return view('reception/main');
    }

    public function employeeRegisterFormView() {
        return view('reception/newEmployee');
    }


    public function customerRegisterFormView() {
        return view('/reception/newCustomer');
    }

    public function customerRegister(Request $request) {
        $isRegistered = Customer::where('email',  $request->email)->first();
        if ($isRegistered != null) {
            return redirect('/admin/nowy_klient')->with('errors', 'Email zajęty');
        }

        $customer = new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->pesel =  $request->pesel;
        $customer->mobile = $request->mobile;
        $customer->password = bcrypt($request->pwd);
        $customer->save();

        return redirect('/admin/klient/' . $customer->id)->with('info', 'Konto zarejestrowane');
    }

    public function employeeRegister(Request $request) {
        $isRegistered = Employee::where('email', $request->email)->first();
        if (!empty($isRegistered)) {
            return redirect('/admin/nowy_pracownik')->with('errors', 'Email zajęty');
        }
        $employee = new Employee();
        $employee->fname = $request->fname;
        $employee->lname = $request->lname;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->save();

        return redirect('/admin/pracownik/'.$employee->id)->with('info', 'Konto zarejestrowane');
    }
}
