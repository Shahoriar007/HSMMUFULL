<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Teacherapplications;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class TeacherApplicationController extends Controller
{
    public function index(Request $request){
        return view('teacherApplication');
    }
    public function create(Request $request)
    {

        //  Image name genarate, resize and save in a folder
        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save('upload/teacher_images/'.$name_gen);
        $save_url = 'upload/teacher_images/'.$name_gen;

        $cv = $request->file('cv');
        $cvName = hexdec(uniqid()).'.'.$cv->getClientOriginalExtension();
        $request->file('cv')->move(
            base_path() . '/public/cvs', $cvName
        );


        //  Insert others field in database
        Teacherapplications::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'photo' => $name_gen,
            'ssc_year' => $request->input('ssc_year'),
            'ssc_group' => $request->input('ssc_group'),
            'ssc_gpa' => $request->input('ssc_gpa'),
            'hsc_year' => $request->input('hsc_year'),
            'hsc_group' => $request->input('hsc_group'),
            'hsc_gpa' => $request->input('hsc_gpa'),
            'grad_year' => $request->input('grad_year'),
            'grad_dept' => $request->input('grad_dept'),
            'grad_cgpa' => $request->input('cgpa'),
            'grad_major' => $request->input('major'),
            'position' => $request->input('position'),
            'cv' => $cvName,
            'cover_let' => $request->input('cover_let')


            
         ]);

         $notification = array(
            'message' => 'Application form submitted succesfully!',
            'alert-type' => 'success'
        );

         // return redirect to same page
        return redirect()->route('home')->with($notification);

    }
    public function show(){
        $teacherApplications = Teacherapplications::all();
        return view('admin.adminSection.teacher_applications', compact('teacherApplications'));
    }
    public function applicationDetail($id){
        $detail = Teacherapplications::find($id);
        return view('admin.adminSection.teacher_applications_details',compact('detail'));

    }

    public function approveView($id){
        //dd('hi');
        $teacherInfo = Teacherapplications::find($id);
        //dd($teacherInfo->status);

        if($teacherInfo->status == 1){
            // change status
            Teacherapplications::findOrFail($id)->update([
                'status' => 0,
            ]);

            // delete user
            $que = "tcr".$id;
            Teacher::where("teacherId","=",$que)->delete();

            return  redirect()->route('teacherApplications');
        }
        
        return view('admin.adminSection.teacher_application_approve',compact('teacherInfo'));

    }
    public function approveInput(Request $request){
        $id = $request->id;
        $name = $request->name;

        // user id generate
        $newTeacherId = "tcr".$id;

        $newPassword = "password";

        Teacherapplications::findOrFail($id)->update([

            'designation' => $request->designation,
            'salary' => $request->salary,
            'start_date' => $request->start_date,
            'teacher_type' => $request->teacher_type,
            'subject' => $request->subject,
            'status' => 1,

        ]);

        $user = Teacher::create([

            'name' => $name,
            'teacherId' => $newTeacherId,
            'subject' => $request->subject,
            'email' => $request->email,
            'password' => Hash::make($newPassword),

        ]);

        event(new Registered($user));
        
        return  redirect()->route('teacherApplications');
    }
}
