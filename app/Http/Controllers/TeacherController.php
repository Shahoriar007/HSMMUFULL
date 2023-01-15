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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
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
