<?php

namespace App\Http\Controllers;

use App\Models\PayrollType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PayrollTypeController extends Controller
{
    //
    // show all PayrollTypes
    public function index(){
        return view('payroll_types.index',[
            'payrollTypes' => PayrollType::latest()->get()
       ]);
    }

    // Show create payrollType form
    public function create(){
        return view('payroll_types.create');
    }

    // Store payrollType data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'type' => ['required', Rule::unique('payroll_types','type')],
            'description' => 'required',
            
        ]);
        PayrollType::create($formFields);

        return redirect('/payroll_types')->with('message','PayrollType Add Sucess!');
    }
    

        // Show single payrollType
        public function edit(PayrollType $payrollType){
            return view('payroll_types.edit',['payrollType' => $payrollType]);
        }
     // Update payrollType data
     public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
            'type' => 'required',
            'description' => 'required',
        ]);

        $payrollType = PayrollType::find($id);

        // Getting values from the blade template form
        $payrollType->type =  $request->get('type');
        $payrollType->description =  $request->get('description');
        
        $payrollType->save();
        

        return back()->with('message','Payroll Type Updated Sucessfully!');
    }
    
    public function destroy($id)
    {
        $payrollType = PayrollType::find($id);
        $payrollType->delete();
 
        return redirect('/payroll_types')->with('success', 'Payroll Type removed.');
    } 
}
