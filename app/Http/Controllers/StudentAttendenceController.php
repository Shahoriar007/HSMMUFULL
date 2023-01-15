<?php

namespace App\Http\Controllers;

use App\Models\StudentAttendence;
use Illuminate\Http\Request;

class StudentAttendenceController extends Controller
{
    public function index(){

        return view('studentAttendence');
    }
}
