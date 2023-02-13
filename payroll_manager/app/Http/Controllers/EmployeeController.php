<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    // 
    public function index(){
        return view('employees.index',[
            'employees' => Employee::latest()->get()
       ]);
    }

    // Show create employee form
    public function create(){
        return view('employees.create',['employees' => Employee::latest()->get()]);
    }

    // Show single employee
    public function edit(Employee $employee){
        return view('employees.edit',['employee' => $employee, 'employees' => Employee::latest()->get()]);
    }

    // Store employee data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'employee_id' => ['required', Rule::unique('employees','employee_id')],
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'salary' => 'required',
            'contact' => 'required',
            'designation_id' => 'required',
            'department_id' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        if($request->hasFile('employee_profile')){
            $formFields['employee_profile'] = $request->file('employee_profile')->store('employee_profiles', 'public');
        }
        Employee::create($formFields);

        

        return redirect('/employees')->with('message','Employee Added Sucess!');
    }

    // Update designation data
    public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
            'employee_id' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'salary' => 'required',
            'contact' => 'required',
            'designation_id' => 'required',
            'department_id' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $employee = Employee::find($id);

        // Getting values from the blade template form
        $employee->employee_id =  $request->get('employee_id');
        $employee->first_name =  $request->get('first_name');
        $employee->middle_name =  $request->get('middle_name');
        $employee->last_name =  $request->get('last_name');
        $employee->gender =  $request->get('gender');
        $employee->date_of_birth =  $request->get('date_of_birth');
        $employee->email =  $request->get('email');
        $employee->salary =  $request->get('salary');
        $employee->contact =  $request->get('contact');
        $employee->designation_id =  $request->get('designation_id');
        $employee->department_id = $request->get('department_id');
        $employee->username = $request->get('username');
        $employee->password = $request->get('password');

        $employee->save();
        

        return back()->with('message','Employee Updated Sucessfully!');
    }

    public function destroy($id)
    {
        $designation = Employee::find($id);
        $designation->delete();
 
        return redirect('/employees')->with('success', 'Employee removed.');
    } 
}
