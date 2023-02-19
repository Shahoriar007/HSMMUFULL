<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onlineadmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentname_in_bangla',
        'studentname_in_english',
        'birthDate',
        'ageYears',
        'ageMonths',

        'birthReg',
        'nationality',
        'bloodGroup',

        'completed_class',
        'pre_institution',
        'seeking_admission_class',
        'admitted_class',
        'admitted_section',
        'admission_type',
        'roll',

        'siblingsName',

        'fathername_in_bangla',
        'fathername_in_english',
        'fatherOccupation',
        'father_edu_qua',
        'fatherNid',

        'mothername_in_bangla',
        'mothername_in_english',
        'motherOccupation',
        'mother_edu_qua',
        'motherNid',

        'monthlyIncome_parents_in_number',
        'monthlyIncome_parents_in_words',

        'phoneNumber_father',
        'phoneNumber_mother',

        'emailID_father',
        'emailID_mother',

        'whatsappNumb',
        'emergencyNumb',

        'current_address',
        'permanent_address',

        'transport',
        'photo',
        'status',
        'tution_fee',

        'field1',
        'field2',
        'field3',

    ];
}
