<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Batch;
use App\Employee;
use App\User;

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
        $course=Course::count();
        $batch=Batch::count();
        $employee=Employee::count();
        $user=User::count();
        return view('home',compact('student','course','batch','employee','user'));
    
    }

}
