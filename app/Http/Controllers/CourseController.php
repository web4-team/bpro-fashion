<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $courses = Course::all();
        return view('school_Mgm.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('school_Mgm.create');
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
            'name'=>'required',
            'fees'=>'required'
            
        ]);

        $course = new Course([
            'name' => $request->get('name'),
            'fees' => $request->get('fees'),
            'discount' => $request->get('discount'),
            'duration' => $request->get('duration')
            
        ]);
        $course->save();
        return redirect('/courses')->with('success', 'Contact Successfully Added!');
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
         $course = Course::find($id);
        return view('school_Mgm.edit', compact('course')); 
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
            'name'=>'required',
            'fees'=>'required'
            
        ]);

         $course = Course::find($id);
            $course->name = $request->get('name');
            $course->fees = $request->get('fees');
            $course->discount = $request->get('discount');
            $course->duration = $request->get('duration');
            
        
        $course->save();
        return redirect('/courses')->with('success', 'Your Course Successfully Changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect('/courses')->with('success', 'Your course have been deleted!');
    }
}
