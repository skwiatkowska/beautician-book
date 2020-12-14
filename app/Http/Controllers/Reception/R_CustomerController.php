<?php

namespace App\Http\Controllers\Reception;

use App\Visit;
use App\Customer;
use App\Employee;
use App\Deadline;
use App\Treatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class R_CustomerController extends Controller {

    public function customers() {
        $customers = Customer::orderBy('lname', 'asc')->get();
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

    public function customerVisits($id) {
        $customer = Customer::where('id', $id)->first();
        $visits = Visit::where('cust_id', $customer->id)->get();
        foreach ($visits as $visit) {
            $visit->employee = Employee::where('id', $visit->empl_id)->get()->first();
            $visit->treatment = Treatment::where('id', $visit->treat_id)->get()->first();
        }
        return view('reception/customerVisits', ['customer' => $customer, 'visits' => $visits]);
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


    public function deleteVisit(Request $request) {
        Visit::where('id', $request->id)->delete();
        return redirect()->back()->with('info', 'Wizyta odwołana');
    }


    public function employeesListForACustomer() {
        $employees = Employee::orderBy('lname', 'asc')->get();;
        return view('reception/newCustomerVisit', ['employees' => $employees]);
    }


    public function addVisit(Request $request, $customer_id, $employee_id) {
        $currentVisit = Visit::where('empl_id', $employee_id)->where('day', $request->data)->where('time', $request->godzina)->first();
        if ($currentVisit) {
            return redirect('/admin/klient/' . $customer_id)->with('info', 'Wybrany termin jest już zarezerwowany');
        }
        $visit = new Visit();
        $visit->empl_id = $employee_id;
        $visit->cust_id = $customer_id;
        $visit->treat_id = $request->zabieg;
        $visit->day = $request->data;
        $visit->time = $request->godzina;
        $visit->save();

        return redirect('/admin/klient/' . $customer_id)->with('info', 'Wizyta poprawnie zarezerwowana');
    }

    public function employeesDeadlinesForACustomer($id, $employee_id) {
        $treatments = Treatment::all();

        $employee = Employee::where('id', $employee_id)->get()->first();

        $deadlines = Deadline::where('empl_id', $employee_id)->whereDate('day', '>=', date("Ymd"))->orderBy('day', 'asc')->get();
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
        $visits = Visit::where('empl_id', $employee_id)->whereIn('day', $visitDays)->get();

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
        return view('reception/newCustomerVisitDeadlines', ['deadlines' => $employeeCalendar, 'employee' => $employee, 'treatments' => $treatments]);
    }
}
