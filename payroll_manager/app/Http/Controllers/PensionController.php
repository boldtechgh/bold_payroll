<?php

namespace App\Http\Controllers;

use App\Models\Pension;
use App\Models\Employee;
use Illuminate\Http\Request;

class PensionController extends Controller
{
    //
     // show all Pensions
    public function index(){
        return view('reports.pension.index',[
            'pensions' => Pension::get(),
       ]);
    }

    // Store pension data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            
            'pension_tier' => 'required',
            'percentage' => 'required',
            
        ]);
        Pension::create($formFields);

        return redirect('/reports/ssnit/settings')->with('message','Tier added');
    }

    // Update pension data
     public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
            
            'pension_tier' => 'required',
            'percentage' => 'required',
           
        ]);

        $pension = Pension::find($id);

        // Getting values from the blade template form
        
        $pension->pension_tier =  $request->get('pension_tier');
        $pension->percentage =  $request->get('percentage');
       

        $pension->save();
        
        return back()->with('message','Tier Updated Sucessfully!');
    }

    public function generate($id)
    {
        $pension = Pension::find($id);
        $employees = Employee::get();
        $total_contribution = 0;
        $total_salary = 0;
        
        foreach($employees as $employee) {
            $total_contribution += ($pension->percentage/100)*$employee->salary;
            $total_salary += $employee->salary;
        }
 
        return view('reports.pension.generate',[
            'pension' => $pension,
            'employees' => $employees,
            'total_contribution' => $total_contribution,
            'total_salary' => $total_salary
       ]);
    } 

     public function destroy($id)
    {
        $pension = Pension::find($id);
        $pension->delete();
 
        return redirect('/reports/ssnit/settings')->with('success', 'Pension tier removed.');
    } 

}
