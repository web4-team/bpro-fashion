<?php

namespace App\Http\Controllers;

use App\Payroll;
use App\Employee;
use App\Role;
use App\Salary;
use Session;
use Paginate;
use Illuminate\Http\Request;

class PayrollController extends Controller
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
        $employee = Employee::findOrFail($id);
		return view('payroll.create')->with('employee',$employee);
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
		
	    $payroll = Payroll::create([
			'date' => $request->date,
			'salary' => $request->salary,
			'commission' => $request->commission,
			'bonus' => $request->bonus,
			'overtime' => $request->overtime,
			'leave' => $request->leave,
			'late' => $request->late,
			'employee_id' => $id
		]);
		
		// $payroll->grossPay();
		$payroll->save();
		
		Session::flash('success', 'Payroll Created');
		return redirect()->route('payrolls.show',['id'=>$id]);	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function payrollIndex($id){
		$employee = Employee::findOrFail($id);
    
		$pay=Payroll::where('employee_id',$id)->orderBy('date','desc')->get();
        return view('payroll.payroll',compact('employee','pay'));
    }
	
	 public function report()
      {
        $employees = Employee::get();
        $payrolls=Payroll::orderBy('date', 'asc')->get();
          return view('employees.report', compact('employees','payrolls'));
      }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $payroll = Payroll::findOrFail($id);
		return view('payroll.edit')->with('payroll',$payroll);
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
   
		
		$payroll = Payroll::findOrFail($id);
		$payroll->date = $request->date;
    $payroll->salary = $request->salary;
		$payroll->commission= $request->commission;
		$payroll->bonus = $request->bonus;
		$payroll->overtime = $request->overtime;
		$payroll->leave = $request->leave;
		$payroll->late = $request->late;
		$payroll->save();		
		

		
		Session::flash('success', 'Payroll Updated.');
		return redirect()->route('payrolls.show',['id'=>$payroll->employee_id]);			
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payroll=Payroll::findOrFail($id);
		$payroll->delete();
		
		Session::flash('success','Payroll Deleted');
		return redirect()->back();
    }
	public function bin(){
		$payrolls=Payroll::onlyTrashed()->get();
		return view('payroll.bin')->with('payrolls', $payrolls);
	}
	
	public function restore($id){
		$payroll=Payroll::withTrashed()->where('id', $id)->first();
		$payroll->restore();
		
		Session::flash('success', 'payroll row is restored.');
		return redirect()->route('employees.index');
	}
	
	public function kill($id){
		$payroll=Payroll::withTrashed()->where('id', $id)->first();		
		$payroll->forceDelete();
		
		Session::flash('success', 'payroll permanently destroyed.');
		return redirect()->route('employees.index');
	}
}
