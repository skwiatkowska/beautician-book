<?php

namespace App\Http\Controllers\Customer;

use App\Employee;
use App\Deadline;
use App\Treatment;
use App\Visit;
use App\Http\Controllers\Controller;

class C_EmployeeController extends Controller {

    public function employees() {
        $employees = Employee::orderBy('lname', 'asc')->get();
        return view('/customer/employees', ['employees' => $employees]);
    }

    public function employeesDeadlines($id) {
        $employee = Employee::where('id', $id)->get()->first();
        $treatments = Treatment::all();
        $deadlines = Deadline::where('empl_id', $id)->whereDate('day', '>=', date("Ymd"))->orderBy('day', 'asc')->get();
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
                        unset($employeeCalendar[$data][$key]);
                    }
                }
            }
        }
        return view('/customer/deadlines', ['employee' => $employee, 'deadlines' => $employeeCalendar, 'treatments' =>$treatments]);
    }
}
