<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\PayrollAllowance;

class PayrollAllowanceController extends Controller
{
    //
     public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'payroll_id' => 'required',
            'employee_id' => 'required',
            'allowance_name' => 'required',
            'allowance_amount' => 'required',
            'mode' => ''
        ]);
        PayrollAllowance::create($formFields);

        

        return;
    }
    
}
