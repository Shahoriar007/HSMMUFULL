<?php

namespace App\Http\Controllers;

use App\Models\Tutionfee;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class StudentTutionFees extends Controller
{
    public function index(){
        $id = Auth::guard('web')->user()->id;
        $studentId = 'stu'.$id;
        $tution_fees = Tutionfee::where('studentId',$studentId)->get();
        
        return view('studentTutionFees',compact('tution_fees'));
    }
}
