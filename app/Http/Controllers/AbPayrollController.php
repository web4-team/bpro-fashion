<?php

namespace App\Http\Controllers;

use App\AbPayroll;
use App\AbEmployee;
use App\Role;
use App\Salary;
use Session;
use Paginate;
use Illuminate\Http\Request;

class AbPayrollController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){
        $employee = AbEmployee::findOrFail($id);
		return view('ab_payroll.create')->with('employee',$employee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id){
		
	   $this->validate($request,[
			'date'=> 'required',
			
		]);
		
	    $payroll = AbPayroll::create([
			'date' => $request->date,
			'salary' => $request->salary,
			'commission' => $request->commission,
			'bonus' => $request->bonus,
			'overtime' => $request->overtime,
			'leave' => $request->leave,
			'late' => $request->late,
			'ab_employee_id' => $id
		]);
		
		// $payroll->grossPay();
		$payroll->save();
		
		Session::flash('success', 'Payroll Created');
		return redirect()->route('ab_payrolls.show',['id'=>$id]);	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function payrollIndex($id){
		$employee = AbEmployee::findOrFail($id);
		$pay=AbPayroll::where('ab_employee_id',$id)->orderBy('date', 'asc')->get();
        return view('ab_payroll.payroll',compact('employee','pay'));
    }
	
	 public function report()
      {
        $employees = AbEmployee::get();
        $payrolls=AbPayroll::orderBy('date', 'asc')->get();
          return view('ab_employees.report', compact('employees','payrolls'));
      }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $payroll = AbPayroll::findOrFail($id);
		return view('ab_payroll.edit')->with('payroll',$payroll);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'date'=> 'required',
    ]);
   
		
		$payroll = AbPayroll::findOrFail($id);
		$payroll->date = $request->date;
		$payroll->commission= $request->commission;
		$payroll->bonus = $request->bonus;
		$payroll->overtime = $request->overtime;
		$payroll->leave = $request->leave;
		$payroll->late = $request->late;
		$payroll->save();		
		

		
		Session::flash('success', 'Payroll Updated.');
		return redirect()->route('ab_payrolls.show',['id'=>$payroll->ab_employee_id]);			
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payroll=AbPayroll::findOrFail($id);
		$payroll->delete();
		
		Session::flash('success','Payroll Deleted');
		return redirect()->back();
    }
	public function bin(){
		$payrolls=AbPayroll::onlyTrashed()->get();
		return view('payroll.bin')->with('payrolls', $payrolls);
	}
	
	public function restore($id){
		$payroll=AbPayroll::withTrashed()->where('id', $id)->first();
		$payroll->restore();
		
		Session::flash('success', 'payroll row is restored.');
		return redirect()->route('employees.index');
	}
	
	public function kill($id){
		$payroll=AbPayroll::withTrashed()->where('id', $id)->first();		
		$payroll->forceDelete();
		
		Session::flash('success', 'payroll permanently destroyed.');
		return redirect()->route('employees.index');
	}
}
