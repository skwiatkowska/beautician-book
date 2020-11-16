<?php

namespace App\Http\Controllers\Reception;

use App\Employee;
use App\Http\Controllers\Controller;

class R_EmployeeController extends Controller {

    public function employees() {
        $employees = Employee::all();
        return view('reception/employees', ['employees' => $employees]);
    }

    public function accountInfo($id) {
        $employee = Employee::where('id', $id)->first();
        return view('reception/employeeProfile', ['employee' => $employee]);
    }

}
