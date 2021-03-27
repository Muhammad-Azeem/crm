<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'parent_id', 'profile_pic', 'date', 'tl_name', 'agent_name', 'customer_name',
                           'company_name','cell_phone', 'home_phone', 'customer_email', 'service_type',
                           'billing_ac_number', 'reference', 'ssn', 'dob', 'per_month', 'total_to_pay', 'receivable',
                           'comment', 'complete_address','zip_code', 'city', 'state',  'country', ];

}
