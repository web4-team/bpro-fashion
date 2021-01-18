<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Batch;
use PDF;

class StudentController extends Controller
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

    
    public function index(){
        $students = Student::all();
        $batches = Batch::all();
        $courses = Course::all();
        return view('students.index',compact('students','batches','courses')); //compact('$students')
    }

    public function downloadPDF($id) {
        $student = Student::find($id);
        $course = Course::all();
        $batches = Batch::all();
        $pdf = PDF::loadView('students.certificate', compact('student','course','batches'));
        // $customPaper = array(0,0,650,450);
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download($student->name.".pdf");
    }

    // // Generate PDF
    // public function createPDF() {
    //   // retreive all records from db
    //   $data = Student::all();

    //   // share data to view
    //   view()->share('students',$data);
    //   $pdf = PDF::loadView('pdf_view', $data);

    //   // download PDF file with download method
    //   return $pdf->download('pdf_file.pdf');
    // }
    
    public function create(){
        $course = Course::all();
    	$batch = Batch::all();
    	return view ('students.create',compact('course','batch'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "code" => 'required',
            "course" => 'required',
        	"batch" => 'required',
        	"accept_date" => 'required',        	
            "name" => 'required | min:5 | max:191',
            "dob" => 'required',
            "age" => 'required | max:2' ,
            "phone" => 'required|min:5| max:11',
            "email" => 'required',
            "education" => 'required',
            "address" => 'required',
            "bpro" => 'required',
        ]);
       
       $student = new Student;
        $student->code = request('code');
        $student->course_id = request('course');
        $student->batch_id = request('batch');
        $student->accept_date = request('accept_date');
        $student->name = request('name');
        $student->dob = request('dob');
        $student->age = request('age');
        $student->phone = request('phone');
        $student->email = request('email');        
        $student->education = request('education');
        $student->address = request('address');
        $student->objective = request('objective');
        $student->comment = request('comment');
        
        $student->note = request('note');
        $student->bpro=implode(',', request('bpro'));
   
        // $student['bpro'] = $request('bpro');
        // Student::create($student);
        
        

        $student->save();
        //dd($request);
        //Return redirect // 5
        return redirect()->route('students.index')->with('success','student create successfully');
    }

    public function show($id){
        $student = Student::find($id);
        $courses = Course::all();
        $batches = Batch::all();
        return view('students.show',compact('student','courses','batches'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $course = Course::all();
        $batch = Batch::all();
        return view('students.edit',compact('student','course','batch'));
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
            "code" => 'required',
            "course" => 'required',
            "batch" => 'required',
            "accept_date" => 'required',            
            "name" => 'required | min:5 | max:191',
            "dob" => 'required',
            "age" => 'required | max:2' ,
            "phone" => 'required|min:5| max:11',
            "email" => 'required',
            "education" => 'required',
            "address" => 'required',
            "bpro" => 'required',
        ]);
        
        $student = Student::find($id);
        $student->code = request('code');
        $student->course_id = request('course');
        $student->batch_id = request('batch');
        $student->accept_date = request('accept_date');
        $student->name = request('name');
        $student->dob = request('dob');
        $student->age = request('age');
        $student->phone = request('phone');
        $student->email = request('email');        
        $student->education = request('education');
        $student->address = request('address');
        $student->objective = request('objective');
        $student->comment = request('comment');
        $student->bpro = implode(",", request('bpro'));
        $student->note = strip_tags(request('note'));

        $student->save();
      
        return redirect()->route('students.index')->with('success','Student update successfully');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index');  
    }
}
