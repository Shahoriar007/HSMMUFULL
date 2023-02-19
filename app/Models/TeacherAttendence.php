<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAttendence extends Model
{
    use HasFactory;

    protected $fillable = [
        'todayDate',
        'teacherId',
        'teacherName',
        'inTime',
        'outTime',

    ];
}
