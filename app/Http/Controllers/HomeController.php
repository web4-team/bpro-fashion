<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Batch;
use App\Item;
use App\Sale;
use App\Employee;
use App\User;
use App\Expense;
use App\Payroll;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student=Student::count();
        $students=Student::all();
        $stu=Student::all();
        $course=Course::count();
        $batch=Batch::count();
        $employee=Employee::count();
        $user=User::count();
        $data_item=Item::all();
        $data_items=Item::all();
        $sale_total=Sale::all();
        $payroll=Payroll::all();
        $employee1=Employee::all();
        $results = DB::select('SELECT SUM(amount), income_id FROM expenses 
group by income_id');
           

        return view('home',compact('student','course','batch','employee','user','sale_total','students','data_item','stu','payroll','employee1','data_items','results'));
    
    }

    public function searchHome(Request $request)
    {
        $from_date=request()->input('fromdate');
        $to_date=request()->input('todate');

       
        $students=Student::all();
        $student=Student::count();
        $stu=Student::where('accept_date','>=',$from_date)->where('accept_date','<=',$to_date)->get();
        $course=Course::count();
        $batch=Batch::count();
        $employee=Employee::count();
        $user=User::count();
        // $expanse=Expense::where('date','>=',$from_date)->where('date','<=',$to_date)->get();
        $payroll=Payroll::where('date','>=',$from_date)->where('date','<=',$to_date)->get();
        $employee1=Employee::all();
        $data_items=Item::all();
        $expanse=Expense::where('income_id')->sum('amount')->groupBy('income_id')->get();
      
        
        $sale_total=Sale::where('date','>=',$from_date)->where('date','<=',$to_date)->get();
        $results = DB::select('SELECT SUM(amount), income_id FROM expenses 
      group by income_id');

        return view('home',compact('student','course','batch','employee','user','sale_total','stu','students','expanse','payroll','employee1','data_items','results'));

    }

}
