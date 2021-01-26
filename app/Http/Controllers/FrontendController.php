<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student;
use App\Batch;



class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $batch = Batch::all();
      // $course = Course::all();
      // return view('frontend.mainpage',compact('course','batch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "course" => 'required',
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
        $student->comment = request('comment');
        
        $student->note = request('note');
        $student->bpro=implode(',', request('bpro'));
   
        // $student['bpro'] = $request('bpro');
        // Student::create($student);
        
        

        $student->save();
        // dd($request);
        //Return redirect // 5
        return redirect()->route('stu_register.index')->with('success','student create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}