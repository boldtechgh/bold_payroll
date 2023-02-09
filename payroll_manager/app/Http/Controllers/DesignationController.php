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

    // Show create designation form
    public function create(){
        return view('designations.create',['departments' => Department::latest()->get()]);
    }

    // Show single designation
    public function edit(Designation $designation){
        return view('designations.edit',['designation' => $designation, 'departments' => Department::latest()->get()]);
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

    // Update designation data
    public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
            'designation_name' => 'required',
            'department_id' => 'required'
        ]);

        $designation = Designation::find($id);

        // Getting values from the blade template form
        $designation->designation_name =  $request->get('designation_name');
        $designation->department_id = $request->get('department_id');
        $designation->save();
        

        return back()->with('message','Designation Updated Sucessfully!');
    }

    public function destroy($id)
    {
        $designation = Designation::find($id);
        $designation->delete();
 
        return redirect('/designations')->with('success', 'Designation removed.');
    } 
}
