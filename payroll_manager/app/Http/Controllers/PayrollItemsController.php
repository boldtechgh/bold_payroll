<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\Employee;
use App\Models\Allowance;
use App\Models\Deduction;
use App\Models\PayrollType;
use App\Models\PayrollItems;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\PayrollAllowance;
use App\Models\PayrollDeduction;
use App\Models\EmployeeAllowance;
use App\Models\EmployeeDeduction;

class PayrollItemsController extends Controller
{
     // Store payroll data
    public function store($ref){
        // dd($request->all());
       $employees = Employee::latest()->get();       

       foreach ($employees as $employee) {
        $total_allowance = 0;
        $total_deduction = 0;

            //Get all allowances with fixed figures
            $allowances = EmployeeAllowance::where('employee_id', $employee->employee_id)
                            ->join('allowances', 'employee_allowances.allowance_id', '=', 'allowances.id')
                            ->where('allowances.mode', '=', 'fixed')
                            ->get();
            
            foreach($allowances as $allowance) {
                $total_allowance = $total_allowance + $allowance->allowance_amount;

                $formFields = [
                'payroll_id' => $ref,
                'employee_id' => $employee->id,
                'allowance_name' => $allowance->allowance_name,
                'allowance_amount' => $allowance->allowance_amount,
                'mode' => $allowance->mode
                ];
                
                PayrollAllowance::create($formFields);
            }
            

            //Get all percentage value allowances
            $percent_allowances = EmployeeAllowance::where('employee_id', $employee->employee_id)
                            ->join('allowances', 'employee_allowances.allowance_id', '=', 'allowances.id')
                            ->where('allowances.mode', '=', 'percentage')
                            ->get();
            
            foreach($percent_allowances as $allowance) {
                $amount = ($allowance->allowance_amount/100)*$employee->salary;
                $total_allowance = $total_allowance + $amount;

                $formFields = [
                'payroll_id' => $ref,
                'employee_id' => $employee->id,
                'allowance_name' => $allowance->allowance_name,
                'allowance_amount' => $allowance->allowance_amount,
                'mode' => $allowance->mode
                ];
                
                PayrollAllowance::create($formFields);
            }


            //get all fixed value deuductions
            $deductions = EmployeeDeduction::where('employee_id', $employee->employee_id)
                            ->join('deductions', 'employee_deductions.deduction_id', '=', 'deductions.id')
                            ->where('deductions.mode', '=', 'fixed')
                            ->get();

            foreach($deductions as $deduction) {
                $total_deduction = $total_deduction + $deduction->deduction_amount;

                $formFields = [
                'payroll_id' => $ref,
                'employee_id' => $employee->id,
                'deduction_name' => $deduction->deduction_name,
                'deduction_amount' => $deduction->deduction_amount,
                'mode' => $deduction->mode
                ];
                
                PayrollDeduction::create($formFields);
            }
            

            //Get all percentage value deductions
            $percent_deductions = EmployeeDeduction::where('employee_id', $employee->employee_id)
                            ->join('deductions', 'employee_deductions.deduction_id', '=', 'deductions.id')
                            ->where('deductions.mode', '=', 'percentage')
                            ->get();
            
            foreach($percent_deductions as $deduction) {
                $amount = ($deduction->deduction_amount/100)*$employee->salary;
                $total_deduction = $total_deduction + $amount;

                $formFields = [
                'payroll_id' => $ref,
                'employee_id' => $employee->id,
                'deduction_name' => $deduction->deduction_name,
                'deduction_amount' => $deduction->deduction_amount,
                'mode' => $deduction->mode
                ];
                
                PayrollDeduction::create($formFields);
            }


            //Get Net salary and salve Payslip
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
            

            $allowances = PayrollAllowance::select('payroll_allowances.*', 'employees.id')
                ->join('employees', 'payroll_allowances.employee_id', '=', 'employees.id')
                ->where('payroll_allowances.payroll_id', '=', $payroll_item->payroll_id)
                ->where('employees.employee_id', '=', $payroll_item->employee_id)
                ->get();

            $deductions = PayrollDeduction::select('payroll_deductions.*', 'employees.id')
                ->join('employees', 'payroll_deductions.employee_id', '=', 'employees.id')
                ->where('payroll_deductions.payroll_id', '=', $payroll_item->payroll_id)
                ->where('employees.employee_id', '=', $payroll_item->employee_id)
                ->get();

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
