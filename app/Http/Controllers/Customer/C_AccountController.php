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

}
