<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    protected $fillable = ['deduction_name', 'deduction_type', 'employer_amount', 'employee_amount', 'deduction_description','start_date','end_date','mode'];
}
