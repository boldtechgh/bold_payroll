<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DesignationController extends Controller
{
    //
    public function index(){
        return view('designations.index',[
            'designations' => Designation::latest()->get(),
            'departments' => Department::latest()->get()
       ]);
    }

    public function create(){
        return view('designations.create',['departments' => Department::latest()->get()]);
    }

    public function show(){
        return view('designations.show',['designations' => Designation::latest()->get()]);
    }

    // Store designation data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'designation_name' => ['required', Rule::unique('designations','designation_name')],
            'department_id' => 'required'
        ]);
        Designation::create($formFields);

        

        return redirect('/designations')->with('message','Designation Added Sucess!');
    }
}
