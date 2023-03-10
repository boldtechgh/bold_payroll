<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    use HasFactory;

    protected $fillable = ['allowance_name', 'allowance_amount', 'allowance_description','start_date','end_date','mode'];
}
