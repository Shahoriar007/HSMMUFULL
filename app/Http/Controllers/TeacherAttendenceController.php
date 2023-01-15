<?php

namespace App\Http\Controllers;

use App\Models\TeacherAttendence;
use Illuminate\Http\Request;

class TeacherAttendenceController extends Controller
{
    public function index()
    {
        $teacher = TeacherAttendence::all();

        return view('admin.adminSection.teacher_attendence', compact('teacher'));
    }

    public function store(Request $request)
    {
        $teacherAtt = TeacherAttendence::create([
            'todayDate' => $request->todayDate,
            'teacherId' => $request->teacherId,
            'teacherName' => $request->teacherName,
            'inTime' => $request->inTime,
        ]);

        return redirect()->route('teacherAttendence');

    }

    public function update(Request $request)
    {
        $todayDate = $request->todayDate;
        $teacherId = $request->teacherId;

        $teacherAttUpdate = TeacherAttendence::where('todayDate', '=', $request->todayDate)->get();

        $teacherAttUpdate[0]->outTime = $request->outTime;

        $teacherAttUpdate[0]->save();

        return redirect()->route('teacherAttendence');

    }

    
}
