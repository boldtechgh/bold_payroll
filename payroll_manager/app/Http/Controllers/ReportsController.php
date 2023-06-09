<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\Pension;
use App\Models\Employee;
use App\Models\PayrollType;
use App\Models\PayrollItems;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function index()
    {
        return view('reports.index', [
            'tiers' => Pension::get(),
            'payrolls' => Payroll::latest()->get()
        ]);
    }

    public function getPayrolls()
    {
        return view('reports.payroll.index', [
            'payrolls' => Payroll::latest()->get(),
            'payrollTypes' => PayrollType::latest()->get(),
        ]);
    }


    // Show single payroll
    public function show($refNo)
    {
        $payroll = Payroll::find($refNo);
        // dd($payroll->id);

        $payroll_items = PayrollItems::where('payroll_id', $payroll->ref_no)->get();
        // dd($payroll_items);

        $total_salary = 0;
        $total_allowances = 0;
        $total_deductions = 0;
        $total_paye_tax = 0;
        $total_net_salary = 0;

        foreach ($payroll_items as $payroll_item) {
            $total_salary += $payroll_item->salary;
            $total_allowances += $payroll_item->total_allowance;
            $total_deductions += $payroll_item->total_deduction;
            $total_paye_tax += $payroll_item->paye_tax;
            $total_net_salary += $payroll_item->net_salary;
        }



        return view('reports.payroll.show', [
            'payroll_items' => $payroll_items,
            'payroll' => $payroll,
            'employees' => Employee::latest()->get(),
            'payroll_types' => PayrollType::latest()->get(),
            'total_salary' => $total_salary,
            'total_allowances' => $total_allowances,
            'total_deductions' => $total_deductions,
            'total_paye_tax' => $total_paye_tax,
            "total_net_salary" => $total_net_salary,
        ]);
    }

    public function showPaye($refNo)
    {
        $payroll = Payroll::find($refNo);
        // dd($payroll->id);

        $payroll_items = PayrollItems::where('payroll_id', $payroll->ref_no)->get();
        // dd($payroll_items);

        $total_salary = 0;
        $total_paye_tax = 0;

        foreach ($payroll_items as $payroll_item) {
            $total_salary += $payroll_item->total_salary;
            $total_paye_tax += $payroll_item->paye_tax;
        }



        return view('reports.tax.show', [
            'payroll_items' => $payroll_items,
            'payroll' => $payroll,
            'employees' => Employee::latest()->get(),
            'payroll_types' => PayrollType::latest()->get(),
            'total_salary' => $total_salary,
            'total_paye_tax' => $total_paye_tax,
        ]);
    }
}