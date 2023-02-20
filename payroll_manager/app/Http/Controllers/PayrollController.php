<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\Employee;
use App\Models\PayrollType;
use App\Models\PayrollItems;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PayrollController extends Controller
{
    //
    // show all Payrolls
    public function index(){
        return view('payrolls.index',[
            'payrolls' => Payroll::latest()->get(),
            'payrollTypes' => PayrollType::latest()->get()
       ]);
    }

    // Show create payroll form
    public function create(){
        return view('payrolls.create',['payrollTypes' => PayrollType::latest()->get()]);
    }

    // Store payroll data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'ref_no' => ['required', Rule::unique('payrolls','ref_no')],
            'start_date' => 'required',
            'end_date' => 'required',
            'payroll_type' => 'required',
            'status' => 'required',
        ]);
        Payroll::create($formFields);

        return redirect('/payrolls')->with('message','Payroll Add Sucess!');
    }
    

        // Show single payroll
         public function show($refNo){
            $payroll = Payroll::find($refNo);
            // dd($payroll->id);

            $payroll_items = PayrollItems::where('payroll_id', $payroll->ref_no)->get();
            // dd($payroll_items);


            return view('payrolls.show',[
                'payroll_items' => $payroll_items, 
                'payroll' => $payroll,
                'employees' => Employee::latest()->get(),
                'payroll_types' => PayrollType::latest()->get(),
            ]);
        }

        //edit single payroll
        public function edit(Payroll $payroll){
            return view('payrolls.edit',['payroll' => $payroll, 'payrollTypes' => PayrollType::latest()->get()]);
        }
     // Update payroll data
     public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
             'ref_no' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'payroll_type' => 'required',
            'status' => 'required',
        ]);

        $payroll = Payroll::find($id);

        // Getting values from the blade template form
        $payroll->ref_no =  $request->get('ref_no');
        $payroll->start_date =  $request->get('start_date');
        $payroll->end_date =  $request->get('end_date');
        $payroll->payroll_type =  $request->get('payroll_type');
        $payroll->status =  $request->get('status');

        $payroll->save();
        
        return back()->with('message','Payroll Updated Sucessfully!');
    }

    // Update payroll status
     public function updateStatus($id){
        // dd($request->all());
        Payroll::where('ref_no', $id)->update(['status' => 'calculated']);
        
        return redirect('/payrolls')->with('message','Payroll Status Updated Sucessfully!');
    }
    
    public function destroy($id)
    {
        $payroll = Payroll::find($id);
        $payroll->delete();
 
        return redirect('/payrolls')->with('success', 'Payroll removed.');
    } 
}
