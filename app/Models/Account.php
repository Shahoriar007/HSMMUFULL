<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_tution_fees',
        'total_salaries',
        'fund_amount',
        'electricity_bill',
        'staff_salaries',
        'water_bill',
        'miscellaneous',	
        'remaining',
        'year',
        'month'

    ];
}
