<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AllowanceController extends Controller
{
    // show all Allowances
    public function index(){
        return view('allowances.index',[
            'allowances' => Allowance::latest()->get()
       ]);
    }

    // Show create allowance form
    public function create(){
        return view('allowances.create');
    }

    // Store allowance data
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'allowance_name' => ['required', Rule::unique('allowances','allowance_name')],
            'allowance_amount' => 'required',
            'allowance_description' => 'required'
        ]);
        Allowance::create($formFields);

        

        return redirect('/allowances')->with('message','Allowance Add Sucess!');
    }
    

        // Show single allowance
        public function edit(Allowance $allowance){
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

        $allowance = Allowance::find($id);

        // Getting values from the blade template form
        $allowance->allowance_name =  $request->get('allowance_name');
        $allowance->allowance_amount =  $request->get('allowance_amount');
        $allowance->allowance_description = $request->get('allowance_description');
        $allowance->save();
        

        return back()->with('message','Allowance Updated Sucessfully!');
    }
    
    public function destroy($id)
    {
        $allowance = Allowance::find($id);
        $allowance->delete();
 
        return redirect('/allowances')->with('success', 'Allowance removed.');
    } 
}
