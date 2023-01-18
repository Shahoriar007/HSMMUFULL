<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Onlineadmission;
use App\Models\Tutionfee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutionfeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTutionFees = Tutionfee::all();
        return view('tutionFee', compact('allTutionFees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $students = Onlineadmission::where('status',1)->get();
        foreach($students as $student){

            Tutionfee::create([
                'studentId' => 'stu'. $student->id,
                'tution_fee' => $student->tution_fee,
                'year' => $request->year,
                'month' => $request->month,
                'status' => "pending"
            ]);
        }
        Account::create([
            'year' => $request->year,
            'month' => $request->month,
            'total_tution_fees' => 0,
            'total_salaries'=> 0,
            'electricity_bill'=>0,
            'staff_salaries'=>0,
            'water_bill'=>0,
            'miscellaneous' =>0,
            'remaining' =>0
        ]);
        
        return redirect()->route('tutionFee');
    }


    public function updateTutionStatus(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        $amount = $request->get('amount');
        $year = $request->get('year');
        $month = $request->get('month');
        DB::table('tutionfees')->where('id',"=",$id)->update([
            'status' => $status
        ]);
        if($status == "paid"){
            $account = Account::where('year',"=",$year)->where('month',"=",$month)->get();
            $total = $account[0]->total_tution_fees;
            $total_tution_fees = $total + $amount;
            Account::where('year',"=",$year)->where('month',"=",$month)->update([
                'total_tution_fees' => $total_tution_fees,
            ]);
            return response()->json(['status'=>$status]);
            
         }
        return response()->json(['status'=>$status]);
        
    }

    public function update(Request $request, $studentId, $id)
    {
        
        $studentTuitionFee = Tutionfee::find($id)->update([

            'tution_fee' => $request->tution_fee
        ]);

        $findId = User::where('userId','=',$studentId)->get();

        $change = Onlineadmission::find($findId[0]->onlineadmissions_id)->update([

            'tution_fee' => $request->tution_fee
        ]);

        return redirect()->route('tutionFee');

    }
}
