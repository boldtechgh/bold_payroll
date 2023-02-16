<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = ['ref_no', 'date_from', 'date_to', 'payroll_type', 'status'];
}
