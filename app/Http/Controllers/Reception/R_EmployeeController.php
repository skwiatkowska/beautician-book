<?php

namespace App\Http\Controllers\Reception;

use App\Employee;
use App\User;
use App\Visit;
use App\Deadline;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
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


    public function addDeadlines($id, Request $request) {
        $deadline = new Deadline();
        $deadline->empl_id = $id;
        $deadline->time_from = $request->time_from;
        $deadline->time_to = $request->time_to;
        $deadline->day = $request->date;
        $deadline->save();
        return redirect('admin/terminy/' . $id)->with('info', 'Godziny przyjęć dodane poprawnie');
    }

    public function deleteDeadline($id, Request $request) {
        Deadline::where('empl_id', $id)->where('day', $request->date)->delete();
        return redirect('admin/terminy/' . $id)->with('info', 'Dzień przyjęć usunięty');
    }


    public function changeDeadline($id, Request $request) {
        $deadline = Deadline::where('empl_id', $id)->where('day', $request->date)->first();
        $deadline->time_from = $request->time_from;
        $deadline->time_to = $request->time_to;
        $deadline->save();
        return redirect('admin/terminy/' . $id)->with('info', 'Godziny przyjęć zmienione');
    }


    public function employeesListForVisits() {
        $employees = Employee::orderBy('lname', 'asc')->get();
        return view('reception/allVisitsInit', ['employees' => $employees]);
    }

    public function employeesListAndVisits($id) {
        $employees = Employee::orderBy('lname', 'asc')->get();
        $employee =  Employee::where('id', $id)->first();

        $deadlines = Deadline::where('empl_id', '=', $id)->get();
        $employeeCalendar = [];
        foreach ($deadlines as $deadline) {
            $date = $deadline['day'];
            $start = $deadline->time_from;
            $employeeCalendar[$date] = [];
            while (strtotime($start) < strtotime($deadline->time_to)) {
                $employeeCalendar[$date][] = $start;
                $start = date('H:i', strtotime($start . '+1 hour'));
            }
        }

        $visitDays = array_keys($employeeCalendar);
        $visits = Visit::where('empl_id', $id)->whereIn('day', $visitDays)->get();

        $busyVisits = [];
        foreach ($visits as $visit) {
            if (!array_key_exists($visit->day, $busyVisits)) {
                $busyVisits[$visit->day] = [];
            }
            $busyVisits[$visit->day][] = substr($visit->time, 0, 5);
        }

        foreach ($employeeCalendar as $data => $hours) {
            if (array_key_exists($data, $busyVisits)) {
                foreach ($hours as $hour) {
                    $found = in_array($hour, $busyVisits[$data]);
                    if ($found) {
                        $key = array_search($hour, $employeeCalendar[$data]);
                        $all = Deadline::join('Visits', 'Deadlines.empl_id', '=', 'Visits.empl_id')->join('customers', 'customers.id', '=', 'Visits.cust_id')->join('treatments', 'treatments.id','=','Visits.treat_id')->where('Visits.empl_id', $id)
                            ->where('Visits.day', $data)->where('Visits.time', $hour)->first();
                        $employeeCalendar[$data][$key] = $all;
                    }
                }
            }
        }
        return view('reception/allVisits', ['employees' => $employees, 'employeeData' => $employee, 'employeeVisits' => $employeeCalendar]);
    }

    public function deleteAccount($id) {
        $employee = Employee::where('id', $id)->first();
        $visits = Visit::where('empl_id', $employee->id)->get();
        $deadlines = Deadline::where('empl_id', $employee->id)->get();
        if (!empty($visits)) {
            foreach ($visits as $visit) {
                $visit->delete();
            }
        }
        if (!empty($deadlines)) {
            foreach ($deadlines as $deadline) {
                $deadline->delete();
            }
        }
        $employee->delete();
        return redirect('/admin/pracownicy')->with('info', 'Pracownik ' . $employee->fname . ' ' . $employee->lname . ' usunięty');
    }
}
