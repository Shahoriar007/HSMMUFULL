<?php

namespace App\Http\Controllers;

use App\Models\StudentAttendence;
use App\Models\User;
use App\Models\Onlineadmission;
use Illuminate\Http\Request;

class StudentAttendenceController extends Controller
{
    public function index($class, $section){

        $studentAtt = Onlineadmission::where('admitted_class','=', $class)->where('admitted_section','=', $section)->get();

        return view('teacher.teacherSection.studentAttendence',compact('studentAtt'));
    }

    public function viewAll($class, $section){

        $students = StudentAttendence::where('class','=', $class)->where('section','=', $section)->paginate(15); 
       
        return view('teacher.teacherSection.allstudentAttendence', compact('students'));
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
                'class' => $request->stuClass,
                'section' => $request->section,
            ]);

        }

       return response()->json(['att'=>$request->attendence]);
    }
}
