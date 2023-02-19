<?php

namespace App\Http\Controllers;


use App\Models\Onlineadmission;
use App\Models\User;
use App\Models\formlabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

use Image;

class OnlineadmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$value = formlabel::where(['relatedField' => 'field1'])->find('labelName');
        return view('onlineAdmission');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $request->validate([

            // Validation 

            'studentname_in_bangla' => 'required',
            'studentname_in_english' => 'required',
            'birthDate' => 'required',

            'birthReg' => 'required',
            'nationality' => 'required',
            'bloodGroup' => 'required',

            'completed_class' => 'required',
            'pre_institution' => 'required',
            'seeking_admission_class' => 'required',

            'admission_type' => 'required',

            'fathername_in_bangla' => 'required',
            'fathername_in_english' => 'required',
            'fatherOccupation' => 'required',
            'father_edu_qua' => 'required',
            'fatherNid' => 'required',

            'mothername_in_bangla' => 'required',
            'mothername_in_english' => 'required',
            'motherOccupation' => 'required',
            'mother_edu_qua' => 'required',
            'motherNid' => 'required',

            'monthlyIncome_parents_in_number' => 'required',

            'phoneNumber_father' => 'required',
            'phoneNumber_mother' => 'required',

            'current_address' => 'required',
            'permanent_address' => 'required',

            'transport' => 'required',

            'photo' => 'required',
           
        ]);

        //  Image name genarate, resize and save in a folder
        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(240,300)->save('upload/student_images/'.$name_gen);
        $save_url = 'upload/student_images/'.$name_gen;

        //  Insert others field in database
        Onlineadmission::create([
            'studentname_in_bangla' => $request->studentname_in_bangla,
            'studentname_in_english' => $request->studentname_in_english,
            'birthDate' => $request->birthDate,
            'ageYears' => $request->ageYears,
            'ageMonths' => $request->ageMonths,

            'birthReg' => $request->birthReg,
            'nationality' => $request->nationality,
            'bloodGroup' => $request->bloodGroup,

            'completed_class' => $request->completed_class,
            'pre_institution' => $request->pre_institution,
            'seeking_admission_class' => $request->seeking_admission_class,
            'admitted_class' => $request->admitted_class,
            'admitted_section' => $request->admitted_section,
            'admission_type' => $request->admission_type,
            'roll' => $request->roll,

            'siblingsName' => $request->siblingsName,

            'fathername_in_bangla' => $request->fathername_in_bangla,
            'fathername_in_english' => $request->fathername_in_english,
            'fatherOccupation' => $request->fatherOccupation,
            'father_edu_qua' => $request->father_edu_qua,
            'fatherNid' => $request->fatherNid,

            'mothername_in_bangla' => $request->mothername_in_bangla,
            'mothername_in_english' => $request->mothername_in_english,
            'motherOccupation' => $request->motherOccupation,
            'mother_edu_qua' => $request->mother_edu_qua,
            'motherNid' => $request->motherNid,

            'monthlyIncome_parents_in_number' => $request->monthlyIncome_parents_in_number,
            'monthlyIncome_parents_in_words' => $request->monthlyIncome_parents_in_words,
            'phoneNumber_father' => $request->phoneNumber_father,
            'phoneNumber_mother' => $request->phoneNumber_mother,
            'emailID_father' => $request->emailID_father,     
            'emailID_mother' => $request->emailID_mother,

            'whatsappNumb' => $request->whatsappNumb,
            'emergencyNumb' => $request->emergencyNumb,
            'current_address' => $request->current_address,
            'permanent_address' => $request->permanent_address,     
            
            'transport' => $request->transport,
            'photo' => $save_url,     

            'field1' => $request->field1,
            'field2' => $request->field2,
            'field3' => $request->field3,
            
         ]);

         $notification = array(
            'message' => 'Admission form submitted succesfully!',
            'alert-type' => 'success'
        );

         // return redirect to same page
        return redirect()->route('home')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Onlineadmission  $onlineadmission
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $onlineAdmInfo = Onlineadmission::all();
        return view('admin.adminSection.online_applications',compact('onlineAdmInfo'));
    }

    public function applicationDetails($id)
    {
        $adApplicationDetails = Onlineadmission::find($id);
        return view('admin.adminSection.online_applications_details',compact('adApplicationDetails'));
    }

    // Application approve view

    public function applicationApproveView($id)
    { 
        $studentInfo = Onlineadmission::find($id);

        if($studentInfo->status == 1){
            // change status
            Onlineadmission::findOrFail($id)->update([
                'status' => 0,
            ]);

            // delete user
            $que = "stu".$id;
            User::where("userId","=",$que)->delete();

            return  redirect()->route('allApplications');
        }

        return view('admin.adminSection.online_applications_approve_input',compact('studentInfo'));
    }

    // Application approve form submit

    public function applicationApproveInput(Request $request)
    { 
        $id = $request->id;
        $name = $request->studentname_in_english;

        // user id generate
        $newUserId = "stu".$id;

        $newPassword = "password";

        Onlineadmission::findOrFail($id)->update([

            'admitted_class' => $request->admitted_class,
            'admitted_section' => $request->admitted_section,
            'roll' => $request->roll,
            'tution_fee' => $request->tution_fee,
            'status' => 1,

        ]);

        $user = User::create([

            'name' => $name,
            'userId' => $newUserId,
            'password' => Hash::make($newPassword),
            'onlineadmissions_id' => $id,

        ]);

        event(new Registered($user));
        
        return  redirect()->route('allApplications');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Onlineadmission  $onlineadmission
     * @return \Illuminate\Http\Response
     */
    public function edit(Onlineadmission $onlineadmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Onlineadmission  $onlineadmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('admin.adminSection.updateStudentInformation',compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Onlineadmission  $onlineadmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onlineadmission $onlineadmission)
    {
        //
    }
    public function updateInfo(Request $request){

        $id = $request->id;
        $studentInfo = Onlineadmission::find($id);

        $studentInfo['studentname_in_bangla'] = $request->studentname_in_bangla;
        $studentInfo['studentname_in_english'] = $request->studentname_in_english;
        $studentInfo['birthDate'] = $request->birthDate;
        $studentInfo['ageYears'] = $request->ageYears;
        $studentInfo['ageMonths'] = $request->ageMonths;

        $studentInfo['birthReg'] = $request->birthReg;
        $studentInfo['nationality'] = $request->nationality;
        $studentInfo['bloodGroup'] = $request->bloodGroup;

        $studentInfo['completed_class'] = $request->completed_class;
        $studentInfo['pre_institution'] = $request->pre_institution;
        $studentInfo['seeking_admission_class'] = $request->seeking_admission_class;
        $studentInfo['admitted_class'] = $request->admitted_class;
        $studentInfo['admitted_section'] = $request->admitted_section;
        $studentInfo['admission_type'] = $request->admission_type;
        $studentInfo['roll'] = $request->roll;

        $studentInfo['siblingsName'] = $request->siblingsName;

         $studentInfo['fathername_in_bangla'] = $request->fathername_in_bangla;
         $studentInfo['fathername_in_english'] = $request->fathername_in_english;
         $studentInfo['fatherOccupation'] = $request->fatherOccupation;
         $studentInfo['father_edu_qua'] = $request->father_edu_qua;
         $studentInfo['fatherNid'] = $request->fatherNid;

         $studentInfo['mothername_in_bangla'] = $request->mothername_in_bangla;
         $studentInfo['mothername_in_english'] = $request->mothername_in_english;
         $studentInfo['motherOccupation']= $request->motherOccupation;
         $studentInfo['mother_edu_qua'] = $request->mother_edu_qua;
         $studentInfo['motherNid'] = $request->motherNid;

         $studentInfo['monthlyIncome_parents_in_number'] = $request->monthlyIncome_parents_in_number;
         $studentInfo['monthlyIncome_parents_in_words'] = $request->monthlyIncome_parents_in_words;
         $studentInfo['phoneNumber_father'] = $request->phoneNumber_father;
         $studentInfo['phoneNumber_mother'] = $request->phoneNumber_mother;
         $studentInfo['emailID_father'] = $request->emailID_father;    
         $studentInfo['emailID_mother'] = $request->emailID_mother;

         $studentInfo['whatsappNumb'] = $request->whatsappNumb;
         $studentInfo['emergencyNumb'] = $request->emergencyNumb;
         $studentInfo['current_address']= $request->current_address;
         $studentInfo['permanent_address'] = $request->permanent_address;    
        
         $studentInfo['transport'] = $request->transport;
        
         $studentInfo['field1'] = $request->field1;
         $studentInfo['field2'] = $request->field2;
         $studentInfo['field3'] = $request->field3;
         
         if( $request->file('photo')){
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(240,300)->save('upload/student_images/'.$name_gen);
            $save_url = 'upload/student_images/'.$name_gen;
            $studentInfo['photo'] = $save_url;
    
           }

        $studentInfo->save();

        

     $notification = array(
        'message' => 'Student Information Updated succesfully!',
        'alert-type' => 'success'
    );

     // return redirect to same page
    return redirect()->route('updateStudentInfo',['id'=>$id])->with($notification);


    }
}
