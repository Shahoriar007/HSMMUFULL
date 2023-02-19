<?php

namespace App\Http\Controllers;

use App\Models\formlabel;
use App\Models\Teacherapplicationform;
use Illuminate\Http\Request;

class FormlabelController extends Controller
{
       public function show()
    {
        $formfields = formlabel::all();
        return view('admin.adminSection.student_applicationform_setup',compact('formfields'));
    }

    
    public function create(Request $request)
    {
        $relatedField = $request->relatedField;

        formlabel::where('relatedField', $relatedField)->update([

            'labelName' => $request->labelName,
        ]);

        return redirect()->route('studentFormsetupView');
    }

    public function view(){
        $formfields = Teacherapplicationform::all();
        return view('admin.adminSection.teacher_applicationform_setup',compact('formfields'));

    }
    public function make(Request $request){
        $relatedField = $request->relatedField;

        Teacherapplicationform::where('relatedField', $relatedField)->update([

            'lebelName' => $request->labelName,
        ]); 

        return redirect()->route('teacherFormsetupView');
        
    }
    


    public function destroyStudentFormField(Request $request){
       
        $fieldId = $request->field_id;
       
        formlabel::where('id', $fieldId)->update([

            'labelName' => null,
        ]);

        return redirect()->route('studentFormsetupView');



    }
    public function destroyteacherFormField(Request $request){

        $fieldId = $request->field_id;
       
        Teacherapplicationform::where('id', $fieldId)->update([

            'lebelName' => null,
        ]);

        return redirect()->route('teacherFormsetupView');
        

    }

    public function updateStudentFormField(Request $request){
        formlabel::find($request->id)->update([
            'labelName' => $request->label
        ]);
        return response()->json(['success' => 'successfully updated form field']);

    }
    public function updateTeacherFormField(Request $request){
        Teacherapplicationform::find($request->id)->update([
            'lebelName' => $request->label
        ]);
        return response()->json(['success' => 'successfully updated form field']);
    }


    
}
