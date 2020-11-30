<?php

namespace App\Http\Controllers\Reception;

use App\Employee;
use App\Http\Controllers\Controller;

class R_EmployeeController extends Controller {

    public function employees() {
        $employees = Employee::orderBy('lname', 'asc')->get();
        return view('reception/employees', ['employees' => $employees]);
    }


    public function accountInfo($id) {
        $employee = Employee::where('id', $id)->first();
        return view('reception/employeeProfile', ['employee' => $employee]);
    }

    

    public function settingsView($id) {
        $employee = Employee::where('id', $id)->first();
        return view('reception/employeeSettings', ['employee' => $employee]);
    }


    public function changeData($id, Request $request) {
        $employee = Employee::where('id', $id)->first();
        $employee->fname =  $request->fname;
        $employee->lname =  $request->lname;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->save();
        return redirect('/admin/pracownik/' . $id)->with('info', 'Dane zmienione');
    }


    

    public function deleteAccount($id) {
        $employee = Employee::where('id', $id)->first();
        //TODO visits & deadlines
        $employee->delete();
        return redirect('/admin/pracownicy')->with('info', 'Pracownik ' . $employee->fname . ' ' . $employee->lname . ' usunięty');
    }
}

}
