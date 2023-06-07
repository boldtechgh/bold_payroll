<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayeTax extends Model
{
    use HasFactory;

    protected $fillable = ['chargeable_income', 'rate', 'payable', 'cummulative_income', 'cummulative_payable'];
}