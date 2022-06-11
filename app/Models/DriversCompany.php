<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriversCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_code',
        'company_name',
        'Commercial_record_number',
        'Commercial_record_image',
        'transportation_license_number',
        'tax_number',
        'bank_number_iban',
        'iban_iamge',
        'password',
        'password_confirmation',
    ];
}
