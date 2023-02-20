<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\Employee;
use App\Models\Allowance;
use App\Models\Deduction;
use App\Models\PayrollItems;
use App\Models\PayrollType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\EmployeeAllowance;
use App\Models\EmployeeDeduction;

class PayrollItemsController extends Controller
{
    //
     // Store payroll data
    public function store($ref){
        // dd($request->all());
       $employees = Employee::latest()->get();
       

       foreach ($employees as $employee) {
            $total_allowance = 0;
            $total_deduction = 0;

            $allowances = EmployeeAllowance::where('employee_id', $employee->employee_id)->get();

            $deductions = EmployeeDeduction::where('employee_id', $employee->employee_id)->get();

            foreach ($allowances as $allowance) {
                $allowance_amount = Allowance::where('id', $allowance->allowance_id)->sum('allowance_amount');
                $total_allowance = $total_allowance + $allowance_amount;         
            }

            foreach ($deductions as $deduction) {
                $deduction_amount = Deduction::where('id',$deduction->deduction_id)->sum('deduction_amount');
                $total_deduction = $total_deduction + $deduction_amount;  
            }

            $net_salary = $employee->salary + $total_allowance - $total_deduction;

            $formFields = [
                'payroll_id' => $ref,
                'employee_id' => $employee->id,
                'total_days' => '10',
                'days_worked' => '9',
                'salary' => $employee->salary,
                'total_allowance' => $total_allowance,
                'total_deduction' => $total_deduction,
                'net_salary' => $net_salary
            ];
            
            PayrollItems::create($formFields);
       }
       
      return redirect("/payrolls/$ref/status");
        

        
    }


        public function show($refNo){
            $payroll_item = PayrollItems::select('payroll_items.*', 'employees.*','payrolls.*', 'departments.department_name', 'designations.designation_name')
                ->join('employees', 'payroll_items.employee_id', '=', 'employees.id')
                ->join('payrolls', 'payroll_items.payroll_id', '=', 'payrolls.ref_no')
                ->join('departments', 'employees.department_id', '=', 'departments.id')
                ->join('designations', 'employees.designation_id', '=', 'designations.id')
                ->where('payroll_items.id', $refNo)
                ->first();
            
            $allowances = EmployeeAllowance::select('employee_allowances.allowance_id', 'allowances.*')
                ->join('allowances', 'employee_allowances.allowance_id', '=', 'allowances.id')
                ->where('employee_allowances.employee_id', '=', $payroll_item->employee_id)
                ->get();
            
            $deductions = EmployeeDeduction::select('employee_deductions.deduction_id', 'deductions.*')
                ->join('deductions', 'employee_deductions.deduction_id', '=', 'deductions.id')
                ->where('employee_deductions.employee_id', '=', $payroll_item->employee_id)
                ->get();
            // dd($payroll_item, $refNo, $allowances, $deductions);

             if (!$payroll_item) {
            abort(404, 'Payroll record not found');
        }

            return view('payroll_items.show',[
                'payroll_item' => $payroll_item,
                'allowances' => $allowances,
                'deductions' => $deductions 
            ]);
        }
}
