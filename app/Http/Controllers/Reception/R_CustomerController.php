<?php

namespace App\Http\Controllers\Reception;

use App\Customer;
use App\Http\Controllers\Controller;

class R_CustomerController extends Controller {

    public function customers() {
        $customers = Customer::all();
        return view('reception/customers', ['customers' => $customers]);
    }
    public function accountDataView($id) {
        $customer = Customer::where('id', $id)->first();
        return view('reception/customerProfile', ['customer' => $customer]);
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

}
