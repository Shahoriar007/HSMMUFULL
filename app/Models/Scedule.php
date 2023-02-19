<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'class',
        'section',
        'teacher_id',
        'subject',
        'start_time',
        'end_time',
        'day'
    ];
    
}
