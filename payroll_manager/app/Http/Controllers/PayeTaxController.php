<?php

namespace App\Http\Controllers;

use App\Models\PayeTax;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PayeTaxController extends Controller
{
    //
    // show all PayeTax
    public function index()
    {
        return view('deductions.payeTax.index', [
            'payeTaxBands' => PayeTax::get(),
        ]);
    }

    // Show create PayeTax form
    public function create()
    {
        return view('deductions.payeTax.create');
    }

    // Store PayeTax data
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'chargeable_income' => ['required', Rule::unique('paye_tax', 'chargeable_income')],
            'rate' => 'required',
            'payable' => 'required',
            'cummulative_income' => 'required',
            'cummulative_payable' => 'required'
        ]);
        PayeTax::create($formFields);



        return redirect('/deductions/payetax')->with('message', 'PAYE Tax Band Added Sucessfully!');
    }

    // Show edit PayeTax
    public function edit(PayeTax $payetax)
    {
        return view('deductions.payeTax.edit', ['payeTax' => $payetax]);
    }

    // Update PayeTax data
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'chargeable_income' => 'required',
            'rate' => 'required',
            'payable' => 'required',
            'cummulative_income' => 'required',
            'cummulative_payable' => 'required'
        ]);

        $payeTax = PayeTax::find($id);

        // Getting values from the blade template form
        $payeTax->chargeable_income = $request->get('chargeable_income');
        $payeTax->rate = $request->get('rate');
        $payeTax->payable = $request->get('payable');
        $payeTax->cummulative_income = $request->get('cummulative_income');
        $payeTax->cummulative_payable = $request->get('cummulative_payable');
        $payeTax->update($formFields);


        return back()->with('message', 'PAYE Tax Band Updated Sucessfully!');
    }

    public function destroy($id)
    {
        $payeTax = PayeTax::find($id);
        $payeTax->delete();

        return redirect('/deductions/payetax')->with('success', 'PAYE Tax Band Deleted Sucessfully!.');
    }
}