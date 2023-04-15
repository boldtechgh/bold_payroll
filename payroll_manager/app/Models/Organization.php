<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['organization_name', 'organization_branch', 'digital_address','organization_city',
    'organization_region'
    ,'organization_contact'
    ,'organization_email'
    ,'organization_website'];
}
