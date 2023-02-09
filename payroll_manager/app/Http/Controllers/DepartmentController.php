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
}
