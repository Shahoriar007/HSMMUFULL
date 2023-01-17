<?php

namespace App\Http\Controllers;

use App\Models\StudentAttendence;
use App\Models\Onlineadmission;
use Illuminate\Http\Request;

class StudentAttendenceController extends Controller
{
    public function index($class, $section){


        $studentAtt = Onlineadmission::where('admitted_class','=', $class)->where('admitted_section','=', $section)->get();

        return view('teacher.teacherSection.studentAttendence',compact('studentAtt'));
    }

    public function store(Request $request){

        date_default_timezone_set('Asia/Dhaka');
        $date = date('y-m-d');

        $studentAttUpdate = StudentAttendence::where('todayDateAtt', '=', $date)->where('studentId','=', $request->studentId)->get();

        if(count($studentAttUpdate)>0 )
        {
            $studentAttUpdate[0]->update([
                'present' => $request->attendence,
            ]);
            
        }
        else{
            StudentAttendence::create([

                'todayDateAtt' => $date,
                'studentId' => $request->studentId,
                'present' => $request->attendence,
            ]);

        }

        

       return response()->json(['att'=>$request->attendence]);
    }
}
