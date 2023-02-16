<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\EmployeeAllowance;

class EmployeeAllowanceController extends Controller
{
    //
    // show all Allowances
    public function index(){
        return view('employee_allowances.index',[
            'employee_allowances' => EmployeeAllowance::latest()->get()
       ]);
    }

    // Show create allowance form
    public function create(){
        return view('employee_allowances.create');
    }

    // Store allowance data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'allowance_name' => ['required', Rule::unique('allowances','allowance_name')],
            'allowance_amount' => 'required',
            'allowance_description' => 'required'
        ]);
        EmployeeAllowance::create($formFields);

        

        return redirect('/allowances')->with('message','Allowance Add Sucess!');
    }
    

        // Show single allowance
        public function edit(EmployeeAllowance $allowance){
            return view('allowances.edit',['allowance' => $allowance]);
        }
     // Update allowance data
     public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
            'allowance_name' =>  'required',
            'allowance_amount' =>  'required',
            'allowance_description' => 'required'
        ]);

        $allowance = EmployeeAllowance::find($id);

        // Getting values from the blade template form
        $allowance->allowance_name =  $request->get('allowance_name');
        $allowance->allowance_amount =  $request->get('allowance_amount');
        $allowance->allowance_description = $request->get('allowance_description');
        $allowance->save();
        

        return back()->with('message','Allowance Updated Sucessfully!');
    }
    
    public function destroy($id)
    {
        $allowance = EmployeeAllowance::find($id);
        $allowance->delete();
 
        return redirect('/allowances')->with('success', 'Allowance removed.');
    } 
}
