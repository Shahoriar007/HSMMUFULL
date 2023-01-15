<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutionfee extends Model
{
    use HasFactory;
    protected $fillable = [
        'studentId',
        'tution_fee',
        'year',
        'month',
        'status'
    ];
}
