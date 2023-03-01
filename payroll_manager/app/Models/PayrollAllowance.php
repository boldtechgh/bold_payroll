<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollAllowance extends Model
{
    use HasFactory;

    protected $fillable = ['payroll_id', 'employee_id', 'allowance_name', 'allowance_amount', 'mode'];
}
