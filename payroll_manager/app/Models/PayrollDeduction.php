<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollDeduction extends Model
{
    use HasFactory;

    protected $fillable = ['payroll_id', 'employee_id', 'deduction_name', 'deduction_amount', 'mode'];
}
