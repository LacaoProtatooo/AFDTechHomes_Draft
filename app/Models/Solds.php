<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solds extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'customer_customer_id',
        'property_property_id',
        'payment_method',
         
    ];
}
