<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formlabel extends Model
{
    use HasFactory;

    protected $fillable = [
        'labelName',
        'relatedField',
    ];
}
