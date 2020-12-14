<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Auth;
use App\Visit;
use App\Employee;
use App\Treatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class C_VisitController extends Controller {

    public function delete(Request $request) {
        Visit::where('id', $request->id)->delete();
        return redirect('/terminy')->with('info', 'Wizyta odwołana');
    }

    public function add(Request $request) {
        $employeeId = $request->id;
        $date = $request->data;
        $hour = $request->godzina;

        $busy = Visit::where('empl_id', $employeeId)->where('day', $date)->where('time', $hour)->first();

        if ($busy) {
            return redirect('/terminy/' . $employeeId)->with('errors', 'Termin już zajęty');
        }
        $visit = new Visit();
        $visit->empl_id = $employeeId;
        $visit->cust_id = Auth::id();
        $visit->treat_id = $request->zabieg;
        $visit->day = $date;
        $visit->time = $hour;

        $visit->save();
        return redirect('/terminy')->with('info', 'Wizyta została poprawnie zarezerwowana.');
    }

    public function userVisits() {
        $id = Auth::user()->id;
        $visits = Visit::where('cust_id', '=', $id)->get();
        foreach ($visits as $visit) {
            $visit->employee = Employee::where('id', $visit->empl_id)->get()->first();
            $visit->treatment = Treatment::where('id', $visit->treat_id)->get()->first();
        }
        return view('customer/myVisits', ['visits' => $visits]);
    }
}
