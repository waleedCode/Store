<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'driver_name',
        'id_car',
        'payload',
        'goods_type',
        'price',
        'order_status',
        'from_location',
        'to_location',
        'order_date',
        

    ];
}
