<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    //
    public function index(){
        return view('designations.index',[
            'designations' => Designation::latest()->get(),
            'departments' => Department::latest()->get()
       ]);
    }

    public function create(){
        return view('designations.create',['departments' => Department::latest()->get()]);
    }

    public function show(){
        return view('designations.show',['designations' => Designation::latest()->get()]);
    }
}
