<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Salary;
use App\Models\Teacher;

use App\Models\Teacherapplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

use Barryvdh\DomPDF\Facade\Pdf;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSalaries = Salary::all();
        return view('salary', compact('allSalaries'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $teachers = Teacherapplications::where('status',1)->get();
        foreach($teachers as $teacher){

            Salary::create([
                'teacherId' => 'tcr'. $teacher->id,
                'salary' => $teacher->salary,
                'year' => $request->year,
                'month' => $request->month,
                'status' => "pending"
            ]);
        }
        return redirect()->route('teacherSalaryGenerate');
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
     * Display the specified resource.P
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        //
    }

    public function updateSalaryStatus(Request $request){
        $id = $request->get('id');
        $status = $request->get('status');
        $amount = intval(str_replace(',','',$request->get('amount')));
        $year = $request->get('year');
        $month = $request->get('month');
        
        DB::table('salaries')->where('id',"=",$id)->update([
            'status' => $status
        ]);
        if($status == "paid"){
            $account = Account::where('year',"=",$year)->where('month',"=",$month)->get();
            $total = $account[0]->total_salaries;
            $total_salaries = $total + $amount;
            Account::where('year',"=",$year)->where('month',"=",$month)->update([
                'total_salaries' => $total_salaries,
            ]);
            return response()->json(['account'=>json_encode($total_salaries)]);
            
         }
        return response()->json(['ji'=>'hiiiiiiiiiiiiiiiiiiii']);

    }

    public function salary(){
        $id = Auth::guard('teacher')->user()->id;
        
        $teacherId = Teacher::find($id);

        $salaries = Salary::where('teacherId',$teacherId->teacherId)->paginate(10);

        return view('salaryView', compact('salaries'));
    }

    // Print Salary Invoice
    public function printSalaryInvoice($id){

        $invoiceTable = Salary::find($id);

        $invoiceSalaryData = array(
            "id"=>$invoiceTable->id,
            "teacherId"=>$invoiceTable->teacherId,
            "month"=>$invoiceTable->month,
            "salary"=>$invoiceTable->salary,

        );

        $pdf = Pdf::loadView('admin.adminSection.salaryInvoice', compact('invoiceSalaryData'));
        return $pdf->download();

        
    }
}
