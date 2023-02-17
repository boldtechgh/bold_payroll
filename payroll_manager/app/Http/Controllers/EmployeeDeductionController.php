<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Deduction;
use Illuminate\Http\Request;
use App\Models\EmployeeDeduction;

class EmployeeDeductionController extends Controller
{
    //
     // show all Deductions
    public function index(){
        return view('employee_deductions.index',[
            'employees' => Employee::latest()->get(),
            'employee_deductions' => EmployeeDeduction::latest()->get(),
            'deductions' => Deduction::latest()->get()
       ]);
    }

    // Show assign employee deduction form
    public function create(){
        return view('employee_deductions.create',['deductions' => Deduction::latest()->get(), 'employees' => Employee::latest()->get()]);
    }

    // Store deduction data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'deduction_id' => 'required',
            'employee_id' => 'required',
        ]);
        EmployeeDeduction::create($formFields);

        return redirect('/employee_deductions')->with('message','Deduction Assigned Successfully!');
    }
    

        // Assign single employee deduction
        public function edit($id){
            return view('employee_deductions.edit',['employee' => Employee::find($id), 'deductions' => Deduction::latest()->get()]);
        }

       
    
    public function destroy($id)
    {
        $deduction = EmployeeDeduction::find($id);
        $deduction->delete();
 
        return redirect('/employee_deductions')->with('success', 'Employees deduction removed.');
    } 
}
