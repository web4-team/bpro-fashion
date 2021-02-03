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
use Carbon\Carbon;

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
        $item=Item::count();
        $employee=Employee::count();
        $user=User::count();
        $data_item=Item::all()->sum('total');
        $sale_total=Sale::all();

        return view('home',compact('student','course','batch','item','employee','user','sale_total','students','data_item','stu'));
    
    }

    public function searchHome(Request $request)
    {
        $from_date=request()->input('fromdate');
        $to_date=request()->input('todate');

        $data_item=Item::where('item_date','>',$from_date)->where('item_date','<',$to_date)->sum('total');
        $students=Student::all();
        $student=Student::count();
        $stu=Student::where('accept_date','>=',$from_date)->where('accept_date','<=',$to_date)->get();
        $course=Course::count();
        $batch=Batch::count();
        $employee=Employee::count();
        $user=User::count();
        
        $sale_total=Sale::where('date','>',$from_date)->where('date','<',$to_date)->get();
        

        return view('home',compact('student','course','batch','employee','user','sale_total','stu','data_item','students'));

    }

}
