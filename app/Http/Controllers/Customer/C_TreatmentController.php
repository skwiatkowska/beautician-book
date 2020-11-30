<?php

namespace App\Http\Controllers\Customer;
use App\Treatment;
use App\Http\Controllers\Controller;

class C_TreatmentController extends Controller {
    
    public function treatments() {
        $treatments = Treatment::all();
        return view('customer/treatments', ['treatments' => $treatments]);
    }
}
