<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacherapplications extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'photo',
        'ssc_year',
        'hsc_year',
        'grad_year',
        'ssc_group',
        'Hsc_group',
        'grad_dept',
        'ssc_gpa',
        'hsc_gpa',
        'grad_cgpa',
        'grad_major',
        'position',
        'initial',
        'designation',
        'cv',
        'cover_let',
        'status',
        'salary',
        'start_date',
        'teacher_type'
        

    ];
}
