<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_code ',
        'identity_number ',
        'emp_name',
        'phone ',
        'nationality',
        'identity_image',
        'email ',
        'password',
        'password_confirm',
    ];
}