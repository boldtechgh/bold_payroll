<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // show all departments
    public function index(){
        return view('departments.index',[
            'departments' => Department::latest()->get()
       ]);
    }
}
