<?php

namespace App\Http\Controllers\Customer;

use App\Employee;
use App\Http\Controllers\Controller;

class C_EmployeeController extends Controller {    

    public function employees() {
        $employees = Employee::orderBy('lname', 'asc')->get();
        return view('/customer/employees', ['employees' => $employees]);
    }


}
