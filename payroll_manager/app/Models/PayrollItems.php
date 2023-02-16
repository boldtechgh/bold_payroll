<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollItems extends Model
{
    use HasFactory;

    protected $fillable = ['payroll_id','employee_id','total_days','days_worked','salary','total_allowance','total_deduction','net_salary'];
}
