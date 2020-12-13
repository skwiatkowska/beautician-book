<?php

namespace App\Http\Controllers\Reception;

use App\Customer;
use App\Http\Controllers\Controller;

class R_CustomerController extends Controller {

    public function customers() {
        $customers = Customer::all();
        return view('reception/customers', ['customers' => $customers]);
    }

    public function settingsPage($id) {
        $customer = Customer::where('id', $id)->first();
        return view('reception/customerSettings', ['customer' => $customer]);
    }

    public function changeData($id, Request $request) {
        $customer = Customer::where('id', $id)->first();
        $customer->fname = $request->fname;
        $customer->lname =  $request->lname;
        $customer->email = $request->email;
        $customer->pesel = $request->pesel;
        $customer->mobile = $request->mobile;
        $customer->save();
        return redirect('/admin/klient/' . $id)->with('info', 'Dane zmienione');
    }


    public function changePassword($id) {
        $customer = Customer::where('id', $id)->first();
        $customer->password = bcrypt($customer->pesel);
        $customer->save();
        return redirect('/admin/klient/' . $id)->with('info', 'Hasło zmienione');
    }


    public function accountDataView($id) {
        $customer = Customer::where('id', $id)->first();
        return view('reception/customerProfile', ['customer' => $customer]);
    }

    

    public function deleteAccount($id) {
        $customer = Customer::where('id', $id)->first();
        $visits = Visit::where('cust_id', $customer->id)->get();
        if (!empty($visits)) {
            foreach ($visits as $visit) {
                $visit->delete();
            }
        }
        $customer->delete();

        return redirect('/admin/klienci')->with('info', 'Konto usunięte');
    }




    public function employeesListForACustomer() {
        $employees = Employee::orderBy('lname', 'asc')->get();;
        return view('reception/newCustomerVisit', ['employees' => $employees]);
    }

}
