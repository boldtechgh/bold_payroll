<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    // show all departments
    public function index(){
        return view('departments.index',[
            'departments' => Department::latest()->get()
       ]);
    }

    // Show create department form
    public function create(){
        return view('departments.create');
    }

    // Store department data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'department_name' => ['required', Rule::unique('departments','department_name')],
            'department_short_name' => 'required'
        ]);
        Department::create($formFields);

        

        return redirect('/departments')->with('message','Department Add Sucess!');
    }
    

        // Show single department
        public function edit(Department $department){
            return view('departments.edit',['department' => $department]);
        }
     // Update designation data
     public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
            'department_name' =>  'required',
            'department_short_name' => 'required'
        ]);

        $department = Department::find($id);

        // Getting values from the blade template form
        $department->department_name =  $request->get('department_name');
        $department->department_short_name = $request->get('department_short_name');
        $department->save();
        

        return back()->with('message','Department Updated Sucessfully!');
    }

    public function destroy($id){
        $department = Department::find($id);
        $department->delete();
 
        return redirect('/departments')->with('success', 'Department removed.');
    }
}
