<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_code',
        'identity_number',
        'full_name',
        'phone',
        'nationality',
        'bank_name',
        'iban_number',
        'email',
        'password',
        'password_confirmation',
        'identity_image',
        'iban_image',
    ];
}
