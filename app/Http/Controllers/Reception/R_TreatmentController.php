<?php

namespace App\Http\Controllers\Reception;

use App\Treatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class R_TreatmentController extends Controller {

    public function treatments() {
        $treatments = Treatment::all();
        return view('reception/treatments', ['treatments' => $treatments]);
    }

    public function editView($id) {
        $treatment = Treatment::where('id', $id)->first();
        return view('reception/treatmentEdit', ['treatment' => $treatment]);
    }

    public function newTreatment() {
        return view('reception/newTreatment');
    }

    public function storeTreatment(Request $request) {
        $treatment = new Treatment();
        $treatment->name = $request->name;
        $treatment->price =  $request->price;
        $treatment->save();
        return redirect('/admin/zabiegi')->with('info', 'Zabieg dodany');
    }

    public function update($id, Request $request) {
        $treatment = Treatment::where('id', $id)->first();
        $treatment->name = $request->name;
        $treatment->price =  $request->price;
        $treatment->save();
        return redirect('/admin/zabiegi')->with('info', 'Dane zmienione');
    }

    public function delete($id) {
        $treatment = Treatment::where('id', $id)->first();
        $visits = Visit::where('treat_id', $id)->get();
        if($visits->count() > 0){
            return redirect()->back()->withErrors('Nie można usunąć zabiegu, do którego są przypisane wizyty');
        }
        $treatment->delete();

        return redirect('/admin/zabiegi')->with('info', 'Usunięto');
    }
}
