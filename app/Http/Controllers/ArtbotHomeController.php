<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbStudent;
use App\AbCourse;
use App\AbBatch;
use App\AbEmployee;
use App\User;

class ArtbotHomeController extends Controller
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
        $ab_student=AbStudent::count();
        $ab_course=AbCourse::count();
        $ab_batch=AbBatch::count();
        // $employee=Employee::count();
        $user=User::count();
        return view('artbothome',compact('ab_student','ab_course','ab_batch','user'));
    
    }

}
