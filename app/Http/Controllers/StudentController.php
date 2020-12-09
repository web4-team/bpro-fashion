<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Course;

class StudentController extends Controller
{
    public function index(){
    	$students = Student::all();
        return view('students.index',compact('students')); //compact('$students')
    }
    
    public function create(){
    	
    	return view ('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        	"course" => 'required',
        	"accept_date" => 'required',        	
            "name" => 'required | min:5 | max:191',
            "dob" => 'required',
            "age" => 'required | max:2' ,
            "phone" => 'required|min:5| max:11',
            "email" => 'required',
            "education" => 'required',
            "address" => 'required',
            "objective" => 'required',
            "bpro" => 'required'
        ]);
        
        $student = new Student;
        $student->course_id = request('course');
        $student->accept_date = request('accept_date');
        $student->name = request('name');
        $student->dob = request('dob');
        $student->age = request('age');
        $student->phone = request('phone');
        $student->email = request('email');        
        $student->education = request('education');
        $student->address = request('address');
        $student->objective = request('objective');
        $student->bpro = request('bpro');

        $student->save();
        //dd($request);
        //Return redirect // 5
        return redirect()->route('students.index');
    }

    public function show($id){
        $student = Student::find($id);
        // $courses = Course::all();
        return view('students.show',compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        // $courses = Course::all();
        return view('students.edit',compact('student'));
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
            "course" => 'required',
            "accept_date" => 'required',            
            "name" => 'required | min:5 | max:191',
            "dob" => 'required',
            "age" => 'required | max:2' ,
            "phone" => 'required|min:5| max:11',
            "email" => 'required',
            "education" => 'required',
            "address" => 'required',
            "objective" => 'required',
            "bpro" => 'required'
        ]);
        
        $student = Student::find($id);
        $student->course_id = request('course');
        $student->accept_date = request('accept_date');
        $student->name = request('name');
        $student->dob = request('dob');
        $student->age = request('age');
        $student->phone = request('phone');
        $student->email = request('email');        
        $student->education = request('education');
        $student->address = request('address');
        $student->objective = request('objective');
        $student->bpro = request('bpro');

        $student->save();
        //dd($request);
        //Return redirect // 5
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index');  
    }
}
