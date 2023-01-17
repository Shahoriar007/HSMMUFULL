<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Teacherapplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $principal = Teacherapplications::where('designation',"=",'principal')->where('status',"=",1)->limit(1)->get();
        $quranic_female = Teacherapplications::where('teacher_type',"=",'quranic')->where('gender',"=",'female')->where('status',"=",1)->limit(4)->get();
        $quranic_male = Teacherapplications::where('teacher_type',"=",'quranic')->where('gender',"=",'male')->where('status',"=",1)->limit(4)->get();
        $academic_male = Teacherapplications::where('teacher_type',"=",'academic')->where('gender',"=",'female')->where('status',"=",1)->limit(4)->get();
        $academic_female = Teacherapplications::where('teacher_type',"=",'academic')->where('gender',"=",'male')->where('status',"=",1)->limit(4)->get();
        $assistantTeachers = Teacherapplications::where('designation',"=",'Assis. Academic Teacher')->limit(1)->get();
     
        return view('our_team', compact('principal','quranic_female','quranic_male','academic_male','academic_female','assistantTeachers'));
    }

    // Class Teacher Set Page View
    public function viewClassTeacherSet()
    {
        $classTeacher = Teacher::where('classTeacherClass','!=','0')->get();

        return view('admin.adminSection.classTeacherSet', compact('classTeacher'));
    }

    // Class Teracher Set post
    public function viewClassTeacherPost(Request $request)
    {

        $classTeacher = Teacher::where('teacherId','=',$request->teacherId);

        $classTeacher->update([
            'classTeacherClass' => $request->classTeacherClass,
            'classTeacherSection' => $request->classTeacherSection,
        ]);

        return redirect()->route('classTeacherSet');
    }
    
    // Class teacher set page delete
    public function classTeacherDelete($teacherId)
    {

        $classTeacher = Teacher::where('teacherId','=',$teacherId);

        $classTeacher->update([
            'classTeacherClass' => "0",
            'classTeacherSection' => "0",
        ]);

        return redirect()->route('classTeacherSet');
    }


    public function changePasswordView(Request $request){
        return view('changeTeacherPassword');


    }
    public function changePassword(Request $request){
        $input = $request->all();
        $current_pwd = $input['password'];
        $new_pwd = $input['new-password'];

        
        $id = Auth::guard('teacher')->user()->id;
        $user = Teacher::find($id);
        $user['password'] = Hash::make($new_pwd);
        $user['remember_token'] = Str::random(60);
        $user->save();

        return redirect('dashboard');


    }
}
