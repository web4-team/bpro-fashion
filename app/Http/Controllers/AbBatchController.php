<?php

namespace App\Http\Controllers;

use App\AbBatch;
use App\AbCourse;

use Illuminate\Http\Request;

class AbBatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ab_batches = AbBatch::all();
    
        return view('ab_batch.index',compact('ab_batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ab_courses = AbCourse::all();

       return view('ab_batch.create',compact('ab_courses'));
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
            
            
        ]);

        $ab_batch = new AbBatch([
            'ab_name' => $request->get('ab_name'),
       
            
            
        ]);
        $ab_batch->save();
        // dd($batch)
        return redirect('/ab_batch')->with('success', 'Course Successfully Added!');
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
        $ab_batch = AbBatch::find($id);
        $ab_batch->delete();

        return redirect('/ab_batch')->with('success', 'Your Course have been deleted!');    }
}
