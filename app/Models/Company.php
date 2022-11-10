<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'zip_code',
        'address1',
        'address2',
        'tel_number',
        'fax_number',

        'order_mail',
        'inquiry_mail',
        'sender_mail',
        'error_mail',
        'copyright',
        'business_registration_number',
    ];
}
