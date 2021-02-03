<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbCourse;
use App\AbBatch;

class AbCourseController extends Controller
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
            $ab_courses = AbCourse::all();
        return view('ab_school_Mgm.index',compact('ab_courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ab_batches=AbBatch::all();
       return view('ab_school_Mgm.create',compact('ab_batches'));
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
            'ab_name'=>'required',
            'ab_fees'=>'required',
            'ab_date'=>'required',
            'ab_duration'=>'required'
            
        ]);

        $ab_course = new AbCourse([
            'ab_name' => $request->get('ab_name'),
            'ab_batch_id' => $request->get('ab_batch_id'),
            'ab_type' => $request->get('ab_type'),
            'ab_fees' => $request->get('ab_fees'),
            'ab_discount' => $request->get('ab_discount'),
            'ab_amount' => $request->get('ab_amount'),
            'ab_date'=>$request->get('ab_date'),
            'ab_duration' => $request->get('ab_duration')
            
        ]);
        $ab_course->save();
        //dd($request);
        return redirect('/ab_course')->with('success', 'New Batch Successfully Created!');
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
        $ab_course = AbCourse::find($id);
        return view('ab_school_Mgm.edit', compact('ab_course')); 
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
            'ab_name'=>'required',
            'ab_fees'=>'required',
            'ab_date'=>'required',
            'ab_duration'=>'required'
            
        ]);
            
         $ab_course = AbCourse::find($id);
            $ab_course->ab_name = $request->get('ab_name');
            
            $ab_course->ab_type = $request->get('ab_type');             
            $ab_course->ab_fees = $request->get('ab_fees');
            $ab_course->ab_discount = $request->get('ab_discount');
            $ab_course->ab_amount = $request->get('ab_amount');

            $ab_course->ab_date = $request->get('ab_date');
            $ab_course->ab_duration = $request->get('ab_duration');
           
            

            
            
        
        $ab_course->save();
        return redirect('/ab_course')->with('success', 'Your Batch successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ab_course = AbCourse::find($id);
        $ab_course->delete();

        return redirect('/ab_course')->with('success', 'Your Batch has been Deleted!');
    }
}
