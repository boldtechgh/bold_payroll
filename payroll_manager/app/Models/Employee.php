<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'first_name',
        'middle_name',
        'last_name'
        ,
        'gender'
        ,
        'employee_profile'
        ,
        'date_of_birth'
        ,
        'email'
        ,
        'salary'
        ,
        'contact'
        ,
        'designation_id'
        ,
        'department_id'
        ,
        'username'
        ,
        'password'
    ];
}