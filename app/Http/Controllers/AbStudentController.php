<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbStudent;
use App\AbCourse;
use App\AbBatch;
use PDF;
use Carbon\Carbon;

class AbStudentController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $ab_students = AbStudent::all();
        $ab_counts = AbStudent::where('ab_course_id','=','5')->count();
        $ab_batches = AbBatch::all();
        $ab_courses = AbCourse::all();
        return view('ab_students.index',compact('ab_students','ab_batches','ab_courses','ab_counts')); //compact('$students')
    }

    
    public function downloadPDF($id) {
        $ab_student = AbStudent::find($id);
        $ab_course = AbCourse::all();
        $ab_batches = AbBatch::all();
        return view('ab_students.certificate',compact('ab_student','ab_batches','ab_course'));
        // $ab_pdf = PDF::loadView('ab_students.certificate', compact('ab_student','ab_course','ab_batches'));
        // // $customPaper = array(0,0,650,450);
        // $ab_pdf->setPaper('letter', 'landscape');
        // return $ab_pdf->download($ab_student->ab_name.".pdf");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ab_course = AbCourse::all();
    	$ab_batch = AbBatch::all();
    	return view ('ab_students.create',compact('ab_course','ab_batch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "ab_code" => 'required',
            "ab_course" => 'required',
        	"ab_batch" => 'required',
        	"ab_accept_date" => 'required',        	
            "ab_name" => 'required | min:5 | max:191',
            "ab_dob" => 'required',           
            "ab_phone" => 'required|min:5| max:11',
            // "email" => 'required',
            // "education" => 'required',
            // "address" => 'required',
            "ab_bpro" => 'required',
        ]);
       
       $ab_student = new AbStudent;
        $ab_student->ab_code = request('ab_code');
        $ab_student->ab_course_id = request('ab_course');
        $ab_student->ab_batch_id = request('ab_batch');
        $ab_student->ab_accept_date = request('ab_accept_date');
        $ab_student->ab_name = request('ab_name');
        $ab_student->ab_dob = request('ab_dob');
        $ab_student->ab_age = request('ab_age');
        $ab_student->ab_phone = request('ab_phone');
        $ab_student->ab_email = request('ab_email');        
        $ab_student->ab_education = request('ab_education');
        $ab_student->ab_first_paid = request('ab_first');
        $ab_student->ab_second_paid = request('ab_second');
        $ab_student->ab_address = request('ab_address');
        $ab_student->ab_objective = request('ab_objective');
        $ab_student->ab_comment = request('ab_comment');
        
        $ab_student->ab_note = request('ab_note');
        $ab_student->ab_bpro=implode(',', request('ab_bpro'));
   
        // $student['bpro'] = $request('bpro');
        // Student::create($student);
        
        

        $ab_student->save();
        //dd($request);
        //Return redirect // 5
        return redirect()->route('ab_students.index')->with('success','Student create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ab_student = AbStudent::find($id);
        $ab_courses = AbCourse::all();
        $ab_batches = AbBatch::all();
        return view('ab_students.show',compact('ab_student','ab_courses','ab_batches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ab_student = AbStudent::find($id);
        $ab_course = AbCourse::all();
        $ab_batch = AbBatch::all();
        return view('ab_students.edit',compact('ab_student','ab_course','ab_batch'));
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
        $request->validate([
            "ab_code" => 'required',
            "ab_course" => 'required',
            "ab_batch" => 'required',
            "ab_accept_date" => 'required',            
            "ab_name" => 'required | min:5 | max:191',
            "ab_dob" => 'required',
            "ab_age" => 'required | max:2' ,
            "ab_phone" => 'required|min:5| max:11',
            "ab_email" => 'required',
            "ab_education" => 'required',
            "ab_address" => 'required',
            "ab_bpro" => 'required',
        ]);
        
        $ab_student = AbStudent::find($id);
        $ab_student->ab_code = request('ab_code');
        $ab_student->ab_course_id = request('ab_course');
        $ab_student->ab_batch_id = request('ab_batch');
        $ab_student->ab_accept_date = request('ab_accept_date');
        $ab_student->ab_name = request('ab_name');
        $ab_student->ab_dob = request('ab_dob');
        $ab_student->ab_age = request('ab_age');
        $ab_student->ab_phone = request('ab_phone');
        $ab_student->ab_email = request('ab_email');        
        $ab_student->ab_education = request('ab_education');
        $ab_student->ab_first_paid = request('ab_first');
        $ab_student->ab_second_paid = request('ab_second');
        $ab_student->ab_address = request('ab_address');
        $ab_student->ab_objective = request('ab_objective');
        $ab_student->ab_comment = request('ab_comment');
        $ab_student->ab_bpro = implode(",", request('ab_bpro'));
        $ab_student->ab_note = strip_tags(request('ab_note'));

        $ab_student->save();
      
        return redirect()->route('ab_students.index')->with('success','Student update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ab_student = AbStudent::find($id);
        $ab_student->delete();
        return redirect()->route('ab_students.index');  
    }
}
