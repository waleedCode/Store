<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_code',
        'company_name',
        'Commercial_record_number',
        'Commercial_record_image',
        'tax_number',
        'bank_name',
        'bank_number',
        'iban_iamge',
        'password',
        'password_confirmation',

    ];
}
