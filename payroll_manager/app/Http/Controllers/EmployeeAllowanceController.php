<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Allowance;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\EmployeeAllowance;

class EmployeeAllowanceController extends Controller
{
    //
    // show all Allowances
    public function index(){
        return view('employee_allowances.index',[
            'employees' => Employee::latest()->get(),
            'employee_allowances' => EmployeeAllowance::latest()->get(),
            'allowances' => Allowance::latest()->get()
       ]);
    }

    // Show assign employee allowance form
    public function create(){
        return view('employee_allowances.create',['allowances' => Allowance::latest()->get(), 'employees' => Employee::latest()->get()]);
    }

    // Store allowance data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'allowance_id' => 'required',
            'employee_id' => 'required',
        ]);
        EmployeeAllowance::create($formFields);

        return redirect('/employee_allowances')->with('message','Allowance Assigned Sucessfully!');
    }
    

        // Assign single employee allowance
        public function edit($id){
            return view('employee_allowances.edit',['employee' => Employee::find($id), 'allowances' => Allowance::latest()->get()]);
        }
     
    
    public function destroy($id)
    {
        $allowance = EmployeeAllowance::find($id);
        $allowance->delete();
 
        return redirect('/employee_allowances')->with('success', 'Employees allowance removed.');
    } 
}
