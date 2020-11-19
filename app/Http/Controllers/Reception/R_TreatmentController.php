<?php

namespace App\Http\Controllers\Reception;

use App\Visit;
use App\Treatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class R_TreatmentController extends Controller {

    public function treatments() {
        $treatments = Treatment::all();
        return view('reception/treatments', ['treatments' => $treatments]);
    }

}
