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

}
