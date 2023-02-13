<?php

namespace App\Http\Controllers;
use App\Models\Deduction;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DeductionController extends Controller
{
     // show all Deductions
     public function index(){
        return view('deductions.index',[
            'deductions' => Deduction::latest()->get()
       ]);
    }

    // Show create deduction form
    public function create(){
        return view('deductions.create');
    }

    // Store deduction data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'deduction_name' => ['required', Rule::unique('deductions','deduction_name')],
            'deduction_amount' => 'required',
            'deduction_description' => 'required'
        ]);
        Deduction::create($formFields);

        

        return redirect('/deductions')->with('message','Deduction Added Sucessfully!');
    }
    

        // Show single deduction
        public function edit(Deduction $deduction){
            return view('deductions.edit',['deduction' => $deduction]);
        }
     // Update deduction data
     public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
            'deduction_name' =>  'required',
            'deduction_amount' =>  'required',
            'deduction_description' => 'required'
        ]);

        $deduction = Deduction::find($id);

        // Getting values from the blade template form
        $deduction->deduction_name =  $request->get('deduction_name');
        $deduction->deduction_amount =  $request->get('deduction_amount');
        $deduction->deduction_description = $request->get('deduction_description');
        $deduction->update($formFields);
        

        return back()->with('message','Deduction Updated Sucessfully!');
    }
    public function destroy($id)
    {
        $deduction = Deduction::find($id);
        $deduction->delete();
 
        return redirect('/deductions')->with('success', 'Deduction Deleted Sucessfully!.');
    } 
}
