<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard', [
            'employees' => Employee::latest()->get(),
            'departments' => Department::latest()->get(),
            'designations' => Designation::latest()->get()
       ]);
    }

     public function employee_distro(){
       
            $departments = Department::latest()->get();
            $employees = [];

            foreach($departments as $department) {
                $no_employees = Employee::where('department_id', $department->id)->count();

                array_push($employees, $no_employees);
            }
            
       return array($departments, $employees);
    }
}
